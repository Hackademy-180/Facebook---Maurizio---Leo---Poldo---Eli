<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;

Route::get('/', [PublicController::class, 'home'])->name('home');


// rotte post
Route::get("/post/create",[PostController::class,"create"])->name("create_post");
Route::post('/post/store',[PostController::class,'store'])->name('store_post');
Route::get("/post/show/{post}",[PostController::class,"show"])->name("show_post");
Route::get("/post/edit/{post}",[PostController::class,"edit"])->name("edit_post");
Route::put("/post/update/{post}",[PostController::class,"update"])->name("update_post");
Route::delete("/post/submit/{post}",[PostController::class,"destroy"])->name("delete_post");

// rotte commenti
Route::get("/comments/create/{post}",[CommentController::class,"create"])->name("create_comment");
Route::post('/comments/store/{post}',[CommentController::class,'store'])->name('store_comment');
Route::get("/comments/edit/{comment}",[CommentController::class,"edit"])->name("edit_comment");
Route::put("/comments/update/{comment}",[CommentController::class,"update"])->name("update_comment");
Route::delete("/comments/submit/{comment}",[CommentController::class,"destroy"])->name("delete_comment");


// rotta profilo

Route::get("/profile/index", [ProfileController::class, "index"])->name("index_profile");
Route::get("/profile/create", [ProfileController::class, "create"])->name("create_profile");
Route::post("/profile/store", [ProfileController::class, "store"])->name("store_profile");


