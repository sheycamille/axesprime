<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Spatie\Permission\Models\Permission;


class PermController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }


    /**
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


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name'
        ]);

        Permission::create(['name' => $request->name, 'guard_name' => 'admin']);

        return redirect()->route('manageperms')->with('message', 'Permission Create successfully');
    }


    public function delete($id)
    {
        DB::table("permissions")->where('id', $id)->delete();
        return redirect()->route('manageperms')->with('message', 'Permission deleted successfully');
    }
}
