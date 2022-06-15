<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Spatie\Permission\Models\Permission;

use DataTables;


class PermController extends Controller
{
    function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:mperm-list', ['only' => ['list']]);
        $this->middleware('permission:mperm-list|mperm-create|mperm-edit|mperm-delete', ['only' => ['index']]);
        $this->middleware('permission:mperm-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:mperm-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:mperm-delete', ['only' => ['destroy']]);
    }


    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::get();
        return view('admin.perms.index')->with(array(
            'title' => 'Manage Permission',
            'permissions' => $permissions
        ));
    }


      // Return permission data
      public function getperms()
      {
          $data = Permission::latest()->get();
          $fdata = DataTables::of($data)
              ->addColumn('id', function($perm) {
                  return $perm->id;
              })
              ->addColumn('permission', function($perm) {
                  return $perm->name;
              })
              ->addColumn('action', function($perm) {
                  $action = '<a href="#" data-toggle="modal"data-target="#deleteModal' . $perm->id . '"class="m-1 btn btn-danger btn-sm">Delete</a>';
  
                  //$action .= view('admin.users_actions', compact('admin'))->render();
                  
               
                  return $action;
              })
              ->rawColumns(['action'])
              ->make(true);
  
               //dd($fdata);
  
               return $fdata;
              
      }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name'
        ]);

        Permission::create(['name' => $request->name, 'guard_name' => 'admin']);

        return redirect()->route('manageperms')->with('message', 'Permission Create successfully');
    }


    public function destroy($id)
    {
        DB::table("permissions")->where('id', $id)->delete();
        return redirect()->route('manageperms')->with('message', 'Permission deleted successfully');
    }
}