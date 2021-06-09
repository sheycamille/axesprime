<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Models\Settings;

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
Route::get('/cron', 'Controller@autotopup')->name('cron');

//Front Pages Route
Route::get('/', 'FrontController@index')->name('home');
Route::get('about-us', 'FrontController@about')->name('about');
Route::get('contact-us', 'FrontController@contact')->name('contact');
Route::post('/send-contact-message', 'FrontController@sendContact')->name('sendcontactmessage');

// Everything About Admin Route started here
Route::prefix('adminlogin')->group(function () {
    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('adminloginform');
    Route::post('login', 'Admin\Auth\LoginController@adminlogin')->name('adminlogin');
    Route::post('logout', 'Admin\Auth\LoginController@adminlogout')->name('adminlogout');
    Route::get('dashboard', 'Admin\Auth\LoginController@validate_admin')->name('validate_admin');
});

Route::group(['prefix' => 'admin',  'middleware' => 'isadmin'], function () {
    Route::get('dashboard', 'Admin\HomeController@index')->name('admin.dashboard');
    Route::get('dashboard/plans', ['uses' => 'Admin\HomeController@plans'])->name('plans');
    Route::get('dashboard/manageusers', ['uses' => 'Admin\HomeController@manageusers'])->name('manageusers');

    // CRM ROUTES
    Route::get('dashboard/calendar', ['uses' => 'Admin\HomeController@calendar'])->name('calendar');
    Route::get('dashboard/task', ['uses' => 'Admin\HomeController@showtaskpage'])->name('task');
    Route::get('dashboard/mtask', ['uses' => 'Admin\HomeController@mtask'])->name('mtask');
    Route::get('dashboard/viewtask', ['uses' => 'Admin\HomeController@viewtask'])->name('viewtask');
    Route::post('dashboard/addtask', 'Admin\CrmController@addtask')->name('addtask');
    Route::post('dashboard/updatetask', 'Admin\CrmController@updatetask')->name('updatetask');
    Route::get('dashboard/deltask/{id}', 'Admin\CrmController@deltask')->name('deltask');
    Route::get('dashboard/markdone/{id}', 'Admin\CrmController@markdone')->name('markdone');
    Route::get('dashboard/leads', ['uses' => 'Admin\HomeController@leads'])->name('leads');
    Route::get('dashboard/leadsassign', ['uses' => 'Admin\HomeController@leadsassign'])->name('leadsassign');
    Route::post('dashboard/updateuser', 'Admin\CrmController@updateuser')->name('updateuser');
    Route::get('dashboard/convert/{id}', 'Admin\CrmController@convert')->name('convert');
    Route::get('dashboard/customer', ['uses' => 'Admin\HomeController@customer'])->name('customer');
    // This route is used to Assign Users
    Route::post('dashboard/assign', 'Admin\CrmController@assign')->name('assignuser');


    Route::get('dashboard/user-plans/{id}', 'Admin\HomeController@userplans')->name('user.plans');

    Route::get('dashboard/user-wallet/{id}', 'Admin\HomeController@userwallet')->name('user.wallet');

    Route::post('dashboard/search', 'Admin\HomeController@search');
    Route::post('dashboard/searchdp', 'Admin\HomeController@searchDp');
    Route::post('dashboard/searchWith', 'Admin\HomeController@searchWt');
    Route::post('dashboard/searchsub', 'Admin\HomeController@searchsub');

    Route::get('dashboard/mwithdrawals', 'Admin\HomeController@mwithdrawals')->name('mwithdrawals');
    Route::get('dashboard/mdeposits', 'Admin\HomeController@mdeposits')->name('mdeposits');
    Route::get('dashboard/agents', 'Admin\HomeController@agents')->name('agents');
    Route::get('dashboard/addmanager', 'Admin\HomeController@addmanager')->name('addmanager');
    Route::get('dashboard/madmin', 'Admin\HomeController@madmin')->name('madmin');
    Route::get('dashboard/msubtrade', 'Admin\HomeController@msubtrade')->name('subtrade');
    Route::get('dashboard/settings', 'Admin\HomeController@settings')->name('settings');
    Route::get('dashboard/frontpage', 'Admin\HomeController@frontpage')->name('frontpage');
    Route::get('dashboard/adduser', 'Admin\HomeController@adduser')->name('adduser');
    Route::post('dashboard/addplan', 'Admin\LogicController@addplan')->name('addplan');
    Route::post('dashboard/updateplan', 'Admin\LogicController@updateplan')->name('updateplan');
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
    Route::post('dashboard/updatecpd', 'Admin\SettingsController@updatecpd')->name('updatecpd');
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
    Route::get('dashboard/acceptkyc/{id}', 'Admin\UsersController@acceptkyc');
    Route::get('dashboard/rejectkyc/{id}', 'Admin\UsersController@rejectkyc');

    Route::get('dashboard/uublock/{id}', 'Admin\SystemController@ublock');
    Route::get('dashboard/uunblock/{id}', 'Admin\SystemController@unblock');
    Route::get('dashboard/delsystemuser/{id}', 'Admin\LogicController@delsystemuser');
    Route::get('dashboard/usertrademode/{id}/{action}', 'Admin\SystemController@usertrademode');

    Route::post('dashboard/sendmailtoall', 'Admin\LogicController@sendmailtoall')->name('sendmailtoall');

    Route::post('dashboard/changestyle', 'Admin\UsersController@changestyle')->name('changestyle');
    Route::get('dashboard/trashplan/{id}', 'Admin\LogicController@trashplan');
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
});
// Everything About Admin Route ends here



