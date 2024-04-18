<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        // $announcements = Announcement::with('cars')->paginate(10); // 10 is the number of items per page
        $cars = Car::all();
        $announcements = Announcement::all();

        return view('car', compact('cars', 'announcements'));
    }

    public function show($id)
    {
        $cars = Car::findOrFail($id);
        $findcars = Car::latest()->take(4)->get();

        $announcement = Announcement::findOrFail($id);

        return view('car-detaills', compact('cars', 'announcement', 'findcars'));
    }

    public function filterCar(Request $request)
    {
        // Get filter criteria from request
        $year = $request->input('year');
        $transmission = $request->input('transmission');
        $model = $request->input('model');
        $price = $request->input('price');
        $fuel_type = $request->input('fuel_type');

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

        // if ($fuel_type !== null) {
        //     $query->where('fuel_type', $fuel_type);
        // }

        if ($price !== null) {
            $query->where('price', '<=', $price);
        }

        // Execute the query and get the results
        $cars = $query->get();

        // Return the filtered results as a view
        return view('car', ['cars' => $cars]);
    }
}
