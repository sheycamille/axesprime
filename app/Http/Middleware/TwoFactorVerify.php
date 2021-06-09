<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
//use Twilio;

use App\Models\Setting;
use App\Mail\NewNotification;
use App\Mail\Twofa;
use Illuminate\Support\Facades\Mail;

class TwoFactorVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        $enable_2fa = Setting::getValue('enable_2fa');
        if ($enable_2fa == "no" || !isset($enable_2fa)) {
            return $next($request);
        } elseif ($user->token_2fa_expiry > \Carbon\Carbon::now()) {
            return $next($request);
        }

        $user->token_2fa = mt_rand(10000, 99999);
        $user->save();
        // This is the twilio way
        // Twilio::message($user->phone_number, 'Two Factor Code: ' . $user->token_2fa);
        // If you want to use email instead just
        // send an email to the user here ..
        // send 2fa email notification
        $site_name = Setting::getValue('site_name');
        $objDemo = new \stdClass();
        $objDemo->message = $user->token_2fa;
        $objDemo->sender = $site_name;
        $objDemo->subject = "Two Factor Code";
        $objDemo->date = \Carbon\Carbon::Now();

        Mail::bcc($user->email)->send(new Twofa($objDemo));

        return redirect('/2fa');
    }
}