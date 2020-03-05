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
Route::get('main','FrontendController@Main')->name('main');
Route::get('services','FrontendController@Services')->name('services');
Route::get('abouts','FrontendController@Abouts')->name('abouts');
Route::get('contacts','FrontendController@Contacts')->name('contacts');
Route::get('fcars/{id}','FrontendController@Fcars')->name('fcars');
Route::get('details/{id}/{catid}','FrontendController@details')->name('details');
Route::resource('drivers','DriverController');
Route::resource('cars','CarController');
Route::resource('categories','CategoryController');
Route::post('/rent','RentController@rents');
Route::get('/backend/cars/{id}','CarController@getData');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/allrent','RentController@allrent')->name('allrent');