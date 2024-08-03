<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/site/index/{id}/user', function ($id) {
    return view('site/index');
});


// Route::get('/profile/index', [ProfileController::class, 'index']);
Route::resource('profiles', ProfileController::class);