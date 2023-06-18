<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('home');

//locations routes
Route::prefix('/locations')->name('locations.')->group(function () {
    Route::get('/', [MainController::class, 'location'])->name('index');
    Route::get('/villa', [MainController::class, 'location'])->name('villa');
    Route::get('/parenthese', [MainController::class, 'location'])->name('parenthese');
    Route::get('/dream', [MainController::class, 'location'])->name('dream');
    Route::get('/imperial', [MainController::class, 'location'])->name('imperial');
});

//activities routes
Route::prefix('/activities')->name('activities')->group(function () {
    Route::get('/', [MainController::class, 'activity']);
});

//Galerie routes
Route::prefix('galerie')->name('galerie')->group(function () {
    Route::get('/', [MainController::class, 'galerie']);
});

//Tourisme routes
Route::prefix('tourisme')->name('tourisme')->group(function () {
    Route::get('/', [MainController::class, 'tourisme']);
});

//Contact routes
Route::prefix('contact')->name('contact')->group(function () {
    Route::get('/', [MainController::class, 'contact']);
});
