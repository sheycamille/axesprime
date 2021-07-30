<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Content;
use App\Models\Setting;
use App\Models\AccountType;

use App\Mail\NewNotification;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class FrontController extends Controller
{
    public function index(Request $request)
    {
        $content = Content::first();
        $faq = Faq::orderby('id', 'desc')->get();
        // $test = Testimony::orderby('id', 'desc')->get();

        return view('front.index', compact('content', 'faq'));
    }


    public function about()
    {
        $content = Content::first();

        return view('front.about', compact('content'));
    }


    public function contact()
    {
        $content = Content::first();

        return view('front.contact', compact('content'));
    }


    //send contact message to admin email
    public function sendContact(Request $request)
    {
        $site_name = Setting::getValue('site_name');
        $contact_email = Setting::getValue('contact_email');

        $objDemo = new \stdClass();
        $objDemo->message = substr(wordwrap($request['message'], 70), 0, 350);
        $objDemo->sender = "$site_name";
        $objDemo->date = \Carbon\Carbon::Now();
        $objDemo->subject = "Inquiry from $request->name with email $request->email";

        Mail::bcc($contact_email)->send(new NewNotification($objDemo));

        return redirect()->back()
            ->with('message', ' Your message was sent successfully!');
    }


    public function products()
    {
        $content = Content::first();

        return view('front.products', compact('content'));
    }


    public function tradingPlatforms()
    {
        $content = Content::first();

        return view('front.trading-platforms', compact('content'));
    }


    public function marketNews()
    {
        $content = Content::first();

        return view('front.market-news', compact('content'));
    }


    public function economicCalender()
    {
        $content = Content::first();

        return view('front.economic-calender', compact('content'));
    }

    public function accountTypes()
    {
        $content = Content::first();
        $account_types = AccountType::where('active', 1)->get();

        return view('front.account-types', compact('content', 'account_types'));
    }

    public function forgotpassword()
    {
        return view('auth.forgot-password');
    }

    public function ftds()
    {
        $users = User::all();

        return view('front.ftds', [
            'title' => "First Time Deposits",
            'users' => $users,
        ]);
    }
}