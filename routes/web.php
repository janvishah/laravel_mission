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

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/customers', App\Http\Controllers\CustomerController::class)->middleware('auth');
Route::get('measurements/create/{id}', 'App\http\Controllers\MeasurementController@create')->name('measurement.create');
//Route::get('measurements/{id}', 'App\http\Controllers\MeasurementController@show')->name('measurement.show');
Route::post('measurements/{id}', 'App\http\Controllers\MeasurementController@store')->name('measurement.store');

//Define your resource routes, excluding 'create'
//Route::resource('newscast', 'NewscastsController', ['except' => ['create']);
//Route::resource('/measurements', App\Http\Controllers\MeasurementController::class)->middleware('auth');
Route::resource('measurements', 'App\Http\Controllers\MeasurementController', ['except' => ['create','store'] ] );

//Route::get('/measurements/create/{id}','App\http\Controllers\MeasurementController@create');
//Route::POST('/measurements/{id}','App\Http\Controllers\MeasurementController@store');