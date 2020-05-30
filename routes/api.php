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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('test', function () {
    // return public_path() . '\images\users';
    return 'test api';
});

Route::prefix('v1')->group(function () {

    // Authentication
    Route::post('login', 'AuthController@login');
    // Route::post('register', 'AuthController@register');




    Route::middleware('auth:api')->group(function () {
        // Data User        
        Route::get('user/{id}', 'UserController@singleData');
        Route::get('users', 'UserController@allData');
        Route::get('couriers', 'UserController@courierData');

        //Data Product
        Route::get('products', 'ProductController@index');
        
        //Data Customer
        Route::get('customers', 'CustomerController@index');

        //Data Transaksi
        Route::get('transactions', 'TransactionController@index');

        // Data Outlet
        Route::get('outlets', 'OutletController@allData');
        Route::get('outlet/{id}', 'OutletController@singleData');


        Route::post('logout', 'AuthController@logout');
    });
});
