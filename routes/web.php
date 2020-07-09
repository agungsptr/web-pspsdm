<?php

use Illuminate\Routing\RouteGroup;
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
Auth::routes();

Route::get('/', function () {
    return view('home.index');
});

// disable route '/register'
Route::match(["GET", "POST"], "/register", function(){
    return abort(404);
});

Route::group(['prefix' => 'admin'], function () {
    Route::resource('user', 'UserController');
    Route::resource('category', 'CategoryController');
});


Route::group(['prefix' => 'getdata'], function () {
    Route::get('user', 'DataTableController@getUser')->name('getdata.user');
    Route::get('category', 'DataTableController@getCategory')->name('getdata.category');
});
