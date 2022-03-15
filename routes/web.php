<?php

use Illuminate\Support\Facades\Route;

use function PHPSTORM_META\type;

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

Route::get('/products', function () {
    return view('products');
});

Route::get('/medicines', function () {
    return view('medicines');
});

Route::resource('products', 'ProductController');

Route::resource('medicines', 'MedicineController');

Route::resource('categories', 'CategoryController');

Route::get('coba1', 'MedicineController@coba1');

Route::get('coba2', 'MedicineController@coba2');

Route::get('report/listmedicine/{id}','CategoryController@showlist');

Route::get('/conquer', function () {
    return view('layouts.conquer');
});





