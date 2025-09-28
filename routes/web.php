<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/',[WelcomeController::class, 'welcome']);
Route::get('/login',[WelcomeController::class, 'login'])->name('login');

