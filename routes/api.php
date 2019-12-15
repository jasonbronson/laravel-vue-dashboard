<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('admin')->group(function () {
    Route::get('users', 'Admin\UsersController@getAll');
    Route::post('user', 'Admin\UsersController@create');
    Route::patch('user', 'Admin\UsersController@update');
});

Route::middleware('auth:api')->group(function () {
    Route::get('auth', 'Admin\UsersController@getAll');
});
