<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes for Frontend
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
/*
|--------------------------------------------------------------------------
| Web Routes for Backend
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix'=>'admin'], function () {
        Route::get('/dashboard','App\Http\Controllers\Backend\pagescontroller@dashboard')->name('admin.dashboard');
    Route::group(['prefix'=>'/brand'], function () {
        Route::get('/manage','App\Http\Controllers\Backend\Brandcontroller@index')->name('brand.manage');
        Route::get('/create','App\Http\Controllers\Backend\Brandcontroller@create')->name('brand.create');
        Route::post('/store','App\Http\Controllers\Backend\Brandcontroller@store')->name('brand.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\Brandcontroller@edit')->name('brand.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\Brandcontroller@update')->name('brand.update');
        Route::get('/destroy/{id}','App\Http\Controllers\Backend\Brandcontroller@destroy')->name('brand.destroy');
    });
});