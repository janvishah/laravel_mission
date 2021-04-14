<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(["register" => false]);


Route::resource('/customers', App\Http\Controllers\CustomerController::class)->middleware('auth');
Route::get('measurements/create/{id}', 'App\http\Controllers\MeasurementController@create')->name('measurement.create')->middleware('auth');

Route::post('measurements/{id}', 'App\http\Controllers\MeasurementController@store')->name('measurement.store')->middleware('auth');

//Define your resource routes, excluding 'create'

Route::resource('measurements', 'App\Http\Controllers\MeasurementController', ['except' => ['create','store'] ] )->middleware('auth');

