<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if (version_compare(PHP_VERSION, '7.1.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}

//cron url
// Route::get('/cron', 'Controller@autotopup')->name('cron');

//Front Pages Route
Route::get('/', 'FrontController@index')->name('home');
Route::get('about-us', 'FrontController@about')->name('about');
Route::get('products', 'FrontController@products')->name('products');
Route::get('account-types', 'FrontController@accountTypes')->name('account-types');
Route::get('trading-platforms', 'FrontController@tradingPlatforms')->name('trading-platforms');
Route::get('market-news', 'FrontController@marketNews')->name('market-news');
Route::get('economic-calender', 'FrontController@economicCalender')->name('economic-calender');
Route::get('contact-us', 'FrontController@contact')->name('contact');
Route::post('/send-contact-message', 'FrontController@sendContact')->name('sendcontactmessage');
Route::get('private/ftds', 'FrontController@ftds')->name('ftds');


// Everything About Admin Route started here
Route::prefix('adminlogin')->group(function () {
    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('adminloginform');
    Route::post('login', 'Admin\Auth\LoginController@adminlogin')->name('adminlogin');
    Route::post('logout', 'Admin\Auth\LoginController@adminlogout')->name('adminlogout');
    Route::get('dashboard', 'Admin\Auth\LoginController@validate_admin')->name('validate_admin');
});

Route::group(['prefix' => 'admin',  'middleware' => 'isadmin'], function () {
    Route::get('dashboard', 'Admin\HomeController@index')->name('admin.dashboard');
    Route::get('dashboard/manageusers', ['uses' => 'Admin\HomeController@manageusers'])->name('manageusers');

    Route::get('dashboard/user-wallet/{id}', 'Admin\HomeController@userwallet')->name('user.wallet');

    Route::post('dashboard/search', 'Admin\HomeController@search');
    Route::post('dashboard/searchdp', 'Admin\HomeController@searchDp');
    Route::post('dashboard/searchWith', 'Admin\HomeController@searchWt');

    Route::get('dashboard/mwithdrawals', 'Admin\HomeController@mwithdrawals')->name('mwithdrawals');
    Route::get('dashboard/mdeposits', 'Admin\HomeController@mdeposits')->name('mdeposits');
    Route::get('dashboard/agents', 'Admin\HomeController@agents')->name('agents');
    Route::get('dashboard/addmanager', 'Admin\HomeController@addmanager')->name('addmanager');
    Route::get('dashboard/madmin', 'Admin\HomeController@madmin')->name('madmin');
    Route::get('dashboard/msubtrade', 'Admin\HomeController@msubtrade')->name('subtrade');
    Route::get('dashboard/settings', 'Admin\HomeController@settings')->name('settings');
    Route::get('dashboard/frontpage', 'Admin\HomeController@frontpage')->name('frontpage');
    Route::get('dashboard/adduser', 'Admin\HomeController@adduser')->name('adduser');
    Route::post('dashboard/topup', 'Admin\LogicController@topup')->name('topup');
    Route::post('dashboard/sendmailsingle', 'Admin\LogicController@sendmailtooneuser')->name('sendmailtooneuser');
    Route::post('dashboard/sendmail', 'Admin\UsersController@sendmail')->name('sendmail');
    Route::post('dashboard/AddHistory', 'Admin\LogicController@addHistory')->name('addhistory');
    Route::post('dashboard/edituser', 'Admin\LogicController@edituser')->name('edituser');
    Route::post('dashboard/editadmin', 'Admin\UsersController@editadmin')->name('editadmin');
    Route::get('dashboard/resetpswd/{id}', 'Admin\LogicController@resetpswd')->name('resetpswd');
    Route::get('dashboard/resetadpwd/{id}', 'Admin\UsersController@resetadpwd')->name('resetadpwd');
    Route::get('dashboard/switchuser/{id}', 'Admin\LogicController@switchuser');
    Route::get('dashboard/clearacct/{id}', 'Admin\LogicController@clearacct')->name('clearacct');
    Route::get('dashboard/deldeposit/{id}', 'Admin\LogicController@deldeposit')->name('deldeposit');
    Route::get('dashboard/pdeposit/{id}', 'Admin\LogicController@pdeposit')->name('pdeposit');

    Route::get('dashboard/pwithdrawal/{id}', 'Admin\LogicController@pwithdrawal')->name('pwithdrawal');

    Route::post('dashboard/rejectwithdrawal', 'Admin\LogicController@rejectwithdrawal')->name('rejectwithdrawal');

    Route::post('dashboard/addagent', 'Admin\LogicController@addagent')->name('addagent');
    Route::get('dashboard/viewagent/{agent}', 'Admin\HomeController@viewagent')->name('viewagent');
    Route::get('dashboard/delagent/{id}', 'Admin\LogicController@delagent')->name('delagent');

    // Settings Update Routes
    Route::post('dashboard/updatesettings', 'Admin\SettingsController@updatesettings')->name('updatesettings');
    Route::post('dashboard/updatepreference', 'Admin\SettingsController@updatepreference');
    Route::post('dashboard/updatewebinfo', 'Admin\SettingsController@updatewebinfo');
    Route::post('dashboard/updatebot', 'Admin\SettingsController@updatebot')->name('updatebot');
    Route::post('dashboard/updatebotswt', 'Admin\SettingsController@updatebotswt')->name('updatebotswt');
    Route::post('dashboard/updateasset', 'Admin\SettingsController@updateasset');
    Route::post('dashboard/updatemarket', 'Admin\SettingsController@updatemarket');
    Route::post('dashboard/updatefee', 'Admin\SettingsController@updatefee');
    Route::post('dashboard/updatesubfee', 'Admin\SettingsController@updatesubfee')->name('updatesubfee');
    Route::post('dashboard/updatewdmethod', 'Admin\SettingsController@updatewdmethod')->name('updatewdmethod');
    Route::post('dashboard/addwdmethod', 'Admin\SettingsController@addwdmethod')->name('addwdmethod');

    Route::get('dashboard/delsub/{id}', 'Admin\LogicController@delsub');
    Route::get('dashboard/confirmsub/{id}', 'Admin\LogicController@confirmsub');
    Route::post('dashboard/saveuser', 'Admin\LogicController@saveuser');
    Route::post('dashboard/saveadmin', 'Admin\LogicController@saveadmin');

    Route::get('dashboard/unblock/{id}', 'Admin\UsersController@unblock');
    Route::get('dashboard/ublock/{id}', 'Admin\UsersController@ublock');
    Route::get('dashboard/deluser/{id}', 'Admin\UsersController@deluser')->name('deluser');
    Route::get('dashboard/adminchangepassword', 'Admin\UsersController@adminchangepassword');
    Route::post('dashboard/adminupdatepass', 'Admin\UsersController@adminupdatepass')->name('adminupdatepass');

    // KYC Routes
    Route::get('dashboard/kyc', 'Admin\HomeController@kyc')->name('kyc');
    Route::get('dashboard/acceptkyc/{id}', 'Admin\UsersController@acceptkyc')->name('acceptkyc');
    Route::get('dashboard/rejectkyc/{id}', 'Admin\UsersController@rejectkyc')->name('rejectkyc');
    Route::get('dashboard/resetkyc/{id}', 'Admin\UsersController@resetkyc')->name('resetkyc');

    Route::get('dashboard/uublock/{id}', 'Admin\SystemController@ublock');
    Route::get('dashboard/uunblock/{id}', 'Admin\SystemController@unblock');
    Route::get('dashboard/delsystemuser/{id}', 'Admin\LogicController@delsystemuser');

    Route::post('dashboard/sendmailtoall', 'Admin\LogicController@sendmailtoall')->name('sendmailtoall');

    Route::post('dashboard/changestyle', 'Admin\UsersController@changestyle')->name('changestyle');
    Route::get('dashboard/deletewdmethod/{id}', 'Admin\SettingsController@deletewdmethod');

    // This Route is for frontpage editing
    Route::post('dashboard/savefaq', 'Admin\LogicController@savefaq')->name('savefaq');
    Route::post('dashboard/savetestimony', 'Admin\LogicController@savetestimony')->name('savetestimony');
    Route::post('dashboard/saveimg', 'Admin\LogicController@saveimg')->name('saveimg');
    Route::post('dashboard/savecontents', 'Admin\LogicController@savecontents')->name('savecontents');

    //Update Frontend Pages
    Route::post('dashboard/updatefaq', 'Admin\LogicController@updatefaq')->name('updatefaq');
    Route::post('dashboard/updatetestimony', 'Admin\LogicController@updatetestimony')->name('updatetestimony');
    Route::post('dashboard/updatecontents', 'Admin\LogicController@updatecontents')->name('updatecontents');
    Route::post('dashboard/updateimg', 'Admin\LogicController@updateimg')->name('updateimg');

    // Delete fa and tes routes
    Route::get('dashboard/delfaq/{id}', 'Admin\LogicController@delfaq');
    Route::get('dashboard/deltestimony/{id}', 'Admin\LogicController@deltest');
    // This route is to import data from excel
    Route::post('dashboard/fileImport', 'Admin\ImportController@fileImport')->name('fileImport');

    Route::post('dashboard/updatewebinfo', 'Admin\SettingsController@updatewebinfo')->name('updatewebinfo');
    Route::post('dashboard/updatepreference', 'Admin\SettingsController@updatepreference')->name('updatepreference');

    // managing account types
    Route::get('dashboard/accounttypes', 'Admin\HomeController@accounttypes')->name('accounttypes');
    Route::get('dashboard/addaccounttype', 'Admin\HomeController@ashowddaccounttype')->name('showaddaccounttype');
    Route::post('dashboard/addaccounttype', 'Admin\HomeController@addaccounttype')->name('addaccounttype');
    Route::post('dashboard/updateaccounttype/{id}', 'Admin\HomeController@updateaccounttype')->name('updateaccounttype');
    Route::get('dashboard/delaccounttype/{id}', 'Admin\HomeController@delaccounttype')->name('delaccounttype');


    Route::get('dashboard/ftds', 'Admin\HomeController@mftds')->name('mftds');
    Route::get('dashboard/delliveaccount/{id}', 'Admin\HomeController@dellaccounts')->name('dellaccounts');

    //
});
// Everything About Admin Route ends here



// Everything About Users Route starts here
Route::get('/verify-email', 'UserController@verifyemail')->middleware('auth')->name('verification.notice');

// saving the ref in session and redirecting to register
Route::get('ref/{id}', 'Controller@ref')->name('ref');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    $request->session()->put('message', 'Thanks for succesfully verifying your email.');
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/forgot-password', 'FrontController@forgotpassword')->name('password.request');
Route::middleware(['auth:sanctum'])->get('/dashboard', 'UserController@dashboard')->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->group(function () {
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/dashboard/manage-account-security', 'UserController@twofa')->name('twofa');

    // Two Factor Authentication
    Route::post('dashboard/changetheme', 'UserController@changetheme')->name('changetheme');
    Route::get('dashboard/refreshAccounts', 'UserController@refreshAccounts')->name('refreshaccounts');
    Route::get('2fa', 'TwoFactorController@showTwoFactorForm')->name('2fa');
    Route::post('2fa', 'TwoFactorController@verifyTwoFactor');
    Route::post('dashboard/savedocs', 'UserController@savevdocs')->name('kycsubmit');

    Route::get('dashboard/skip_account', 'Controller@skip_account');
    Route::get('dashboard/tradinghistory', 'UserController@tradinghistory')->name('tradinghistory');
    Route::get('dashboard/accounthistory', 'UserController@accounthistory')->name('accounthistory');

    // Upadating user profile info
    Route::get('dashboard/profile', 'UserController@profile')->name('profile');
    Route::post('dashboard/profileinfo', 'UserController@updateprofile')->name('userprofile');
    Route::post('dashboard/updatepass', 'UserController@updatepass')->name('updatepass');
    Route::get('dashboard/changepassword', 'UserController@changepassword')->name('changepassword');
    Route::get('/dashboard/verify-account', 'UserController@verifyaccount')->name('account.verify');
    Route::get('dashboard/withdrawaldetails', 'UserController@withdrawaldetails')->name('withdrawaldetails');
    Route::post('dashboard/updatewithdrawaldetails', 'UserController@updatewithdrawaldetails')->name('updatewithdrawaldetails');

    // Withdrawals & Deposits
    Route::get('dashboard/deposits', 'UserController@deposits')->name('deposits');
    Route::post('dashboard/paypalverify/{amount}', 'UserController@paypalverify')->name('paypalverify');
    Route::get('dashboard/withdrawals', 'UserController@withdrawals')->name('withdrawalsdeposits')->middleware('2fa');
    Route::get('dashboard/makewithdrawal', 'UserController@mwithdrawal')->name('mwithdrawal')->middleware('2fa');
    Route::post('dashboard/withdrawal', 'UserController@savewithdrawal')->name('withdrawal');

    Route::get('ref/{id}', 'Controller@ref')->name('ref');
    Route::post('sendcontact', 'FrontController@sendcontact')->name('enquiry');
    Route::post('dashboard/chngemail', 'UserController@chngemail');
    Route::post('dashboard/savedeposit', 'UserController@savedeposit')->name('savedeposit');


    Route::get('dashboard/support', 'UserController@support')->name('support');
    Route::get('dashboard/downloads', 'UserController@downloads')->name('account.downloads');
    Route::get('dashboard/referuser', 'UserController@referuser')->name('referuser');
    Route::get('dashboard/notifications', 'UserController@notification')->name('notification');

    Route::get('dashboard/delnotif/{id}', 'UserController@delnotif');
    Route::get('dashboard/delmarket/{id}', 'UserController@delmarket');
    Route::get('dashboard/delassets/{id}', 'UserController@delassets');

    // mt5 account mg't
    Route::get('/dashboard/demo-accounts', 'Mt5Controller@demoaccounts')->name('account.demoaccounts');
    Route::get('/dashboard/live-accounts', 'Mt5Controller@liveaccounts')->name('account.liveaccounts');
    Route::post('/dashboard/add-account', 'Mt5Controller@addmt5account')->name('account.addmt5account'); //->middleware(['throttle:1,30']);
    Route::get('/dashboard/mt5-demo-deposit/{id}', 'Mt5Controller@demotopup')->name('account.demotopup');
    Route::post('/dashboard/reset-account-password/{id}', 'Mt5Controller@resetmt5password')->name('account.resetmt5password');


    // user deposit routes
    Route::get('dashboard/select-payment-method', 'UserController@selectPaymentMethod')->name('selectpaymentmethod');
    Route::get('dashboard/startpayment/{accountId}/{methodId}', 'UserController@startPayment')->name('startpayment');


    // paypound payments
    Route::post('dashboard/start_paypound_charge', 'UserController@startPaypoundCharge')->name('startpaypoundcharge');
    Route::get('dashboard/verify_paypound_charge', 'UserController@verifyPaypoundCharge')->name('verifypaypoundcharge');
});

Route::get('/dashboard/weekend', 'Controller@checkdate');