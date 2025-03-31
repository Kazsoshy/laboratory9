<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('homepage', function() {
    return view('homepage');
});

Route::get('registration', function() {
    return view('registration');
});

Route::get('submission', function() {
    return view('submission');
});

Route::get('/user/create', function() {
    return view('user.create');
});

Route::post('/user', [UserController::class, 'store']);