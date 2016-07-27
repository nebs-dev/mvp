<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

// Provide controller methods with object instead of ID
//Route::model('products', 'Product');

Route::get('/', 'HomeController@index');

################
### PRODUCTS ###
################
Route::get('products/{product}', 'ProductsController@show');
Route::resource('products', 'ProductsController', ['except' => ['show']]);