<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
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
       $lastComment= $post->comments()->orderBy("created_at","desc")->limit(6)->get();
        
        return view("post.show", compact("post","lastComment"));
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
            ]);
            if($request->file("img") == "" ){
             
            }else{
                 $post->update([
                 "img" => $request->file("img")->store("image", "public")
                 ]); 
            };
        return redirect(route("home"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route("home"));
    }
    public function preferitePost(Post $post ){
       $post->preferiteUsers()->attach(Auth::id());
       return redirect(route("home"));
    }
    public function deletePreferitePost(Post $preferitePost ){
       $preferitePost->preferiteUsers()->detach(Auth::id());
       return redirect()->back();
    }
}
