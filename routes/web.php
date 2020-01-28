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

Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/about', 'PageController@about')->name('about');

Route::group(['middleware' => 'name:web'], function () {
    Route::get('/users', 'UserController@index')->name('users');
});

Route::get('/companies', 'CompanyController@index')->name('companies.index');
Route::get('/companies/create', 'CompanyController@create')->name('companies.create');
Route::get('/companies/{company}', 'CompanyController@show')->name('companies.show');
Route::get('/companies/{company}/edit', 'CompanyController@edit')->name('companies.edit');
Route::post('/companies', 'CompanyController@store')->name('companies.store');
Route::put('/companies/{company}', 'CompanyController@update')->name('companies.update');
Route::delete('/companies/{company}', 'CompanyController@destroy')->name('companies.destroy');

Route::resource('customers', 'CustomerController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
