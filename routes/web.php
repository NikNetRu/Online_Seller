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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/logout', function () {
                                    Auth::logout();
                                    return view('welcome');}
           )->name('logout');
//Генерация страниц
Route::get('userPage', 'UserController@generateUserPage')->name('userPage');
Route::get('productManager', 'ProductController@generateProductManagerPage')->name('productManager');
//изменение данных
Route::post('changePersonalData', 'UserController@changePersonalData')->name('changePersonalData');
Route::post('addCategory', 'ProductController@addCategory')->name('addCategory');
Route::post('deleteCategory', 'ProductController@deleteCategory')->name('deleteCategory');
Route::post('addProduct', 'ProductController@addProduct')->name('addProduct');
Route::post('deleteProduct', 'ProductController@deleteProduct')->name('deleteProduct');
Route::post('setDiscount', 'ProductController@setDiscount')->name('setDiscount');