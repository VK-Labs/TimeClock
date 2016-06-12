<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('main');
//});
Route::get('/', 'MainController@index');
Route::post('main', 'MainController@cookie');
Route::resource('organizations', 'OrganizationsController');
Route::resource('stores', 'StoresController');
Route::resource('employees', 'EmployeesController');
Route::auth();

Route::get('/home', 'HomeController@index');
