<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;

Route::get('/',[WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/about',[WelcomeController::class, 'about'])->name('about');
Route::get('/login',[WelcomeController::class, 'login'])->name('login')->middleware('is.authenticated');
// Route::get('/welcome/user/{{Auth::user()->name }}',[WelcomeController::class, 'user'])->name('welcome')->middleware('AuthMiddleware');

Route::get('welcome/user',[AuthController::class, 'loggedin'])->name('loggedin');
Route::post('/process', [AuthController::class, 'process'])->name('process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
