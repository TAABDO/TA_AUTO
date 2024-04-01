<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{


    public function index()
    {
        $users = User::where('status', 'pending')->get();
        $brands = Brand::all();

        return view('admin.admin', compact('users','brands'));
    }

    public function create()
    {
        return view('Admin.create');
    }


    public function Show(User $admin)
    {

        $roles = Role::All();
        $statuses = User::distinct()->pluck('status')->toArray();

        return view('admin.user.update', compact('admin', 'roles', 'statuses'));
    }

    public function edit(User $admin)
    {

        return view('admin.user.update', compact('admin'));
    }

    public function update(UserRequest $request, User $admin)
    {
        $data = $request->validated();
        $admin->roles()->sync([$request->role_id]);
        return redirect()->route('Admin.index');
    }

}
