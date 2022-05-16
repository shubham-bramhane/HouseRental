<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function create()
    {
        return view('Owner.Property.create');
    }

    public function store(Request $request)
    {
       dd($request->all());
    }

    public function booked()
    {
        //
    }
}
