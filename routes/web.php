<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\NewsletterController;


Route::get('/', [PublicController::class, 'home'])->name('home');


// rotte post
Route::get("/post/create",[PostController::class,"create"])->name("create_post");
Route::post('/post/store',[PostController::class,'store'])->name('store_post');
Route::get("/post/show/{post}",[PostController::class,"show"])->name("show_post");
Route::get("/post/edit/{post}",[PostController::class,"edit"])->name("edit_post");
Route::put("/post/update/{post}",[PostController::class,"update"])->name("update_post");
Route::delete("/post/submit/{post}",[PostController::class,"destroy"])->name("delete_post");

// rotta profilo

Route::get("/profile/index", [ProfileController::class, "index"])->name("index_profile");
Route::get("/profile/create", [ProfileController::class, "create"])->name("create_profile");
Route::post("/profile/store", [ProfileController::class, "store"])->name("store_profile");
Route::get("/profile/show/{profile}", [ProfileController::class, "show"])->name("show_profile");
Route::get("/profile/edit/{profile}", [ProfileController::class, "edit"])->name("edit_profile");
Route::put("/profile/update/{profile}", [ProfileController::class, "update"])->name("update_profile");

//rotta newsletter del  footer
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

