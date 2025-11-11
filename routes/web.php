<?php

use App\Http\Controllers\JobController;
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

Route::get('/forgotpassword', function () {
    return view('forgotpassword');
})->name('forgotpassword');

Route::get('/searchjob', [JobController::class, 'index'])->name('searchjob');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/publishjob', function () {
    return view('publishjob');
})->name('publishjob');

Route::get('/jobdetails/{id}', [JobController::class, 'show'])->name('jobdetails');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/editperfil', function () {
    return view('editperfil');
})->name('editperfil');