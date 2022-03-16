<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Spatie\Permission\Models\Permission;


class PermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:mperms-list|mperms-create|mperms-edit|mperms-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:mperms-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:mperms-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
        $permission = Permission::get();
        return view('admin.perms.index')->with(array(
            'title' => 'Manage Permission',
            'permission' => $permission
        ));
    }


    public function store(Request $request)

    {
        $request->validate([
            'name' => 'required|unique:permissions,name'
        ]);

        Permission::create($request->only('name'));

        return redirect()->route('manageperms')->with('success', 'Permission Create successfully');
    }


    public function delete($id)
    {
        DB::table("permissions")->where('id', $id)->delete();
        return redirect()->route('manageperms')->with('success', 'Permission deleted successfully');
    }
}
