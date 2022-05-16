<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{



    public function index()
    {
        if (auth()->user()->type=="owner"){
            return redirect()->route('owner.index');
        }
        else {
            return redirect()->route('welcome');
        }
    }


    public function welcome()
    {
        return view('welcome');
    }

    public function property()
    {
        return view('property');
    }



}
