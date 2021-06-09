<?php

namespace App\Http\Controllers;

use App\Mail\NewNotification;
use App\Http\Controllers\Controller;

use App\Models\Faq;
use App\Models\User;
use App\Models\Admin;
use App\Models\Asset;
use App\Models\Plans;
use App\Models\Images;
use App\Models\Deposit;
use App\Models\Content;
use App\Models\Wdmethod;
use App\Models\Setting;
use App\Models\Testimony;
use App\Models\Withdrawal;
use App\Models\Mt4dDtails;
use App\Models\User_plans;

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
        $mplans = Plans::where('type', 'Main')->get();

        return view('front.about', compact('content', 'mplans'));
    }


    public function contact()
    {
        $content = Content::first();
        $mplans = Plans::where('type', 'Main')->get();
        $pplans = Plans::where('type', 'Promo')->get();

        return view('front.contact', compact('content', 'mplans', 'pplans'));
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
}