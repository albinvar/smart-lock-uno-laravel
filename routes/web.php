<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    # Create a route to view the auth logs.
    Route::get('/auth-logs', [App\Http\Controllers\AuthLogController::class, 'index'])->name('auth.logs');

    # create a group of routes to manage the pages for app users
    Route::group(['prefix' => 'app'], function () {
        # Create a route to view the auth logs.
        Route::get('/auth-logs', [App\Http\Controllers\AuthLogController::class, 'appIndex'])->name('app.auth.logs');

        Route::get('/intruders', [App\Http\Controllers\MainController::class, 'appIntruders'])->name('app.intruders');

        Route::get('/dashboard', [App\Http\Controllers\MainController::class, 'appDashboard'])->name('app.dashboard');
    });
});
