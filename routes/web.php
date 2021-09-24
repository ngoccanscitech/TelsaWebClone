<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


Route::group(['prefix'=>'admin'], function(){
    Route::post('login', [AuthController::class,'login'])->name('login');
    Route::post('logout', [AuthController::class,'logout'])->name('logout');
});



Route::get('/admin/{any?}',function () {
    return view('welcome'); 
})->middleware('auth');
Route::get('{any?}', function () {
    return view('welcome');
});
//Route::get('/home', 'HomeController@index')->name('home');

