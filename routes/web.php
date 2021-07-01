<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ClientController;

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
    Route::get('/', 'App\Http\Controllers\IndexController@getIndex')->name('broinsta.home');
    Route::post('/deposit', 'App\Http\Controllers\IndexController@store')->name('deposit.index');
    Route::post('/validasi', 'App\Http\Controllers\IndexController@getValidasi')->name('deposit.validasi');
    Route::put('/validasi/{id}', 'App\Http\Controllers\ClientController@Update')->name('members.update');
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
