<?php

use Illuminate\Support\Facades\Route;
use Manikandan1704\LaravelGoogleLogin\Controllers\GoogleLoginController;

Route::get('auth/google', [GoogleLoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);
