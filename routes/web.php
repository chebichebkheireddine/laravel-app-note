<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
    // return "welcome to Laravel";
});
Route::get('/about',function(){
    return "about page";
});
// This is a first method to create a route
Route::get('/app',function(){
    return view('post');
});
// Route::view("/co2","contact");
// This is custom route to advanced route
Route::get('/users/{id}',function($id){
    return "user id is : ".$id;
})->where('id','[0-9]+');

// To create Post to use postman
