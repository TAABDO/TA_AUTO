<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        $announcements = Announcement::where('car_id', '!=', null)->get();

        return view('car', compact('announcements'));
    }

    public function show($id)
    {
        $announcementcars = Announcement::latest()->take(4)->get();

        $announcement = Announcement::findOrFail($id);

        return view('car-detaills', compact('announcement', 'announcementcars'));
    }

    public function filterCar(Request $request)
    {
        // Get filter criteria from request
        $year = $request->input('year');
        $transmission = $request->input('transmission');
        $model = $request->input('model');
        $price = $request->input('price');
        $fuel_type = $request->input('fuel_type');
        $color = $request->input('color');

        // Start building the query
        $query = Car::query();

        // Add conditions based on filter criteria
        if ($year !== null) {
            $query->where('year', $year);
        }

        if ($transmission !== null) {
            $query->where('transmission', $transmission);
        }

        if ($model !== null) {
            $query->where('model', 'LIKE', '%'.$model.'%');
        }

        if ($fuel_type !== null) {
            $query->where('fuel_type', $fuel_type);
        }
        if ($color !== null) {
            $query->where('color', $color);
        }

        if ($price !== null) {
            $query->where('price', '<=', $price);
        }

        // Execute the query and get the results
        $cars = $query->get();

        // Return the filtered results as a view
        return view('car', ['cars' => $cars]);
    }

    

    // public function filterByType(Request $request)
    // {
    //     $type = $request->input('type');
    //     $search = $request->input('search');

    //     $query = Announcement::query();

    //     if ($type !== 'All') {
    //         $query->where('type', $type);
    //     }

    //     if ($search) {
    //         $query->where('name', 'like', '%'.$search.'%');
    //     }

    //     $announcements = $query->get();

    //     return view('car', ['announcements' => $announcements]);
    // }
}
