<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/post',function(Request $request){
    //  Logic to create a user
    return response()->json([
        'message' => 'User created successfully',
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'created_at' => now(),
    ], 201);

});