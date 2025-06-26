<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->middleware('auth');


Route::get('/forgot-password', [AuthController::class, 'showForgotForm']);
Route::post('/forgot-password', [AuthController::class, 'handleForgot']);
