<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Setting;
use App\Models\Plans;
use App\Models\Agent;
use App\Models\User_plans;

use App\Http\Traits\CPTrait;


class DashController extends Controller
{
    use CPTrait;

    public function dashboard(Request $request)
    {

        $files_key = Setting::getValue('files_key');

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $key = $this->generate_string($permitted_chars, 5);

        //set files key if not set
        if ($files_key == NULL) {
            Setting::where('name', 'files_key')->update([
                'files_key' => 'OT_' . $key,
            ]);
        }

        //new line

        //Check if the user is referred by someone after a successful registration
        $site_address = Setting::getValue('site_address');
        $signup_bonus = Setting::getValue('signup_bonus');
        if ($request->session()->has('ref_by')) {
            $ref_by = $request->session()->get('ref_by');
            if ($ref_by != Auth::user()->id) {

                //update the user ref_by with the referral ID
                User::getValue('id', Auth::user()->id)
                    ->update([
                        'ref_by' => $ref_by,
                    ]);

                $ag = Agent::where('agent', $ref_by)->first();
                //check if the refferral already exists
                if (count($ag) > 0) {
                    //update the agent info
                    Agent::where('id', $ag->id)->increment('total_refered', 1);
                } else {
                    //add the referee to the agents model

                    $agent_id = DB::table('agents')->insertGetId(
                        [
                            'agent' => $ref_by,
                            'created_at' => \Carbon\Carbon::now(),
                            'updated_at' => \Carbon\Carbon::now(),
                        ]
                    );
                    //increment refered clients by 1
                    Agent::where('id', $agent_id)->increment('total_refered', 1);
                }
                $request->session()->forget('ref_by');
            }
        }


        //check for users without ref link and update them with it
        $usf = User::all();
        foreach ($usf as $usf) {
            //if the ref_link column is empty
            if ($usf->ref_link == '') {
                User::where('id', $usf->id)
                    ->update([
                        'ref_link' => $site_address . '/ref/' . $usf->id,
                        'ref_bonus' => '0',
                        'bonus_released' => '0',
                    ]);
            }
            //give reg bonus if new
            if ($usf->created_at->diffInDays() < 2 && $usf->signup_bonus != "received") {
                User::where('id', $usf->id)
                    ->update([
                        'bonus' => $usf->bonus + $signup_bonus,
                        'account_bal' => $usf->account_bal + $signup_bonus,
                        'signup_bonus' => "received",
                    ]);
            }
        }


        //get referral earnings
        $dref = Agent::where('agent', Auth::user()->id)->first();
        if (count($dref) == 0) {
            $ref_earnings = "0.00";
        } else {
            $ref_earnings = "$dref->earnings";
        }


        //sum total deposited
        $total_deposited = DB::table('deposits')->select(DB::raw("SUM(amount) as count"))->where('user', Auth::user()->id)->where('status', 'Processed')->get();

        $payment_mode = Setting::getValue('payment_mode');
        if ($payment_mode == 'Bank transfer') {
            $condition = empty(Auth::user()->account_no) or empty(Auth::user()->account_name) or empty(Auth::user()->bank_name) or empty(Auth::user()->phone);
        } elseif ($payment_mode == 'BTC') {
            $condition = empty(Auth::user()->btc_address) or empty(Auth::user()->phone);
        } elseif ($payment_mode == 'ETH') {
            $condition = empty(Auth::user()->eth_address) or empty(Auth::user()->phone);
        } else {
            $condition = empty(Auth::user()->id);
        }

        //Get bonus from users table
        $total_bonus = User::where('id', Auth::user()->id)->first();

        //count the number of plans users have purchased
        $user_plan = User_plans::where('user', Auth::user()->id)->get();

        $user_plan_active = User_plans::where([
            ['user', '=', Auth::user()->id],
            ['active', '=', 'yes']
        ])->get();

        //log user out if not approved
        if (Auth::user()->status != "active") {
            $request->session()->flush();
            $request->session()->put('reged', 'yes');
            return redirect()->route('dashboard');
        } //Also log user out if web dashboard is not enabled and user is not admin

        return view('user.dashboard')
            ->with(array(
                //'earnings'=>$earnings,
                'title' => 'User panel',
                'ref_earnings' => $ref_earnings,
                'deposited' => $total_deposited,
                'total_bonus' => $total_bonus,
                'user_plan' => $user_plan,
                'user_plan_active' => $user_plan_active,
                'upplan' => Plans::where('id', Auth::user()->promo_plan)->first(),
                'uplan' => Plans::where('id', Auth::user()->plan)->first(),
                'last_profit' => array_random([10.12, 2.3, 5.7, 20, 80.22, 50.89, 30, 40.23, 5, 60, 89, 4, 200.76, 140, 410.34, 103.34]),
                'last_lost' => array_random([10.2, 1.99, 30, 22, 3.32, 51.03, 12.3, 30, 3, 4, 5, 6, 20, 4]),
            ));
        //}
    }
}