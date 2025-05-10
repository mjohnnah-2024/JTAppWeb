<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/plans', function () {
    return view('plans');
});

Route::get('/domain-registration', function () {
    return view('domainregistration');
});


