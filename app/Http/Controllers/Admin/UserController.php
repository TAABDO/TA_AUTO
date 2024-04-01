<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('status', 'pending')->get();

        return view('admin.admin', compact('users'));
    }


    public function create()
    {
        return view('admin.create');
    }


    public function Show(User $admin)
    {

        $roles = Role::All();
        $statuses = User::distinct()->pluck('status')->toArray();

        return view('Admin.users.update', compact('admin', 'roles', 'statuses'));
    }

    public function edit(User $admin)
    {

        return view('Admin.users.update', compact('admin'));
    }

    public function update(UserRequest $request, User $admin)
    {
        $data = $request->validated();
        $admin->roles()->sync([$request->role_id]);
        return redirect()->route('admin.index');
    }
}
