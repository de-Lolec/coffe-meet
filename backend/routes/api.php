<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::namespace('App\Http\Controllers\Api\V1\Auth')->group(function () {
    Route::post('/register', 'RegisterController');
    Route::post('/login', 'LoginController');
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::namespace('App\Http\Controllers\Api\V1\Auth')->group(function () {
        Route::post('/logout', 'LogoutController');
    });
});
