<?php

use B7\Configs\Http\Controllers\ConfigController;
use Illuminate\Support\Facades\Route;


Route::get('/api/v1/config_auth', [ConfigController::class, 'getConfigAuth']);
Route::get('/api/v1/config_privacy_policy', [ConfigController::class, 'getConfigPrivacyPolicy']);
Route::get('/api/v1/config_version', [ConfigController::class, 'getConfigVersion']);
Route::get('/api/v1/config/error_page', [ConfigController::class, 'getConfigErrorPage']);
