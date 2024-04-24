<?php

namespace App\Http\Controllers\Announcer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashAnnuncerController extends Controller
{
    //

    public function index()
    {
        return view('announcer.dashboard');
    }
}
