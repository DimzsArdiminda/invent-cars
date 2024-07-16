<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/login', function () {
    return view('pages.auth.signin');
});

Route::get('auth/sign-up', function () {
    return view('pages.auth.signup');
});



include 'formController.php';