<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['prefix' => 'car_models'], function () {
    Route::get('/', \App\Http\Controllers\CarModel\IndexController::class)->name('car_models.index');
    Route::get('/create', \App\Http\Controllers\CarModel\CreateController::class)->name('car_models.create');
    Route::post('/', \App\Http\Controllers\CarModel\StoreController::class)->name('car_models.store');
    Route::get('/{car_model}', \App\Http\Controllers\CarModel\ShowController::class)->name('car_models.show');
    Route::get('/{car_model}/edit', \App\Http\Controllers\CarModel\EditController::class)->name('car_models.edit');
    Route::patch('/{car_model}', \App\Http\Controllers\CarModel\UpdateController::class)->name('car_models.update');
    Route::delete('/{car_model}', \App\Http\Controllers\CarModel\DeleteController::class)->name('car_models.destroy');
});

//Route::get('/', function () {
//    return view('welcome');
//});
