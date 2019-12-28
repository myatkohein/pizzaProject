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

Route::view('/', 'welcome');
Auth::routes(['register'=>false]);

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/customer', 'Auth\LoginController@showCustomerLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('register.admin');
Route::get('/register/customer', 'Auth\RegisterController@showCustomerRegisterForm')->name('register.customer');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/customer', 'Auth\LoginController@customerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('register.admin');
Route::post('/register/customer', 'Auth\RegisterController@createCustomer')->name('register.customer');

Route::view('/home', 'home')->middleware('auth');

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/admin', 'AdminController@index');
    Route::get('/add_pizza','AdminController@add_pizza');
    Route::get('/pizzalist','AdminController@pizzalist');
    Route::get('/logout_admin','AdminController@logout_admin');
});
Route::group(['middleware' => 'auth:customer'], function () {
    Route::get('/customer', 'CustomerController@index');
});
// Route::view('/admin', 'admin')->middleware('auth');
// Route::view('/customer', 'customer')->middleware('auth');


