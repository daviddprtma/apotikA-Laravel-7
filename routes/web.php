<?php

use App\Http\Controllers\MedicineController;
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

Route::resource('transactions', 'TransactionController');

Route::resource('buyers', 'BuyerController');

Route::get('coba1', 'MedicineController@coba1');

Route::get('coba2', 'MedicineController@coba2');

Route::get('report/listmedicine/{id}','CategoryController@showlist');

Route::get('/conquer', function () {
    return view('layouts.conquer');
});

Route::get('report/obattermahal','MedicineController@obattermahal');
Route::post('/medicines/showInfo','MedicineController@showInfo')->name('medicines.showInfo');

Route::post('transactions/showDataAjax','TransactionController@showAjax')->name('transactions.showAjax');
Route::get('transactions/showDataAjax2/{id}','TransactionController@showAjax2')->name('transactions.showAjax2');





