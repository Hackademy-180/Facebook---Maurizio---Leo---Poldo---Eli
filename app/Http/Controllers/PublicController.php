<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Post; 

class PublicController extends Controller
{
    public function home() {
    $posts= Post::all();
    return view('welcome',compact("posts"));
}
}
