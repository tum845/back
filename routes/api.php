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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('categories', 'CategoryAPIController');

Route::resource('markets', 'MarketAPIController');

Route::resource('profiles', 'ProfileAPIController');

Route::resource('users', 'UserAPIController');

Route::resource('cupons', 'CuponAPIController');

Route::post('auth/register', 'UserAPIController@register');
Route::post('auth/login', 'UserAPIController@login');