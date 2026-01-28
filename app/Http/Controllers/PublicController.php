<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
    $posts= Post::all();
    return view('welcome',compact("posts"));
}
}
