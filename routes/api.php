<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// authentication
Route::prefix('auth')->group(function() {

    // login
    Route::post('/login', 'App\Http\Controllers\AuthController@login')
        ->name('login');
        
    // logout
    Route::post('/logout', 'App\Http\Controllers\AuthController@logout')
        ->name('logout');
});


// user data
Route::middleware('auth:sanctum')
    ->name('user')
    ->get('/user', function (Request $request) {
    return $request->user();
});