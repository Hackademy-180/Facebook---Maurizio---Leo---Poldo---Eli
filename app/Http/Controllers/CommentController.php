<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Post $post)
    {
        $comments= Comment::all();
        return view("comments.create",compact("post","comments"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Post $post)
    {
        $comment=Comment::create([
            "description"=>$request->description,
            "user_id"=>Auth::user()->id,
            "post_id"=>$post->id
        ]);
        return redirect(route("show_post",compact("comment","post")));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view("comments.edit",compact("comment"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment )
    {

       $comment->update([
             "description"=>$request->description,
        ]);
          return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back();
    }
}
