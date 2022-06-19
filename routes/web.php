<?php

use App\Http\Controllers\MedicineController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/','MedicineController@front_index');
Route::get('cart','MedicineController@cart');
Route::get('add-to-cart/{id}','MedicineController@addToCart')
->middleware('auth');
Route::get('/submit-checkout','TransactionController@submit_front')
->name('submitcheckout')->middleware(['auth']);
Route::get('cetakpemesanan/{id}', 'TransactionController@print_detail')
-> name('cetakpesan') -> middleware('auth');


Route::get('/products', function () {
    return view('products');
});

Route::get('/medicines', function () {
    return view('medicines');
});

Route::resource('products', 'ProductController')->middleware('auth');

Route::resource('medicines', 'MedicineController')->middleware('auth');

Route::resource('categories', 'CategoryController');

Route::resource('transactions', 'TransactionController');

Route::resource('buyers', 'BuyerController');

Route::resource('suppliers', 'SupplierController')->middleware('auth');

Route::get('coba1', 'MedicineController@coba1');

Route::get('coba2', 'MedicineController@coba2');

Route::get('report/listmedicine/{id}','CategoryController@showlist');

Route::get('/conquer', function () {
    return view('layouts.conquer');
});

Route::get('report/obattermahal','MedicineController@obattermahal');
Route::get('report/customerbanyakbeli','TransactionController@mostbuycustomer');
Route::get('report/obatbanyakbeli','MedicineController@mostbuymedicine');
Route::post('/medicines/showInfo','MedicineController@showInfo')->name('medicines.showInfo');

Route::post('transactions/showDataAjax','TransactionController@showAjax')->name('transactions.showAjax');
Route::get('transactions/showDataAjax2/{id}','TransactionController@showAjax2')->name('transactions.showAjax2');

Route::post('/supplier/getEditForm','SupplierController@getEditForm')->name('supplier.getEditForm')
->middleware('auth');

Route::post('/supplier/getEditForm2','SupplierController@getEditForm2')->name('supplier.getEditForm2')
->middleware('auth');

Route::post('/supplier/saveData','SupplierController@saveData')->name('supplier.saveData')
->middleware('auth');

Route::post('/supplier/deleteData','SupplierController@deleteData')->name('supplier.deleteData')
->middleware('auth');

Route::post('/product/getEditProduct','ProductController@getEditProduct')
->name('product.getEditProduct')->middleware('auth');

Route::post('/product/getEditProduct2','ProductController@getEditProduct2')
->name('product.getEditProduct2')->middleware('auth');

Route::post('/product/saveData','ProductController@saveData')
->name('product.saveData')->middleware('auth');

Route::post('/product/deleteData','ProductController@deleteData')
->name('product.deleteData')->middleware('auth');

Route::post('/product/changeFoto','ProductController@changeFoto')
->name('product.changeFoto')->middleware('auth');

Route::post('/supplier/saveDataField','SupplierController@saveDataField')->name('supplier.saveDataField')
->middleware('auth');

Route::post('/supplier/changeLogo','SupplierController@changeLogo')->name('supplier.changeLogo')
->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
