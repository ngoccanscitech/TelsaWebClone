<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('categories', 'CategoryController@index')->name('index');
Route::post('add/category', 'CategoryController@store')->name('store');
Route::get('delete/category/{id}', 'CategoryController@destroy')->name('destroy');
Route::post('update/category/{id}', 'CategoryController@update')->name('update');

Route::get('products', 'ProductController@index')->name('index');
Route::post('add/product', 'ProductController@store')->name('store');
Route::post('update/product/{id}', 'ProductController@update')->name('update');
Route::get('latestProducts','ProductController@latestProducts')->name('latestProducts');

Route::post('add/cart', 'CartController@store')->name('store');
Route::get('customers', 'CartController@index')->name('index');
Route::get('customerDetail/{id}', 'CartController@show')->name('show');
