<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/login/{provider}', [AuthController::class, 'redirectToProvider']);
Route::get('/login/{provider}/callback', [AuthController::class, 'handleProviderCallback']);

// Protected routes
Route::group(['middleware'=>['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});
