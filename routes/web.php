<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;

Route::get('/',[WelcomeController::class, 'welcome']);
Route::get('/about',[WelcomeController::class, 'about'])->name('about');
Route::get('/login',[WelcomeController::class, 'login'])->name('login');
Route::get('/welcome/user/{id}',[WelcomeController::class, 'user'])->name('welcome')->middleware('AuthMiddleware');

Route::get('/loggedin',[AuthController::class, 'loggedin'])->name('loggedin');
Route::post('/process', [AuthController::class, 'process'])->name('process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
