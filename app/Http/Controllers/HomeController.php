<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        if (auth()->user()->type == "owner") {
            return redirect()->route('owner.index');
        } else {
            return redirect()->route('welcome');
        }
    }


    public function welcome()
    {
        $properties = Property::inRandomOrder()->take(3)->get();
        $latest_properties = Property::orderBy('id', 'desc')->take(5)->get();
        return view('welcome', compact('properties', 'latest_properties'));
    }

    public function property()
    {
        return view('property');
    }
}
