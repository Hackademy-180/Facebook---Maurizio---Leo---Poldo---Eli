<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function home( ) {
    
    $posts= Post::all();
    // $profile=Auth::user()->profile;
    return view('welcome',compact("posts"));
}
}
