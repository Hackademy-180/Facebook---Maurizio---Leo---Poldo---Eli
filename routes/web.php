<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('home');


// rotte post
Route::get("/post/create",[PostController::class,"create"])->name("create_post");
Route::post("/post/submit/{post}",[PostController::class,"show"])->name("show_post");
Route::get("/post/edit/{post}",[PostController::class,"edit"])->name("edit_post");
Route::put("/post/update/{post}",[PostController::class,"update"])->name("update_post");
Route::delete("/post/delete/{post}",[PostController::class,"delete"])->name("delete_post");


