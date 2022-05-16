<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function propertySingle()
    {
        return view('property-single');
    }
    public function store(Request $request)
    {
        Comment::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'comments'=>$request->comments,

        ]);
        return redirect('property-single')->with('status','Your message has been sent. Thank you!');
    }
}
