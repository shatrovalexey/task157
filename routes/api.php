<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{RegistrationController, ProfileController};
use App\Http\Controllers\Auth\LoginController;

Route::post('/login', [LoginController::class, 'login',]);
Route::post('/registration', [RegistrationController::class, 'register',]);
Route::post('/profile', [ProfileController::class, 'show',]);