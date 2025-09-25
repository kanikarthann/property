<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Simple pages
Route::view('/buy', 'pages.buy')->name('buy');
Route::view('/rent', 'pages.rent')->name('rent');
Route::view('/sell', 'pages.sell')->name('sell');
Route::view('/agents', 'pages.agents')->name('agents');
Route::view('/insights', 'pages.insights')->name('insights');
Route::view('/saved', 'pages.saved')->name('saved');
Route::view('/signin', 'pages.signin')->name('signin');
Route::view('/list-property', 'pages.list-property')->name('list-property');

Route::get("register", [AuthController::class, "register"]);
