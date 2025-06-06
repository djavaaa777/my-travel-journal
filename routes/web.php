<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/about', [MainController::class, 'about']);
Route::get('/review', [MainController::class, 'review']);
Route::get('/dashboard', [MainController::class, 'dashboard']);



Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/register', [AuthController::class, 'register']);
Route::post('/register/check', [AuthController::class, 'onRegister']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login/check', [AuthController::class, 'onLogin']);

Route::post('/dashboard/add', [MainController::class, 'onAdd']);
Route::post('/review/add', [MainController::class, 'onAddReview']);

Route::get('/log', function () {
    return response()->file(storage_path('logs/laravel.log'));
});

