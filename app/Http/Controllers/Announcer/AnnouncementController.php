<?php

namespace App\Http\Controllers\Announcer;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCarAnnouncementRequest;
use App\Models\Announcement;
use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        // $announcements = Announcement::with('cars')->paginate(10); // 10 is the number of items per page
        $cars = Car::all()->sortByDesc('created_at');
        // $cars = Car::whereHas('announcement')->latest()->take(4)->get();
        // $announcements = Announcement::all();
        return view('car', compact('cars'));
    }

    public function create()
    {
        $types = ['rentel', 'sale'];
        $brands = Brand::all();

        return view('announcer.annonce.create', compact('types', 'brands'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'sometimes|string',
            'description' => 'sometimes|string',
            'city' => 'sometimes|string',
            'price' => 'sometimes',
            'type' => 'sometimes',
            'color' => 'sometimes',
            'model' => 'sometimes',
            'seat' => 'sometimes',
            'condition' => 'sometimes',
            'km' => 'sometimes',
            'year' => 'sometimes',
            'transmission' => 'sometimes',
            'fuel_type' => 'sometimes',
            'engine_capacity' => 'sometimes',
            'brand_id' => 'sometimes',
            'images.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $announcement = auth()->user()->announcements()->create($validated);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $announcement->addMedia($image)->toMediaCollection('images');
            }
        }

        // dd($request->all());
        $car = new Car($validated);
        $car->announcement()->associate($announcement);
        $car->save();

        return redirect()->route('announce.index');
    }

    // public function show($id)
    // {
    //     $announcement = Announcement::findOrFail($id);

    //     return view('announcements.show', compact('announcement'));
    // }

    // public function edit($id)
    // {
    //     $announcement = Announcement::findOrFail($id);

    //     return view('announcements.edit', compact('announcement'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $validated = $request->validate([
    //         // 'title' => 'sometimes|string',
    //         // 'description' => 'sometimes|string',
    //         // 'price' => 'sometimes',
    //         // 'type' => 'sometimes',
    //         // 'color' => 'sometimes',
    //         // 'model' => 'sometimes',
    //         // 'seat' => 'sometimes',
    //         // 'condition' => 'sometimes',
    //         // 'km' => 'sometimes',
    //         // 'year' => 'sometimes',
    //         // 'transmission' => 'sometimes',
    //         // 'fuel_type' => 'sometimes',
    //         // 'engine_capacity' => 'sometimes',
    //         // 'brand_id' => 'sometimes',
    //         // 'images' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg',
    //     ]);

    //     $announcement = Announcement::findOrFail($id);
    //     $announcement->update($validated);

    //     $car = $announcement->car;
    //     $car->update($validated);

    //     return redirect()->route('dashboard');
    // }

    public function destroy($id)
    {
        $announcement = Announcement::findOrFail($id);
        $announcement->delete();

        return redirect()->route('dashboard');
    }

}
