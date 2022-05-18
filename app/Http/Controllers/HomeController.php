<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return redirect()->route('welcome');
    }


    public function welcome()
    {
        $properties = Property::inRandomOrder()->take(3)->get();
        $latest_properties = Property::orderBy('id', 'desc')->take(5)->get();
        return view('welcome', compact('properties', 'latest_properties'));
    }

    public function property()
    {
        $properties = Property::when(request()->has('pincode'), function ($query) {
            $query->where('pincode', request()->pincode);
        })
            ->inRandomOrder()
            ->simplePaginate(6);
        return view('property', compact('properties'));
    }
}
