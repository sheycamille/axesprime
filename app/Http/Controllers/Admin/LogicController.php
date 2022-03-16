<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use App\Models\User;
use App\Models\Images;
use App\Models\Content;
use App\Models\Deposit;
use App\Models\Setting;
use App\Models\Testimony;
use App\Models\Withdrawal;
use App\Models\Mt5Details;
use App\Models\AccountType;
use App\Models\Notification;
use App\Mail\NewNotification;
use App\Models\TpTransaction;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Tarikh\PhpMeta\Entities\Trade;
// use Tarikhagustia\LaravelMt5\LaravelMt5;

use Carbon\Carbon;



class LogicController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    // Add account type
    public function addaccounttype(Request $request)
    {
        $accounttype = new AccountType();

        $accounttype->name = $request['name'];
        $accounttype->cost = $request['cost'];
        $accounttype->min_price = $request['min_price'];
        $accounttype->max_price = $request['max_price'];
        $accounttype->minr = $request['minr'];
        $accounttype->maxr = $request['maxr'];
        $accounttype->gift = $request['gift'];
        $accounttype->expected_return = $request['return'];
        $accounttype->increment_type = $request['t_type'];
        $accounttype->increment_interval = $request['t_interval'];
        $accounttype->increment_amount = $request['t_amount'];
        $accounttype->expiration = $request['expiration'];
        $accounttype->type = 'Main';
        $accounttype->save();
        return redirect()->back()
            ->with('message', 'Account Type created Sucessfully!');
    }


    // Update account type
    public function updateaccounttype(Request $request)
    {
        AccountType::where('id', $request['id'])
            ->update([
                'name' => $request['name'],
                'price' => $request['price'],
                'min_price' => $request['min_price'],
                'max_price' => $request['max_price'],
                'minr' => $request['minr'],
                'maxr' => $request['maxr'],
                'gift' => $request['gift'],
                'expected_return' => $request['return'],
                'increment_type' => $request['t_type'],
                'increment_amount' => $request['t_amount'],
                'increment_interval' => $request['t_interval'],
                'type' => 'Main',
                'expiration' => $request['expiration'],
            ]);
        return redirect()->back()
            ->with('message', 'Account Type Update Sucessful!');
    }


    // Trash Account Type route
    public function delaccounttype($id)
    {
        //remove users from the account type before deleting
        $users = User::where('account_type', $id)->get();
        foreach ($users as $user) {
            User::where('id', $user->id)
                ->update([
                    'account_type' => 0,
                ]);
        }
        AccountType::where('id', $id)->delete();
        return redirect()->back()
            ->with('message', 'Account Type has been deleted successfully!');
    }


    // Send Mail to all users
    public function sendmailtoall(Request $request)
    {
        $site_name = Setting::getValue('site_name');

        //send email notification
        $objDemo = new \stdClass();
        $objDemo->message =  "\r Hello, \r \n"
            . "\r $request->message \r\n";
        $objDemo->sender = $site_name;
        $objDemo->date = Carbon::Now();
        $objDemo->subject = "$site_name Notification";

        Mail::mailer('smtp')->bcc(User::all())->send(new NewNotification($objDemo));

        return redirect()->back()->with('message', 'Your message was sent successful!');
    }


    // Send mail to one user
    public function sendmailtooneuser(Request $request)
    {
        $site_name = Setting::getValue('site_name');
        // $notif = Notification::create([
        //     'user_id' => $request->user_id,
        //     'message' => "\r $request->message \r\n",
        // ]);

        $mailer = 'smtp';
        // if ($request->type == "deposit")
        //     $mailer = 'deposits';

        //send email notification
        $mailduser = User::where('id', $request->user_id)->first();
        $objDemo = new \stdClass();
        $objDemo->message = "\r Hello $mailduser->name, \r \n"
            . "\r $request->message \r\n";
        $objDemo->sender = $site_name;
        $objDemo->date = Carbon::Now();
        $objDemo->subject = "$site_name Notification";

        Mail::mailer($mailer)->bcc($mailduser->email)->send(new NewNotification($objDemo));
        return redirect()->back()->with('message', 'Your message was sent successful!');
    }


    // Manually Add Trading History to Users Route
    public function addHistory(Request $request)
    {
        $history = TpTransaction::create([
            'user' => $request->user_id,
            'purpse' => $request->purpose,
            'amount' => $request->amount,
            'type' => $request->type,
        ]);
        $user = User::where('id', $request->user_id)->first();
        // $user_bal = $user->account_bal;
        // if (isset($request['amount']) > 0) {
        //     User::where('id', $request->user_id)
        //         ->update([
        //             'account_bal' => $user_bal + $request->amount,
        //         ]);
        // }
        // $user_roi = $user->roi;
        // if (isset($request['type']) == "ROI") {
        //     User::where('id', $request->user_id)
        //         ->update([
        //             'roi' => $user_roi + $request->amount,
        //         ]);
        // }

        return redirect()->back()
            ->with('message', 'Action Sucessful!');
    }


    // update users info
    public function edituser(Request $request)
    {

        User::where('id', $request['user_id'])
            ->update([
                'name' => $request['name'],
                'email' => $request['email'],
                'phone' => $request['phone'],
                'ref_link' => $request['ref_link'],
            ]);
        return redirect()->back()
            ->with('message', 'User updated Successful!');
    }


    // Reset Password
    public function resetpswd(Request $request, $id)
    {
        User::where('id', $id)
            ->update([
                'password' => Hash::make('user01236'),
            ]);
        return redirect()->route('manageusers')
            ->with('message', 'Password has been reset to default');
    }


    // Access users account
    public function switchuser(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        //Byeppass 2FA
        $user->token_2fa_expiry = Carbon::now()->addMinutes(15)->toDateTimeString();
        $user->save();
        Auth::loginUsingId($user->id, true);
        return redirect()->route('dashboard')
            ->with('message', "You are logged in as $user->name !");
    }


    // Clear user Account
    public function clearacct(Request $request, $id)
    {

        $deposits = Deposit::where('user', $id)->get();
        if (!empty($deposits)) {
            foreach ($deposits as $deposit) {
                Deposit::where('id', $deposit->id)->delete();
            }
        }

        $withdrawals = Withdrawal::where('user', $id)->get();
        if (!empty($withdrawals)) {
            foreach ($withdrawals as $withdrawals) {
                Withdrawal::where('id', $withdrawals->id)->delete();
            }
        }

        User::where('id', $id)
            ->update([
                'account_bal' => '0',
                'ref_bonus' => '0',
            ]);
        return redirect()->route('manageusers')
            ->with('message', 'Account cleared to $0.00');
    }


    // Reject deposit
    public function rejectdeposit(Request $request, $id)
    {
        // fetch models
        $deposit = Deposit::where('id', $id)->first();
        $user = User::where('id', $deposit->user)->first();

        // change deposit status
        $deposit->status = 'Rejected';
        $deposit->save();

        // get settings
        $site_name = Setting::getValue('site_name');
        $currency = Setting::getValue('currency');

        // send email notification
        $objDemo = new \stdClass();
        $objDemo->message = "\r Hello $user->name, \r \n " .
        "This is to inform you that your deposit of $currency$deposit->amount has been received but unfortunately rejected because of the following reaon: \r \n ".
        "$request->reason \r \n ".
        "Please fix the problem, we will gladly process it or contact our support for further assistance. \r\n ";
        $objDemo->sender = "$site_name";
        $objDemo->date = Carbon::Now();
        $objDemo->subject = "Deposit Request Rejected!";

        Mail::mailer('smtp')->bcc($user->email)->send(new NewNotification($objDemo));

        return redirect()->back()
            ->with('message', 'Deposit rejected successfully!');
    }


    // top up route
    public function topup(Request $request)
    {
        // switch the mt5 api to use live server
        $this->setServerConfig('live');

        $msg = 'Action Successful';

        if ($request->t_type == "Credit") {
            // get mt5 account in question
            $mt5 = Mt5Details::find($request->account_id);
            if (!$mt5)
                return redirect()->back()->with('message', 'MT5 account not found');

            if ($request->type == "Bonus") {
                $data = $this->performTransaction($mt5->login, $request->amount, Trade::DEAL_CREDIT);
                $mt5->bonus += $request->amount;
            } elseif ($request->type == "Balance") {
                $data = $this->performTransaction($mt5->login, $request->amount, Trade::DEAL_BALANCE);
                $mt5->balance += $request->amount;
            }

            if ($data['status']) {
                // Create deposit record
                $this->saveRecord($request->user_id, $request->account_id, 'Express Credit', $request->amount, null, 'Deposit', 'Processed');

                // save transaction
                $this->saveTransaction($request->user_id, $request->amount, 'Express Credit', $request->type);

                $msg = 'The user\'s account has been successfully credited!';
                $mt5->save();
            } else {
                return redirect()->route('manageusers')
                    ->with('message', 'Sorry an error occured, report this to admin! ' . $data['msg']);
            }
        } elseif ($request->t_type == "Debit") {
            // get mt5 account in question
            $mt5 = Mt5Details::find($request->account_id);
            if (!$mt5)
                return redirect()->back()->with('message', 'MT5 account not found');

            $data = ['status' => false];

            if ($request->type == "Bonus") {
                $data = $this->performTransaction($mt5->login, -$request->amount, Trade::DEAL_CREDIT);
                $mt5->bonus -= $request->amount;
            } elseif ($request->type == "Balance") {
                $data = $this->performTransaction($mt5->login, -$request->amount, Trade::DEAL_BALANCE);
                $mt5->balance -= $request->amount;
            }

            if ($data['status']) {
                // create withdrawal record
                $this->saveRecord($request->user_id, $request->account_id, 'Express Debit', $request->amount, null, 'Withdrawal', 'Processed');

                // save transaction
                $this->saveTransaction($request->user_id, $request->amount, 'Express Debit', $request->type);

                $msg = 'The user\'s account has been successfully debited!';
                $mt5->save();
            } else {
                return redirect()->route('manageusers')
                    ->with('message', 'Sorry an error occured, report this to admin! ' . $data->msg);
            }
        }

        return redirect()->route('manageusers')
            ->with('message', $msg);
    }


    // process deposits
    public function pdeposit(Request $request, $id)
    {
        $deposit = Deposit::where('id', $id)->first();
        $user = User::where('id', $deposit->user)->first();

        // switch the mt5 api to use live server
        $this->setServerConfig('live');

        // get mt5 account in question
        $mt5 = Mt5Details::find($deposit->account_id);

        // do the deposit on the mt5 account
        $data = $this->performTransaction($mt5->login, $deposit->amount, Trade::DEAL_BALANCE);

        if ($data['status'] == false)
            return redirect()->back()->with('message', 'Sorry an error occurred, please contact admin and report this error: ' . $data['msg']);

        $deposit->status = 'Processed';
        $deposit->save();

        // update the local mt5 account
        $apiData = $data['data'];
        $mt5->balance += $deposit->amount;
        $mt5->save();

        // save transaction
        $this->saveTransaction($user->id, $deposit->amount, 'Processed Deposit', 'Credit');

        // get settings
        $site_name = Setting::getValue('site_name');
        $currency = Setting::getValue('currency');

        // send email notification
        $objDemo = new \stdClass();
        $objDemo->message = "\r Hello $user->name, \r \n
        This is to inform you that your deposit of $currency$deposit->amount has been received and processed. You can now check your MT5 account. \r\r";
        $objDemo->sender = "$site_name";
        $objDemo->date = Carbon::Now();
        $objDemo->subject = "Deposit processed successfully!";

        Mail::mailer('smtp')->bcc($user->email)->send(new NewNotification($objDemo));

        return redirect()->route('mdeposits')
            ->with('message', 'The user\'s account has been successfully topped up!');
    }


    //process withdrawals
    public function pwithdrawal(Request $request, $id)
    {
        $withdrawal = Withdrawal::where('id', $id)->first();
        $user = User::where('id', $withdrawal->user)->first();

        // switch the mt5 api to use live server
        $this->setServerConfig('live');

        // do the withdrawal from on the mt5 account
        $mt5 = Mt5Details::find($withdrawal->account_id);
        $data = $this->performTransaction($mt5->login, -round($withdrawal->amount), Trade::DEAL_BALANCE);

        if ($data['status'] == false)
            return redirect()->back()->with('message', 'Sorry an error occurred, please contact admin and report this error: ' . $data['msg']);

        // update withdrawal
        $withdrawal->status = 'Processed';
        $withdrawal->save();

        // update the local mt5 account
        $mt5->balance -= round($withdrawal->amount);
        $mt5->save();

        // save transaction
        $this->saveTransaction($user->id, round($withdrawal->amount), 'Processed Withdrawal', 'Debit');

        // get settings
        $currency = Setting::getValue('currency');
        $site_name = Setting::getValue('site_name');

        // send email notification
        $objDemo = new \stdClass();
        $objDemo->message = "\r Hello $user->name, \r\n

        This is to inform you that your withdrawal request of $currency$withdrawal->amount have approved and the funds have been sent to your selected account. \r\n";
        $objDemo->sender = $site_name;
        $objDemo->subject = "Successful withdrawal";
        $objDemo->date = Carbon::Now();

        Mail::mailer('smtp')->bcc($user->email)->send(new NewNotification($objDemo));

        return redirect()->back()
            ->with('message', 'Widthdrawal Processed Sucessfully!');
    }


    // process withdrawals
    public function rejectwithdrawal(Request $request)
    {
        // load the models
        $withdrawal = Withdrawal::where('id', $request->id)->first();
        $user = User::where('id', $withdrawal->user)->first();

        // update the model
        $withdrawal->status = 'Rejected';
        $withdrawal->save();

        // get settings
        $site_name = Setting::getValue('site_name');
        $currency = Setting::getValue('currency');

        // send email notification
        $objDemo = new \stdClass();
        $objDemo->message = "Hello $user->name, \r \n " .
        "This is to inform you that your withdrawal request of $currency$withdrawal->amount has been received but unfortunately rejected because of the following reason: \r \n " .
        "$request->reason \r \n " .
        "Please fix the problem, we will gladly process it or contact our support for further assistance \r \n ";
        $objDemo->sender = $site_name;
        $objDemo->subject = "Rejected Withdrawal Request";
        $objDemo->date = Carbon::Now();

        Mail::mailer('smtp')->bcc($user->email)->send(new NewNotification($objDemo));

        return redirect()->back()
            ->with('message', 'Withdrawal Request Canceled!');
    }


    // Delete user
    public function delsystemuser(Request $request, $id)
    {
        //delete the user's withdrawals and deposits
        $deposits = Deposit::where('user', $id)->get();
        if (!empty($deposits)) {
            foreach ($deposits as $deposit) {
                Deposit::where('id', $deposit->id)->delete();
            }
        }

        $withdrawals = Withdrawal::where('user', $id)->get();
        if (!empty($withdrawals)) {
            foreach ($withdrawals as $withdrawals) {
                Withdrawal::where('id', $withdrawals->id)->delete();
            }
        }

        User::where('id', $id)->delete();
        return redirect()->route('manageusers')
            ->with('message', 'User has been deleted!');
    }


    public function saveuser(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
            'Answer' => 'same:Captcha_Result',
        ]);


        $thisid = DB::table('users')->insertGetId(
            [
                'name' => $request['name'],
                'email' => $request['email'],
                'phone' => $request['phone'],
                'ref_by' => Auth::user()->id,
                'password' => Hash::make($request->password),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );


        //assign referal link to user
        $site_address = Setting::getValue('site_address');

        User::where('id', $thisid)
            ->update([
                'ref_link' => $site_address . '/ref/' . $thisid,
            ]);
        return redirect()->back()
            ->with('message', 'User Registered Sucessful!');
    }


    public function savefaq(Request $request)
    {

        $String = $this->generate_string(6);

        $faq = new Faq();
        $faq->ref_key = $String;
        $faq->question = $request['question'];
        $faq->answer = $request['answer'];
        $faq->save();
        return redirect()->back()
            ->with('message', 'Faq Added Sucessfully!');
    }


    public function savetestimony(Request $request)
    {
        $String = $this->generate_string(6);
        $tes = new Testimony();
        $tes->name = $request['testifier'];
        $tes->ref_key = $String;
        $tes->position = $request['position'];
        $tes->what_is_said = $request['said'];
        $tes->picture = $request['picture'];
        $tes->save();
        return redirect()->back()
            ->with('message', 'Testimony Added Sucessfully!');
    }


    public function saveimg(Request $request)
    {
        $String = $this->generate_string(6);

        $this->validate($request, [
            'image' => 'required|mimes:jpg,jpeg,png|image',
        ]);

        if ($request->hasfile('image')) {
            $filef = $request->file('image');
            $namef = $String . $filef->getClientOriginalName();
            // save to storage/app/uploads as the new $filename
            $path = $filef->storeAs('public/photos', $namef);
        }

        $img = new Images();
        $img->title = $request['img_title'];
        $img->ref_key = $String;
        $img->description = $request['img_desc'];
        $img->img_path = $namef;
        $img->save();
        return redirect()->back()
            ->with('message', 'Image Added Sucessfully!');
    }


    public function savecontents(Request $request)
    {
        $String = $this->generate_string(6);
        $cont = new Content();
        $cont->title = $request['title'];
        $cont->ref_key = $String;
        $cont->description = $request['content'];
        $cont->save();
        return redirect()->back()
            ->with('message', 'Contents Added Sucessfully!');
    }


    public function updatefaq(Request $request)
    {
        Faq::where('id', $request['id'])
            ->update([
                'question' => $request['question'],
                'answer' => $request['answer'],
            ]);
        return redirect()->back()
            ->with('message', 'Faq Update Sucessful!');
    }


    public function updatetestimony(Request $request)
    {
        Testimony::where('id', $request['id'])
            ->update([
                'name' => $request['testifier'],
                'position' => $request['position'],
                'what_is_said' => $request['said'],
                'picture' => $request['picture'],
            ]);
        return redirect()->back()
            ->with('message', 'Testimony Update Sucessful!');
    }


    public function updatecontents(Request $request)
    {
        Content::where('id', $request['id'])
            ->update([
                'title' => $request['title'],
                'description' => $request['content'],
            ]);
        return redirect()->back()
            ->with('message', 'Content Update Sucessful!');
    }


    public function updateimg(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png|image',
        ]);

        $imgs = Images::where('id', '=', $request->id)->first();
        $String = $this->generate_string(6);

        if (empty($request->file('image'))) {
            $filePathf = $imgs->img_path;
        } else {
            if ($request->hasfile('image')) {
                $filef = $request->file('image');
                $namef = $String . $filef->getClientOriginalName();
                // save to storage/app/uploads as the new $filename
                $path = $filef->storeAs('public/photos', $namef);
            }
        }

        Images::where('id', $request['id'])
            ->update([
                'title' => $request['img_title'],
                'description' => $request['img_desc'],
                'img_path' => $namef,
            ]);
        return redirect()->back()
            ->with('message', 'Image Updated Sucessfully!');
    }


    public function delfaq($id)
    {
        Faq::where('id', $id)->delete();
        return redirect()->back()
            ->with('message', 'Faq Sucessfully Deleted');
    }
}
