<?php

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

Route::get('/home', 'HomeController@index');

Route::resource('categories', 'CategoryController');

Route::resource('markets', 'MarketController');

Route::resource('images', 'ImageController');

Route::resource('profiles', 'ProfileController');

Route::resource('users', 'UserController');

Route::get('users/{id}/manage', [ 'uses'=>'UserController@manage', 'as'=>'users.manage' ]);

Route::post('user/{id}/manage/role', [ 'uses'=>'UserController@update_role', 'as'=>'users.manage.role.update' ]);

Route::resource('cupons', 'CuponController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

// Socialite routes

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');

Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

Route::resource('payments', 'PaymentController');

Route::resource('products', 'ProductController');

Route::get('product/{id}/copy', [ 'uses' => 'ProductController@copy', 'as' => 'products.copy' ]);


Route::resource('accountTypes', 'AccountTypeController');

Route::resource('transactionTypes', 'TransactionTypeController');

Route::get('arto/user/detail', [ 'uses' => 'ArtoController@user_profile', 'as' => 'arto.detail.account' ]);

Route::get('arto/user/addfund', [ 'uses' => 'ArtoController@user_profile_add_fund', 'as' => 'arto.user.addfund' ]);
Route::post('arto/user/addfund', [ 'uses' => 'ArtoController@user_profile_add_fund_store', 'as' => 'arto.user.addfund.store' ]);


Route::resource('accounts', 'AccountController');