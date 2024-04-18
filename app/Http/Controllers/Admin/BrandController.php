<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {

        // $users = User::where('status', 'pending')->get();
        $brands = Brand::all();

        return view('Admin.brands.brands',compact('brands'));
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

    public function show(Brand $brand)
    {
        return view('admin.brands.update', compact('brand'));
    }

    public function edit(Brand $brand)
{
    return view('admin.brands.update', compact('brand'));
}

    public function update(Request $request, Brand $brand)
    {
        $brand->name = $request->name;
        if ($request->hasFile('logo')) {
            $brand->clearMediaCollection('brands_logo');
            $brand->addMediaFromRequest('logo')->toMediaCollection('brands_logo');
        }
        $brand->save();

        return redirect()->route('brands.index')->with('success', 'Brand Updated Successfully');
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect()->route('brands.index')->with('success', 'Brand Deleted Successfully');
    }
}
