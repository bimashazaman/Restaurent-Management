<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;



//===============home================


Route::get("/", [HomeController::class,'index']);
Route::get("/redirects", [HomeController::class,'redirects']);

//==============admin dashboard=============
Route::get("/users", [AdminController::class,'user']);
Route::get("/deleteUser/{id}", [AdminController::class,'delete']);
Route::get("/foods", [AdminController::class,'food']);
Route::post("/uploadFood", [AdminController::class,'uploadFood']);
Route::get("/deletefood/{id}", [AdminController::class,'deletefood']);
Route::get("/updateview/{id}", [AdminController::class,'updateview']);
Route::post("/update/{id}", [AdminController::class,'update']);
Route::post("/reservation",[AdminController::class, 'reservation']);
Route::get("/viewReservation",[AdminController::class, 'viewReservation']);
Route::get("/viewChef",[AdminController::class, 'viewChef']);
Route::post("/uploadchef", [AdminController::class, 'uploadchef']);
Route::get("/deletechef/{id}", [AdminController::class,'deletechef']);
Route::get("/updatechefview/{id}", [AdminController::class,'updatechefview']);
Route::post("/updatechef/{id}", [AdminController::class,'updatechef']);


//==========cart===============

Route::post("/addcart/{id}", [HomeController::class,'addcart']);
Route::get("/showcart/{id}", [HomeController::class,'showcart']);



//==========user dashboard===========
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
