<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/hello', function(Request $request){
    $input = $request->input('name');
    return $input;
});

Route::get('/user/{id}', function($id){
    return $id;
});