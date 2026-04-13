<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
    // return "welcome to Laravel";
})->name('home');
Route::resource('notes', \App\Http\Controllers\NoteController::class);