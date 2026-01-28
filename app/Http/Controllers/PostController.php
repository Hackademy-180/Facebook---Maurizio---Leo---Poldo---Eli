<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index()
    {
        return view('home', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("post.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = Post::create([
            "title" => $request->title,
            "description" => $request->description,
            "img" => $request->hasFile('img') ? $request->file('img')->store('image', 'public') : null,
            "user_id" => Auth::user()->id
        ]);

        return redirect(route("home"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view("post.show", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view("post.edit", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->update([
            "title" => $request->title,
            "description" => $request->description,
            "img" => $request->file("img")->store("image", "public")
        ]);
        return redirect("home");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect("home");
    }
}
