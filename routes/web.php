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

 Route::get("pizzas/data", "PizzaController@getPizzas")->name("pizzas.data");

 Route::get("orders/data", "OrderController@getOrders")->name("orders.data");

// Route::resource("pizzalists", "PizzaController")->middleware("auth");

Route::view('/home', 'home')->middleware('auth');



Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/admin', 'GoogleChartController@index');
    Route::get('/logout_admin','AdminController@logout_admin');
    Route::resource('/pizzas','PizzaController');
});
Route::group(['middleware' => 'auth:customer'], function () {
    Route::get('/customer', 'CustomerController@index');
    Route::get('/logout_customer','CustomerController@logout');
   
});

Route::resource('/orders','OrderController');
Route::get('orders/{id}', [
    'middleware' => 'auth',
    'uses' => 'OrderController@create'
]);


    

    


// Route::view('/admin', 'admin')->middleware('auth');
// Route::view('/customer', 'customer')->middleware('auth');


