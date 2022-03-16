<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin;
use App\Models\Setting;

use App\Mail\NewNotification;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Carbon\Carbon;

use Spatie\Permission\Models\Role;


class UsersController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    // block user
    public function ublock($id)
    {
        Admin::where('id', $id)
            ->update([
                'acnt_type_active' => 'blocked',
            ]);
        return redirect()->back()
            ->with('message', 'Manager Blocked');
    }


    // unblock user
    public function unblock($id)
    {
        Admin::where('id', $id)
            ->update([
                'acnt_type_active' => 'active',
            ]);
        return redirect()->back()
            ->with('message', 'Manager Unblocked');
    }


    // reset Password
    public function resetadpwd(Request $request, $id)
    {
        Admin::where('id', $id)
            ->update([
                'password' => Hash::make('admin01236'),
            ]);
        return redirect()->back()
            ->with('message', 'Password reset Successful.');
    }


    public function deluser(Request $request, $id)
    {
        Admin::where('id', $id)->delete();
        return redirect()->back()
            ->with('message', 'Manager has been deleted!');
    }


    // send mail to one user
    public function sendmail(Request $request)
    {
        $site_name = Setting::getValue('site_name');

        //send email notification
        $mailduser = Admin::where('id', $request->user_id)->first();
        $objDemo = new \stdClass();
        $objDemo->message = $request['message'];
        $objDemo->sender = $site_name;
        $objDemo->date = Carbon::Now();
        $objDemo->subject = "$site_name Notification";
        Mail::bcc($mailduser->email)->send(new NewNotification($objDemo));
        return redirect()->back()->with('message', 'Your message was sent successfully!');
    }


    // serves admin update self password
    public function adminchangepassword(Request $request)
    {
        return view('admin.changepassword')->with(array(
            'title' => 'Change Password',
        ));
    }


    // update Password
    public function adminupdatepass(Request $request)
    {
        if (!password_verify($request['old_password'], $request['current_password'])) {
            return redirect()->back()
                ->with('message', 'Incorrect Old Password');
        }
        $this->validate($request, [
            'password_confirmation' => 'same:password',
            'password' => 'min:8',
        ]);

        Admin::where('id', $request['id'])
            ->update([
                'password' => Hash::make($request['password']),
            ]);
        return redirect()->back()
            ->with('message', 'Password Changed Sucessfully');
    }


    // accept KYC route
    public function acceptkyc($id)
    {
        //update user
        User::where('id', $id)
            ->update([
                'account_verify' => 'Verified',
                'docs_verified_date' => Carbon::Now(),
            ]);

        return redirect()->back()
            ->with('message', 'Action Sucessful!');
    }


    // reject KYC route
    public function rejectkyc($id)
    {
        //update user
        User::where('id', $id)
            ->update([
                'account_verify' => 'Rejected',
                'id_card' => NULL,
                'id_card_back' => NULL,
                'passport' => NULL,
                'address_document' => NULL,
                'docs_verified_date' => NULL,
                'docs_uploaded_date' => NULL
            ]);

        return redirect()->back()
            ->with('message', 'Rejected KYC Sucessfully!');
    }


    // reset KYC route
    public function resetkyc($id)
    {
        //update user
        $user = User::where('id', $id)
            ->update([
                'account_verify' => '',
                'id_card' => NULL,
                'id_card_back' => NULL,
                'passport' => NULL,
                'address_document' => NULL,
                'docs_verified_date' => NULL,
                'docs_uploaded_date' => NULL
            ]);

        return redirect()->back()
            ->with('message', 'Reseted KYC Sucessfully!');
    }


    // accept KYC route
    public function changestyle(Request $request)
    {
        if (isset($request['style']) and $request['style'] == 'true') {
            $dashboard_style = "dark";
        } else {
            $dashboard_style = "light";
        }
        //change dashboard style
        Admin::where('id', Auth('admin')->User()->id)
            ->update([
                'dashboard_style' => $dashboard_style,
            ]);
        return response()->json(['success' => 'Changed']);
    }
}
