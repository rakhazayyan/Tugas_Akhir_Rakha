<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DustController;
use App\Http\Controllers\NoiseController;
use App\Http\Controllers\LuxController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    //allow register
    'register'  => true,
]);

// Dust Measurement
Route::controller(DustController::class)->group(function () {
    Route::prefix('dust-measurement')->group(function () {
        Route::name('dustMeasurement.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/monitoring', 'monitoring')->name('monitoring');
            Route::get('/document', 'document')->name('document');
            Route::get('/document/create', 'createDocument')->name('createDocument')->middleware('auth');
            Route::post('/document/store', 'storeDocument')->name('storeDocument')->middleware('auth');
            Route::get('/document/delete-{id}', 'deleteDocument')->name('deleteDocument')->middleware('auth');
            Route::get('/document/download-{fileName}', 'downloadDocument')->name('downloadDocument');
        });
    });
});

// Noise Measurement
Route::controller(NoiseController::class)->group(function () {
    Route::prefix('noise-measurement')->group(function () {
        Route::name('noiseMeasurement.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/monitoring', 'monitoring')->name('monitoring');
            Route::get('/history', 'history')->name('history');
        });
    });
});

// Lux Measurement
Route::controller(LuxController::class)->group(function () {
    Route::prefix('lux-measurement')->group(function () {
        Route::name('luxMeasurement.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/monitoring', 'monitoring')->name('monitoring');
            Route::get('/history', 'history')->name('history');
        });
    });
});
