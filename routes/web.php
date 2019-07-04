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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
// Route::get('/home', 'HomeController@showAttraction');

Route::get('/addAttractions', function(){
  return view('addAttractions');
 });
 Route::get('attractions',function(){
   return view('attractions');
  });
  Route::get('/attractions', 'AttractionController@index');


Route::get('/attractions/{id}', 'AttractionController@show');
Route::get('/addAttractions', 'AttractionController@create');
Route::post('/addAttractions', 'AttractionController@store');
// Route::post('/deletepost', 'PostController@delete');

// Rutas para vouchers y addVoucher

 Route::get('vouchers',function(){
   return view('vouchers');
  });
  Route::get('/vouchers', 'VoucherController@index');


Route::get('/vouchers/{id}', 'VoucherController@show');

Route::get('/addVoucher', 'VoucherController@create');
//
Route::post('/addVoucher', 'VoucherController@store');

// Route::voucher('/deletevoucher', 'VoucherController@delete');
