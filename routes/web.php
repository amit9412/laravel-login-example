<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});

route::post('/check', [MainController::class, 'check'])->name('check');
route::get('/login', [MainController::class, 'index']);
route::get('/register',[MainController::class, 'register'])->name('register');
route::get('/logout', [MainController::class, 'logout'])->name('logout');
route::post('/save', [MainController::class, 'save_user_data'])->name('save');
Route::get('/profile', [MainController::class, 'profile'])->name('profile')->middleware('auth');
