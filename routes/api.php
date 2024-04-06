<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\DB;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/hello', function (Request $request) {
    return $request->name;
});

// Route::get('/hello', [UserController::class, 'show']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/users', [UserController::class, 'users']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/user/{id}', [UserController::class, 'user']);
Route::post('/updateRef/{id}', [UserController::class, 'updateRef']);
