<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();

        return view('car', compact('announcements'));
    }

    public function show($id)
    {
        $announcementcars = Announcement::latest()->take(4)->get();

        $announcement = Announcement::findOrFail($id);

        return view('car-detaills', compact('announcement', 'announcementcars'));
    }

    public function filterByType(Request $request)
    {
        $announcementTpye = $request->input('type');
        $query = Announcement::query();

        if ($announcementTpye !== null) {
            $query->where('type', $announcementTpye);
        }
        $announcements = $query->get();

        return view('car', compact('announcements'));
    }

    public function filterCar(Request $request)
    {
        // Get the filter parameters from the request
        $year = $request->get('year');
        $transmission = $request->get('transmission');
        $model = $request->get('model');
        $color = $request->get('color');
        $fuel_type = $request->get('fuel_type');
        $type = $request->get('type');

        // Filter the announcements
        $announcements = Announcement::query();
        if($type){
            $announcements->where('type',$type);
        }
        if ($year) {
            $announcements->whereHas('car', function ($query) use ($year) {
                $query->where('year', $year);
            });
        }

        if ($transmission) {
            $announcements->whereHas('car', function ($query) use ($transmission) {
                $query->where('transmission', $transmission);
            });
        }

        if ($model) {
            $announcements->whereHas('car', function ($query) use ($model) {
                $query->where('model', $model);
            });
        }

        if ($color) {
            $announcements->whereHas('car', function ($query) use ($color) {
                $query->where('color', $color);
            });
        }

        if ($fuel_type && ! empty($fuel_type)) {
            $announcements->whereHas('car', function ($query) use ($fuel_type) {
                $query->where('fuel_type', $fuel_type);
            });
        }

        $announcements = $announcements->get();

        // Return the filtered announcements as a view
        return view('search', compact('announcements'));
    }

    // public function filterCar(Request $request)
    // {
    //     // Start a query on the Announcement model
    //     $announcements = Announcement::query();

    //     if ($request->year && ! empty($request->year)) {

    //         $announcements->whereHas('car', function ($query) use ($year) {
    //             $query->where('year', $year);
    //         });
    //     }
    //     if ($request->transmission && ! empty($request->transmission)) {
    //         $announcements->whereHas('car', function ($query) use ($year) {
    //             $query->where('year', $year);
    //         });
    //     }
    //     if ($request->color && ! empty($request->color)) {
    //         $announcements->whereHas('car', function ($query) use ($color) {
    //             $query->where('color', $color);
    //         });
    //     }
    //     if ($request->fuel_type && ! empty($request->fuel_type)) {
    //         $announcements->whereHas('car', function ($query) use ($year) {
    //             $query->where('year', $year);
    //         });
    //     }
    //     if ($request->model && ! empty($request->model)) {
    //         $announcements->whereHas('car', function ($query) use ($model) {
    //             $query->where('model', $model);
    //         });
    //     }
    //     if ($request->price && ! empty($request->price)) {
    //         $announcements->where('price', '<=', $price);
    //     }

    //     // Execute the query
    //     $announcements = $announcements->get();

    //     // Return the filtered announcements as a view
    //     return view('car', compact('announcements'));
    // }
}
