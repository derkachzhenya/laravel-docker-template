<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::resource('/home', HomeController::class)->only(['create', 'store', 'show', 'edit', 'update', 'destroy']);
