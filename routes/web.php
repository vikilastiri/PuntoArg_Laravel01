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
// Rutas GUEST

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('attractions',function(){
 return view('attractions');
});
Route::get('/attractions', 'AttractionController@index');
Route::get('/attractions/buscar', 'AttractionController@search');
Route::get('/attractions/{id}', 'AttractionController@show');
Route::get('faq',function(){
  return view('faq');
 });



Route::get('vouchers',function(){
 return view('vouchers');
});
Route::get('/vouchers', 'VoucherController@index');
Route::get('/vouchers/{id}', 'VoucherController@show');

// RUTAS ADMIN
Route::group(['middleware'=>'checkAdmin'],function(){
  Route::get('/addAttractions', function(){
    return view('addAttractions');
   });
  Route::get('/addAttractions', 'AttractionController@create');
  Route::post('/addAttractions', 'AttractionController@store');
  Route::get('/addVoucher', 'VoucherController@create');
  Route::post('/addVoucher', 'VoucherController@store');
});



//Rutas para carrito
//
Route::get('/vouchers/{id}/addtocart', 'CartController@store')->middleware('auth');
Route::get('/cart', 'CartController@index')->middleware('auth');
Route::post('/cart/{id}', 'CartController@destroy')->middleware('auth');
Route::get('/cart/close', 'CartController@closeCart')->middleware('auth');
Route::get('/history', 'CartController@history')->middleware('auth');
 // Route::get('/thanks', function(){
 //   view('thanks')->middleware('auth');
 // };
