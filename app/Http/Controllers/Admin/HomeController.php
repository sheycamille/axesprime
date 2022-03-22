<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Exception;

use App\Models\Faq;
use App\Models\User;
use App\Models\Admin;
use App\Models\Asset;
use App\Models\Images;
use App\Models\Content;
use App\Models\Country;
use App\Models\Deposit;
use App\Models\Wdmethod;
use App\Models\Testimony;
use App\Models\Mt5Details;
use App\Models\Withdrawal;
use App\Models\AccountType;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Tarikhagustia\LaravelMt5\LaravelMt5;

use Spatie\Permission\Models\Role;



class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('auth:admin');
    }


    /**
     * Show Admin Dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //sum total deposited
        $total_deposited = DB::table('deposits')->select(DB::raw("SUM(amount) as total"))->where('status', 'Processed')->get();
        $pending_deposited = DB::table('deposits')->select(DB::raw("SUM(amount) as total"))->where('status', 'Pending')->get();
        $total_withdrawn = DB::table('withdrawals')->select(DB::raw("SUM(amount) as total"))->where('status', 'Processed')->get();
        $pending_withdrawn = DB::table('withdrawals')->select(DB::raw("SUM(amount) as total"))->where('status', 'Pending')->get();

        $userlist = User::count();
        $activeusers = User::where('status', 'active')->count();
        $blockeusers = User::where('status', 'blocked')->count();
        $unverifiedusers = User::where('account_verify', '!=', 'yes')->count();

        return view('admin.dashboard', [
            'title' => 'Admin Dashboard',
            'total_deposited' => $total_deposited['total'],
            'pending_deposited' => $pending_deposited['total'],
            'total_withdrawn' => $total_withdrawn['total'],
            'pending_withdrawn' => $pending_withdrawn['total'],
            'user_count' => $userlist,
            'activeusers' => $activeusers,
            'blockeusers' => $blockeusers,
            'unverifiedusers' => $unverifiedusers,
        ]);
    }


    //Return manage users route
    public function manageusers()
    {
        return view('admin.users')
            ->with(array(
                'title' => 'All users',
                'users' => User::orderBy('id', 'desc')->get(),
            ));
    }


    //Return search route for Withdrawals
    public function searchWt(Request $request)
    {
        $dp = Withdrawal::all();
        $searchItem = $request['wtquery'];

        $result = Withdrawal::where('user', $searchItem)
            ->orwhere('amount', $searchItem)
            ->orwhere('payment_mode', $searchItem)
            ->orwhere('status', $searchItem)
            ->paginate(10);

        return view('admin.mwithdrawals')
            ->with(array(
                'dp' => $dp,
                'title' => 'Withdrawals search result',
                'withdrawals' => $result,
            ));
    }


    //Return manage withdrawals route
    public function mwithdrawals()
    {
        return view('admin.mwithdrawals')
            ->with(array(
                'title' => 'Manage users withdrawals',
                'withdrawals' => Withdrawal::orderBy('id', 'desc')->get(),
            ));
    }


    //Return manage deposits route
    public function mdeposits()
    {
        return view('admin.mdeposits')
            ->with(array(
                'title' => 'Manage users deposits',
                'deposits' => Deposit::orderBy('id', 'desc')->get(),
            ));
    }


    public function userwallet($id)
    {
        $user = User::where('id', $id)->first();

        // update user accounts
        $this->updateaccounts($user);

        //sum total deposited
        $total_deposited = DB::table('deposits')->select(DB::raw("SUM(amount) as total"))->where('user', $id)->where('status', 'Processed')->get();

        return view('admin.user_wallet')
            ->with(array(
                'ref_bonus' => $user->ref_bonus,
                'deposited' => $total_deposited['total'],
                'bonus' => $user->totalBonus(),
                'account_bal' => $user->totalBalance(),
                'user' => $user->name,
                'title' => 'User Profile',
            ));
    }


    //return front end management page
    public function frontpage(Request $request)
    {
        return view('admin.frontpage')->with(array(
            'title' => 'Frontend management',
            'faqs' => Faq::all(),
            'images' => Images::orderBy('id', 'desc')->get(),
            'testimonies' => Testimony::orderBy('id', 'desc')->get(),
            'contents' => Content::orderBy('id', 'desc')->get(),
        ));
    }

    //Return KYC route
    public function kyc()
    {
        return view('admin.kyc')
            ->with(array(
                'title' => 'KYC',
                'users' => User::where('id_card', '!=', NULL)
                    ->where('id_card_back', '!=', NULL)
                    ->where('passport', '!=', NULL)->where('address_document', '!=', NULL)->get(),
            ));
    }


    // Return account types
    public function accounttypes(Request $request)
    {
        $accounttypes = AccountType::all();
        return view('admin.accounttypes', [
            'title' => "Account Types",
            'accounttypes' => $accounttypes,
        ]);
    }


    // Return add account type page
    public function ashowddaccounttype(Request $request)
    {
        return view('admin.addaccounttype', [
            'title' => "Add Account Type",
        ]);
    }


    public function addaccounttype(Request $request)
    {
        $input = $request->all();

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'cost' => ['required', 'string',],
            'min_deposit' => ['required', 'integer',],
            'max_leverage' => ['required', 'integer',],
            'min_trade_size' => ['required',],
            'max_trade_size' => ['required',],
            'swaps' => ['required', 'string',],
            'fx_commission' => ['required', 'string',],
            'num_fx_pairs' => ['required', 'integer'],
            'num_commodities_pairs' => ['required', 'integer'],
            'num_indices_pairs' => ['required', 'integer',],
            'trading_platforms' => ['required', 'string',],
            'typical_spread' => ['required',],
            'execution_type' => ['required', 'string',],
            'requotes' => ['required', 'string',],
            'available_instruments' => ['required', 'string',],
            'educational_material' => ['required', 'integer',],
            'active' => ['required', 'integer',],
        ])->validate();

        unset($input['_token']);

        $accType = new AccountType($input);
        $accType->save();

        return redirect('accounttypes')->with('message', 'New Account Type Created Sucessfully!');
    }


    public function updateaccounttype(Request $request, $id)
    {
        AccountType::where('id', $id)
            ->update([
                'name' => $request->name,
                'cost' => $request->cost,
                'min_deposit' => $request->min_deposit,
                'max_leverage' => $request->max_leverage,
                'min_trade_size' => $request->min_trade_size,
                'max_trade_size' => $request->max_trade_size,
                'swaps' => $request->swaps,
                'fx_commission' => $request->fx_commission,
                'num_fx_pairs' => $request->num_fx_pairs,
                'num_commodities_pairs' => $request->num_commodities_pairs,
                'num_indices_pairs' => $request->num_indices_pairs,
                'trading_platforms' => $request->trading_platforms,
                'typical_spread' => $request->typical_spread,
                'execution_type' => $request->execution_type,
                'requotes' => $request->requotes,
                'available_instruments' => $request->available_instruments,
                'educational_material' => $request->educational_material,
                'active' => $request->active,
            ]);
        return redirect()->back()
            ->with('message', 'The Account Type Updated Sucessfully!');
    }


    public function delaccounttype(Request $request, $id)
    {
        AccountType::where('id', $id)->delete();
        return redirect()->back()
            ->with('message', 'Account type has been deleted!');
    }


    public function dellaccounts(Request $request, $id)
    {
        $mt5 = Mt5Details::find($id);

        if (!isset($mt5)) {
            return redirect()->back()
                ->with('message', 'Account not found!');
        }

        // check and update live account balances
        $this->setServerConfig('live');

        // initialize the mt5 api
        $api = new LaravelMt5();

        // delete the mt5 account
        try {
            $data = $api->deleteUser($mt5->login);
        } catch (Exception $e) {
            return redirect()->back()
                ->with('message', 'Sorry an error occured, please contact admin with this error message: ' . $e->getMessage());
        }

        $mt5->delete();

        return redirect()->back()
            ->with('message', 'Account successfully deleted!');
    }


    public function mftds(Request $request)
    {
        $users = User::all();

        return view('admin.mftds', [
            'title' => "First Time Deposits",
            'users' => $users,
        ]);
    }
}
