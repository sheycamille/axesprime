<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class SystemController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    // block user
    public function ublock($id)
    {

        User::where('id', $id)
            ->update([
                'status' => 'blocked',
            ]);
        return redirect()->route('manageusers')
            ->with('message', 'Action Sucessful!');
    }


    // unblock user
    public function unblock($id)
    {

        User::where('id', $id)
            ->update([
                'status' => 'active',
            ]);
        return redirect()->route('manageusers')
            ->with('message', 'Action Sucessful!');
    }
}