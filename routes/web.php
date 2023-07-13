<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\LandingGenresController;
use App\Http\Controllers\LandingMoviesController;
use App\Http\Controllers\DashboardGenresController;
use App\Http\Controllers\DashboardMoviesController;
use App\Http\Controllers\LandingCountriesController;
use App\Http\Controllers\DashboardCommentsController;
use App\Http\Controllers\DashboardCountriesController;

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

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::resource('/movies', LandingMoviesController::class);
Route::resource('/countries', LandingCountriesController::class);
Route::resource('/genres', LandingGenresController::class);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::prefix('/dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('/countries', DashboardCountriesController::class);
    Route::resource('/genres', DashboardGenresController::class);
    Route::resource('/movies', DashboardMoviesController::class);
    Route::resource('/comments', DashboardCommentsController::class);
    Route::resource('/users', DashboardUserController::class);
});
