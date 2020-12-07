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

// Route::resource('store', 'App\Http\Controllers\StoreController');

//API Residence
Route::get('store', 'App\Http\Controllers\StoreController@index');
Route::post('store', 'App\Http\Controllers\StoreController@store');
Route::post('store/delete/{id}', 'App\Http\Controllers\StoreController@destroy');
Route::post('store/type/{id}/{store}', 'App\Http\Controllers\StoreController@type');