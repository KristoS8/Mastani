<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/regist', function () {
    return view('auth/register');
});
