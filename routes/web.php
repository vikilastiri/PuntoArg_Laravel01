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
    return view('home');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addAttractions', function(){
  return view('addAttractions');
 });
 Route::get('attraction',function(){
   return view('attraction');
  });

  
Route::get('/attraction/{id}', 'AttractionController@show');
Route::get('/addAttractions', 'AttractionController@create');
Route::post('/addAttractions', 'AttractionController@store');
// Route::post('/deletepost', 'PostController@delete');
