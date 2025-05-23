<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('halaman-awal.login');
});

Route::get('/register', function () {
    return view('halaman-awal.register');
});

Route::get('/', function () {
    return view('halaman-awal.loading-screen');
});

Route::get('/home', function () {
    return view('halaman-utama.home');
});

Route::get('/pencarian', function () {
    return view('halaman-utama.pencarian');
});

Route::get('/booking', function () {
    return view('halaman-utama.booking');
});

Route::get('/payment', function () {
    return view('halaman-utama.payment');
});

Route::get('/profile', function () {
    return view('halaman-utama.profile');
});

Route::get('/tiket', function () {
    return view('halaman-utama.tiket');
});