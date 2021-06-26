<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'App\Http\Controllers\IndexController@getIndex');
    Route::post('/deposit', 'App\Http\Controllers\IndexController@store')->name('deposit.index');
    Route::post('/', 'App\Http\Controllers\IndexController@getAccount')->name('deposit.account');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
