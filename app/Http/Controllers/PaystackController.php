<?php

namespace App\Http\Controllers;

use Paystack;

use App\Models\User;
use App\Models\Setting;
use App\Models\Agent;
use App\Models\Deposit;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;

use App\Mail\NewNotification;

use App\Http\Traits\CPTrait;


class PaystackController extends Controller
{
    use CPTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */

    public function redirectToGateway()
    {
        try {
            return Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['message' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        //dd($paymentDetails);
        $payamount = $paymentDetails['data']['amount'];
        $txn_ref = $paymentDetails['data']['reference'];
        $amount = $payamount / 100;

        $user = User::where('id', Auth::user()->id)->first();

        //save and confirm the deposit
        $dp = new Deposit();
        $dp->amount = $amount;
        $dp->txn_id = $txn_ref;
        $dp->payment_mode = "Paystack";
        $dp->status = 'Processed';
        $dp->proof = "Paystack";
        $dp->plan = "0";
        $dp->user = $user->id;
        $dp->save();

        //add funds to user's account
        User::where('id', $user->id)
            ->update([
                'account_bal' => $user->account_bal + $amount,
            ]);

        //get settings
        $referral_commission = Setting::getValue('referral_commission');
        $earnings = $referral_commission * $amount / 100;

        if (!empty($user->ref_by)) {
            //increment the user's referee total clients activated by 1
            Agent::where('agent', $user->ref_by)->increment('total_activated', 1);
            Agent::where('agent', $user->ref_by)->increment('earnings', $earnings);

            //add earnings to agent balance
            //get agent
            $agent = User::where('id', $user->ref_by)->first();
            User::where('id', $user->ref_by)
                ->update([
                    'account_bal' => $agent->account_bal + $earnings,
                    'ref_bonus' => $agent->ref_bonus + $earnings,
                ]);

            //credit commission to ancestors
            $deposit_amount = $amount;
            $array = User::all();
            $parent = $user->id;
            $this->getAncestors($array, $deposit_amount, $parent);
        }

        //send email notification
        $currency = Setting::getValue('currency');
        $site_name = Setting::getValue('site_name');
        $objDemo = new \stdClass();
        $objDemo->message = "$user->name, This is to inform you that your deposit of $currency$amount has been received and confirmed.";
        $objDemo->sender = "$site_name";
        $objDemo->date = \Carbon\Carbon::Now();
        $objDemo->subject = "Deposit processed!";
        Mail::bcc($user->email)->send(new NewNotification($objDemo));

        return redirect()->route('deposits')
            ->with('message', 'Payment Successful');
    }
}