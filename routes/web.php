<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     $name = "Okatubo";
//     return view('welcome', compact('name') );
// })->name('welcome');

Route::get('/', 'MainController@index')->name('welcome');

Route::get('hot-offers', 'MainController@hot')->name('hot');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-product', 'ProductController@add')->name('product.add');
Route::post('/store-product', 'ProductController@store')->name('product.store');
Route::get('/all-products', 'ProductController@products')->name('products.all');

Route::get('/add-category', 'CategoryController@add')->name('category.add');
Route::post('/store-category', 'CategoryController@store')->name('category.store');


