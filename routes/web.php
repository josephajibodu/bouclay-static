<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/pitch-deck', 'pitch-deck')->name('pitch-deck');
Route::view('/logo-brief', 'logo-brief')->name('logo-brief');
Route::view('/login', 'coming-soon')->name('login');
Route::view('/register', 'coming-soon')->name('register');
