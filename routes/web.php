<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/login', 'coming-soon')->name('login');
Route::view('/register', 'coming-soon')->name('register');
