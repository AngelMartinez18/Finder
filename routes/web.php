<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/searchjob', function () {
    return view('searchjob');
})->name('searchjob');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/publishjob', function () {
    return view('publishjob');
})->name('publishjob');