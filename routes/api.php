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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// create a route to store the auth log. This route will be called from the python script
Route::post('/auth-log', [App\Http\Controllers\AuthLogController::class, 'store']);

// create a route to fetch all the auth logs
Route::get('/auth-logs', [App\Http\Controllers\AuthLogController::class, 'index']);
