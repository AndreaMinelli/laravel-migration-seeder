<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class HomeController extends Controller
{
    public function index()
    {
        $trains = Train::all()
            ->sortBy('departure_time')
            ->where('departure_time', '>', date('H:i'));
        return view('home', compact('trains'));
    }
}
