<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use App\Models\User;
use App\Models\Images;
use App\Models\Content;
use App\Models\Deposit;
use App\Models\Testimony;
use App\Models\Withdrawal;
use App\Models\AccountType;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


use DataTables;




class HomeController extends Controller
{
    function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:mdeposit-list', ['only' => ['mdeposits']]);
        $this->middleware('permission:mdeposit-process', ['only' => ['pdeposit', 'rejectdeposit']]);
        $this->middleware('permission:mwithdrawal-list', ['only' => ['mwithdrawals']]);
        $this->middleware('permission:mwithdrawal-process', ['only' => ['pwithdrawal', 'rejectwithdrawal']]);
        $this->middleware('permission:macctype-list|macctype-create|macctype-edit|macctype-delete', ['only' => ['accounttypes']]);
        $this->middleware('permission:macctype-create', ['only' => ['showaddaccounttype', 'addaccounttype']]);
        $this->middleware('permission:macctype-edit', ['only' => ['updateaccounttype']]);
        $this->middleware('permission:macctype-delete', ['only' => ['delaccounttype']]);
        $this->middleware('permission:mftd-list', ['only' => ['mftds']]);
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
            'total_deposited' => $total_deposited->toArray()[0]->total,
            'pending_deposited' => $pending_deposited->toArray()[0]->total,
            'total_withdrawn' => $total_withdrawn->toArray()[0]->total,
            'pending_withdrawn' => $pending_withdrawn->toArray()[0]->total,
            'user_count' => $userlist,
            'activeusers' => $activeusers,
            'blockeusers' => $blockeusers,
            'unverifiedusers' => $unverifiedusers,
        ]);
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


    
     // Return withdrawals data
     public function getwithdrawals()
     {
         $data = Withdrawal::latest()->get();
         $fdata = Datatables::of($data)
             ->addColumn('id', function($withdrawal) {
                 return $withdrawal->id ;
             })
             ->addColumn('name', function($withdrawal) {
                return $$withdrawal->duser->name;
            })
            ->addColumn('amount', function($withdrawal) {
                return $$withdrawal->amount ;
            })
            ->addColumn('to_deduct', function($withdrawal) {
                return $withdrawal->to_deduct;
            })
            ->addColumn('mt5', function($withdrawal) {
                return $withdrawal->mt5->login ;
            })
            ->addColumn('payment_mode', function($withdrawal) {
                return $withdrawal->payment_mode ;
            })
            ->addColumn('email', function($withdrawal) {
                return $withdrawal->duser->email ;
            })
            ->addColumn('status', function($withdrawal) {
                return $withdrawal->status  ;
            })
            ->addColumn('created_at', function($withdrawal) {
                return $withdrawal->created_at ;
            })
            
             ->addColumn('action', function($withdrawal) {
                 $action = '';

                 $action .= '<a class="m-1 btn btn-info btn-sm" data-toggle="modal" data-target="#viewModal'.  $withdrawal->id .'"><i
                 class="fa fa-eye"></i>View</a>';

                 if($withdrawal->status == 'Processed'){
                    $action .= '<a href="#" class="btn btn-sm btn-success">' . $withdrawal->status . '</a>';
                
                 }elseif($withdrawal->status == 'Rejected'){
                    $action .= '<a href="#" class="btn btn-sm btn-danger">' . $withdrawal->status . '</a>';
                 }
                 
                 if (auth('admin')->user()->hasPermissionTo('mwithdrawal-process', 'admin')){
                    $action .= '<a href="#" class="m-1 btn btn-primary btn-sm"' . route('pwithdrawal', $withdrawal->id) .'> Process</a>';

                    $action .= '<a href="#" class="m-1 btn btn-primary btn-sm" data-toggle="modal" data-target="#rejctModal' . $withdrawal->id . ' > Reject</a>';
                 }
 
                 return $action;
             })
             ->rawColumns(['action'])
             ->make(true);
 
             // dd($fdata);
             return $fdata;
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


     // Return deposits data
     public function getdeposits()
     {
         $data = Deposit::latest()->get();
         $fdata = Datatables::of($data)
             ->addColumn('id', function($deposit) {
                 return $deposit->id ;
             })
             ->addColumn('name', function($deposit) {
                return $deposit->duser->name;
            })
            ->addColumn('email', function($deposit) {
                return $deposit->duser->email ;
            })
            ->addColumn('mt5', function($deposit) {
                return $deposit->mt5->login;
            })
            ->addColumn('amount', function($deposit) {
                return $deposit->amount ;
            })
            ->addColumn('payment_mode', function($deposit) {
                return $deposit->payment_mode ;
            })
            ->addColumn('status', function($deposit) {
                return $deposit->status ;
            })
            ->addColumn('create_at', function($deposit) {
                return $deposit->created_at ;
            })
            
             ->addColumn('action', function($deposit) {
                 $action = '';

                 $action .= '<a class="btn btn-primary btn-sm m-1" data-toggle="modal" data-target="#popModal'.  $deposit->id .'" title="View payment proof">Proof</a>';
                 
                 $action .= '<a href="#" class="btn btn-primary btn-sm m-1" data-toggle="modal" data-target="#sendMessageModal'. $deposit->id .'" title="Send Message" >Message</a>';
                
                 if($deposit->status == 'Processed'){
                    $action .= '<a href="#" class="btn btn-sm btn-success">' . $deposit->status . '</a>';
                
                 }elseif($deposit->status == 'Rejected'){
                    $action .= '<a href="#" class="btn btn-sm btn-danger">' . $deposit->status . '</a>';
                 }

                 if (auth('admin')->user()->hasPermissionTo('mdeposit-process', 'admin')){
                    $action .= '<a href="#" class="btn btn-primary btn-sm"' . route('pdeposit', $deposit->id) . '>  Process</a>';

                    $action .= '<a href="#" class="m-1 btn btn-primary btn-sm data-toggle="modal" data-target="#rejctModal'. $deposit->id . '">Reject</a>';

                 }
                 return $action; 
                 
             })
             ->rawColumns(['action'])
             ->make(true);
 
             // dd($fdata);
             return $fdata;
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
                    ->where('passport', '!=', NULL)
                    ->where('address_document', '!=', NULL)
                    ->orderBy('docs_uploaded_date', 'DESC')
                    ->get(),
            ));
    }


     // Return data data
     public function getkyc()
     {
         $data = User::latest()->get();
         $fdata = DataTables::of($data)
             ->addColumn('id', function($user) {
                 return $user->id;
             })
             ->addColumn('full_name', function($user) {
                 return $user->first_name . ' ' . $user->last_name;
             })
             ->addColumn('email', function($user) {
                return $user->email;
            })
            ->addColumn('kyc_status', function($user) {
                return $user->account_verify ;
            })
            ->addColumn('uploaded_date', function($user) {
                return $$user->docs_uploaded_date;
            })
            ->addColumn('verified_date', function($user) {
                 return $user->docs_verified_date;
            })
             ->addColumn('action', function($user) {
                 $action = '';

                 $action .= '<a href="#" class="btn btn-primary btn-sm mx-1" data-toggle="modal" data-target="#viewkycIModal' . $user->id . '"><i class="fa fa-eye"></i>ID</a>';

                 $action .= '<a href="#" class="btn btn-primary btn-sm mx-1" data-toggle="modal" data-target="#viewkycIModal' . $user->id . '"><i class="fa fa-eye"></i>ID Back</a>';

                 $action .= '<a href="#" class="btn btn-primary btn-sm mx-1" data-toggle="modal" data-target="#viewkycAModal' . $user->id . '"><i class="fa fa-eye"></i>Address Document</a>';

                 $action .= '<a href="#" class="btn btn-primary btn-sm mx-1" data-toggle="modal" data-target="#viewkycPModal' . $user->id . '"><i class="fa fa-eye"></i>Passport</a>';

     
                 if (auth('admin')->user()->hasPermissionTo('mkyc-validate', 'admin')){
                    if($user->account_verify != 'Verified'){
                        $action .='<a href="' . route('acceptkyc', $user->id) . '"
                        class="btn btn-primary btn-sm my-2">Accept</a>';

                        $action .='<a href="' . route('rejectkyc', $user->id) . '"
                        class="btn btn-danger btn-sm my-2">Reject</a>';
                    }else{
                        $action .= '<a href="' . route('resetkyc', $user->id) . '"class="btn btn-danger btn-sm my-2">Reset Verification</a>';
                    }
                 }
                 
                 return $action;
             })
             ->rawColumns(['action'])
             ->make(true);
 
              //dd($action);
 
              return $fdata;
             
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


     // Return accounttype data
     public function getaccounttypes()
     {
         $data = AccountType::latest()->get();
         $fdata = DataTables::of($data)
             ->addColumn('id', function($accounttype) {
                 return $accounttype->id;
             })
             ->addColumn('name', function($accounttype) {
                 return $accounttype->name;
             })
             ->addColumn('forex_pairs', function($accounttype) {
                return $accounttype->num_fx_pairs;
            })
            ->addColumn('comodities', function($accounttype) {
                return $accounttype->num_commodities_pairs ;
            })
            ->addColumn('indices', function($accounttype) {
                return $accounttype->num_indices_pairs;
            })
            ->addColumn('cost', function($accounttype) {
                //return $accounttype->amount;
                return \App\Models\Setting::getValue('currency') . $accounttype->amount;
            })
            ->addColumn('status', function($accounttype) {
                $y = 'Yes';
                $n = 'No';
                if($accounttype->active == true){
                    return $y;
                }else{
                    return $n;
                }
                //return $accounttype->active;
            })
             ->addColumn('date_created', function($accounttype) {
                return \Carbon\Carbon::parse($accounttype->created_at)->toDayDateTimeString();
            })
             ->addColumn('action', function($accounttype) {
                 $action = '';

                 $action .= '<a href="#" data-toggle="modal"data-target="#popModal' . $accounttype->id . '"class="m-1 btn btn-warning btn-sm">Edit</a>';
                
                 $action .= '<a href="' . route('delaccounttype', $accounttype->id) . '" class="m-1 btn btn-danger btn-sm">Delete</a>';
                 
                 return $action;
             })
             ->rawColumns(['action'])
             ->make(true);
 
              //dd($fdata);
 
              return $fdata;
             
     }


    // Return add account type page
    public function showaddaccounttype(Request $request)
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

        return redirect(route('accounttypes'))->with('message', 'New Account Type Created Sucessfully!');
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


    public function mftds(Request $request)
    {
        $users = User::all();

        return view('admin.mftds', [
            'title' => "First Time Deposits",
            'users' => $users,
        ]);
    }


     // Return ftd data
     public function getftd()
     {
         $data = User::latest()->get();
         $fdata = DataTables::of($data)
             ->addColumn('id', function($user) {
                 return $user->id;
             })
             ->addColumn('client name', function($user) {
                 return $user->name;
             })
             ->addColumn('first deposit', function($user) {
                  $dp = $user
                ->dp()
                ->where('status', 'Processed')
                ->first();
                return $dp->amount;
            })
             ->addColumn('date_created', function($user) {
                 return \Carbon\Carbon::parse($dp->date_created)->toDayDateTimeString();
                //return $deposit->date_created;
             })
             ->make(true);
 
              //dd($fdata);
 
              return $fdata;
             
     }
}
