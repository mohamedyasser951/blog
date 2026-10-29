<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/posts', [PostController::class, "index"])->name(name: "posts.index");
Route::get("/posts/create", [PostController::class, "create"])->name(name: "posts.create");
Route::get("/posts/{post}", [PostController::class, "show"])->name(name: "posts.show");
Route::post("/posts/store", [PostController::class, 'store'])->name(name: 'posts.store');
Route::get("/posts/{post}/edit", [PostController::class, 'edit'])->name(name: 'posts.edit');
Route::put("/posts/{post}",[PostController::class, 'update'])->name(name:"posts.update");
Route::delete("/posts/{post}",[PostController::class, 'destroy'])->name(name:"posts.destroy");

/*
View is Gloabl Helpers
:: Scope Resolutions

artisan =---------------->

*/