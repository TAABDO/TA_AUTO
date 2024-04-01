<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {

        $users = User::where('status', 'pending')->get();
        $brands = Brand::all();

        return view('admin.admin', compact('users','brands'));
    }

    public function create()
    {
        return view('Admin.brands.create');
    }
    public function store(Request $request)
    {

                $brans = new Brand();
                $brans->name = $request->name;
                if ($request->hasFile('logo')) {
                    $brans->addMediaFromRequest('logo')->toMediaCollection('brands_logo');
                }
                $brands = $brans->save();
                if ($brands) {
                    return redirect()->route('brands.create')->with('success', 'Brand Created Successfully');
                } else {
                    return redirect()->route('brands.create')->with('error', 'Brand Created Failed');
                }

        return view('admin.brands.create');
    }

    public function Show(Brand $brands)
    {
        return view('admin.brands.update', compact('brands'));
    }
    {
        $brands = Brand::FindOrFail($id);
        return view('admin.brands.update', compact('brands'));
    }
    public function edit()
    {
        return view('admin.brands.update', compact('brands'));
    }
    public function update()
    {
        return view('admin.brands.update');
    }


    public function destroy($id)
{
    $brand = Brand::findOrFail($id);
    $brand->delete();
    return redirect()->route('brands.index')->with('success', 'Brand Deleted Successfully');
}
}
