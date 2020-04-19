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

//Route::get('/', function () {
  //  return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','AdminController@index');

//company
Route::get('create_companies','AdminController@create_companies');
Route::post('storecompanies', 'AdminController@storecompanies');
Route::get('companies/update_companies/{id}', 'AdminController@edit_companies');
Route::post('companies/update_companies/{id}', 'AdminController@update_companies');
Route::get('/companies/delete_companies/{id}', 'AdminController@destroy_companies');


//employee
Route::get('companies/employee/{id}', 'AdminController@view_employee');
Route::get('companies/create_employee/{company_id}', 'AdminController@create_employee');
Route::post('storeemployee', 'AdminController@storeemployee');
Route::get('/companies/employee/delete_employee/{id}', 'AdminController@destroy_employee');
Route::get('/companies/employee/edit_employee/{id}', 'AdminController@edit_employee');
Route::post('/companies/employee/edit_employee/{id}', 'AdminController@update_employee');

Route::get('/companies/employee/read_employee/{id}', 'AdminController@read_employee');