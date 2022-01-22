<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ContactController;

Route::get('/', function() {
    return view('index');
});

Route::get('/login',[AuthController::class,'login'])-> name('login');
Route::post('/signin',[AuthController::class,'signin']);
Route::get('/register',[AuthController::class,'register']);
Route::post('/signup',[AuthController::class,'signup']);
Route::get('/logout',[AuthController::class,'logout']);
Route::get('/dashboard',[ItemController::class,'dashboard']);

Route::get('/contacts', [ContactController::class, 'index']);
Route::get('/contacts/create',[ContactController::class,'create']);
Route::post('/contacts/store',[ContactController::class,'store']);
Route::get('/contacts/show/{id}',[ContactController::class,'show']);
Route::get('/contacts/edit/{id}',[ContactController::class,'edit']);
Route::post('/contacts/update/{id}',[ContactController::class,'update']);
Route::get('/contacts/delete/{id}',[ContactController::class,'destroy']);