//cron url
// Route::get('dashboard/cron', 'Controller@autotopup')->name('cron');

Route::get('/verify-email', 'UsersController@verifyemail')->middleware('auth')->name('verification.notice');;

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'Controller@dashboard')->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('autoconfirm', 'CoinPaymentsAPI@autoconfirm')->name('autoconfirm');
    Route::get('/forgot-password', 'UsersController@forgotpassword')->name('password.request');
    Route::get('/dashboard/manage-account-security', 'UsersController@twofa')->name('twofa');

    // Two Factor Authentication
    Route::post('dashboard/changetheme', 'SomeController@changetheme')->name('changetheme');
    Route::get('2fa', 'TwoFactorController@showTwoFactorForm')->name('2fa');
    Route::post('2fa', 'TwoFactorController@verifyTwoFactor');
    Route::post('dashboard/savedocs', 'SomeController@savevdocs')->name('kycsubmit');
    Route::post('dashboard/paypalverify/{amount}', 'Controller@paypalverify')->name('paypalverify');

    Route::get('licensing', 'UsersController@licensing')->name('licensing');
    Route::get('dashboard/deposits', ['middleware' => 'auth', 'uses' => 'Controller@deposits'])->name('deposits');
    Route::get('dashboard/skip_account', ['middleware' => 'auth', 'uses' => 'Controller@skip_account']);
    Route::get('dashboard/payment', 'SomeController@payment')->name('payment');
    Route::get('dashboard/tradinghistory', 'SomeController@tradinghistory')->name('tradinghistory');
    Route::get('dashboard/accounthistory', 'SomeController@accounthistory')->name('accounthistory');
    Route::get('dashboard/withdrawals', ['middleware' => 'auth', 'uses' => 'Controller@withdrawals'])->name('withdrawalsdeposits')->middleware('2fa');

    //dashboard
    Route::get('dashboard/paywithcard/{amount}', ['middleware' => 'auth', 'uses' => 'UsersController@paywithcard'])->name('paywithcard');
    Route::get('dashboard/cpay/{amount}/{coin}/{ui}/{msg}', ['uses' => 'Controller@cpay'])->name('cpay');
    Route::get('dashboard/mplans', ['middleware' => 'auth', 'uses' => 'Controller@mplans'])->name('mplans');
    Route::get('dashboard/myplans', ['middleware' => 'auth', 'uses' => 'Controller@myplans'])->name('myplans')->middleware('2fa');
    // Route::get('dashboard/makeadmin/{id}/{action}', ['middleware' => ['auth', 'admin'], 'uses'=>'UsersController@makeadmin', 'as'=>'makeadmin']);
    Route::get('dashboard/pplans', ['middleware' => 'auth', 'uses' => 'Controller@pplan'])->name('pplans');

    //Route::get('dashboard/joinplan/{id}', ['middleware' => 'auth', 'uses' => 'Controller@joinplan']);
    Route::get('ref/{id}', ['middleware' => 'auth', 'uses' => 'Controller@ref', 'as' => 'ref']);
    Route::post('dashboard/joinplan', ['middleware' => 'auth', 'uses' => 'Controller@joinplan'])->name('joinplan');
    Route::post('dashboard/paywithcard/charge', ['middleware' => 'auth', 'uses' => 'UsersController@charge']);
    Route::post('dashboard/withdrawal', 'SomeController@withdrawal')->name('withdrawal');
    Route::post('sendcontact', 'UsersController@sendcontact')->name('enquiry');
    Route::post('dashboard/deposit', 'SomeController@deposit')->name('newdeposit');
    Route::post('dashboard/chngemail', 'UsersController@chngemail');
    Route::post('dashboard/savedeposit', 'SomeController@savedeposit')->name('savedeposit');
    // 	Route::post('dashboard/addwdmethod', 'SomeController@addwdmethod');


    // Paystack Route here
    Route::post('/pay', 'PaystackController@redirectToGateway')->name('pay.paystack');
    Route::get('/dashboard/paystackcallback', 'PaystackController@handleGatewayCallback');

    // Tripe Pyament
    Route::post('/dashboard/stripepay/{{amount}}', 'StripeController@redirectToGateway')->name('pay.stripe');


    Route::get('dashboard/accountdetails', ['middleware' => 'auth', 'uses' => 'UsersController@accountdetails', 'as' => 'acountdetails']);
    Route::get('dashboard/changepassword', ['middleware' => 'auth', 'uses' => 'UsersController@changepassword', 'as' => 'changepassword']);
    Route::get('dashboard/support', ['middleware' => 'auth', 'uses' => 'Controller@support', 'as' => 'support']);
    Route::get('dashboard/withdrawal', ['middleware' => 'auth', 'uses' => 'SomeController@withdrawal', 'as' => 'withdrawal']);
    Route::get('dashboard/phusers', ['middleware' => 'auth', 'uses' => 'SomeController@phusers', 'as' => 'phusers']);
    Route::get('dashboard/matchinglist', ['middleware' => 'auth', 'uses' => 'SomeController@matchinglist', 'as' => 'matchinglist']);
    Route::get('dashboard/ghuser', ['middleware' => 'auth', 'uses' => 'SomeController@ghuser', 'as' => 'ghuser']);
    Route::get('dashboard/confirmation/{id}', ['middleware' => 'auth', 'uses' => 'UsersController@confirmation', 'as' => 'confirmation']);
    Route::get('dashboard/tupload/{id}', ['middleware' => 'auth', 'uses' => 'UsersController@tupload', 'as' => 'tupload']);
    Route::get('dashboard/dnpagent', ['middleware' => 'auth', 'uses' => 'UsersController@dnpagent', 'as' => 'dnpagent']);
    Route::get('dashboard/referuser', ['middleware' => 'auth', 'uses' => 'UsersController@referuser', 'as' => 'referuser']);
    //Route::get('dashboard/notification', 'UsersController@notification');
    Route::get('dashboard/notification', ['middleware' => 'auth', 'uses' => 'SomeController@notification', 'as' => 'notification']);
    Route::get('dashboard/subtrade', ['middleware' => 'auth', 'uses' => 'Controller@subtrade'])->name('subtrade');
    Route::get('dashboard/subpricechange', 'Controller@subpricechange')->middleware("admin");
    Route::post('dashboard/savemt4details', ['middleware' => 'auth', 'uses' => 'Controller@savemt4details', 'as' => 'savemt4details']);

    Route::get('dashboard/profile', ['middleware' => 'auth', 'uses' => 'SomeController@profile', 'as' => 'profile']);
    // Upadting user profile info
    Route::post('dashboard/profileinfo', ['middleware' => 'auth', 'uses' => 'SomeController@updateprofile', 'as' => 'userprofile']);

    //Route::get('dashboar
    //Route::get('dashboard/plans', ['middleware' => 'auth', 'uses'=>'Controller@showplans', 'as'=>'plans']);
    Route::get('dashboard/delnotif/{id}', 'SomeController@delnotif');
    Route::get('dashboard/delmarket/{id}', 'SomeController@delmarket');
    Route::get('dashboard/delassets/{id}', 'SomeController@delassets');
    Route::post('dashboard/updatemark', 'SomeController@updatemark');
    Route::post('dashboard/updateasst', 'SomeController@updateasst');
    Route::post('dashboard/upload', 'UsersController@upload');
    Route::post('dashboard/confirm', 'UsersController@confirm');
    Route::get('dashboard/mconfirm/{id}/{ph_id}/{amount}', 'UsersController@mconfirm');
    Route::get('dashboard/mdelete/{id}/{ph_id}/{amount}', 'UsersController@mdelete');
    Route::post('dashboard/withdraw', 'SomeController@withdraw');

    Route::post('dashboard/updateacct', 'UsersController@updateacct')->name('updateacount');
    Route::post('dashboard/updatepass', 'UsersController@updatepass')->name('updatepass');
    Route::post('dashboard/dnate', 'UsersController@dnate');
    Route::get('dashboard/donation', ['uses' => 'UsersController@donation', 'as' => 'donation']);
    Route::get('dashboard/donate/{plan}', ['uses' => 'UsersController@donate', 'as' => 'donate']);
    Route::get('ref/{id}', ['uses' => 'UsersController@ref', 'as' => 'ref']);
    Route::post('reguser', 'Auth\AuthController@reguser');
    Route::post('dashboard/saveagent', 'UsersController@saveagent');
    Route::get('dashboard/delsubtrade/{id}', 'Controller@delsubtrade');

    Route::get('/dashboard/submit-stripe-payment', 'StripeController@submitpayment');

    Route::get('/dashboard/verify-account', 'UsersController@verifyaccount')->name('account.verify');
});

Route::get('/dashboard/weekend', 'Controller@checkdate');

//activate and deactivate Axes Prime
Route::any('/activate', function () {
    return view('activate.index');
});

Route::any('/revoke', function () {
    return view('revoke.index');
});