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
    return view('admin.dashboard');
});

Auth::routes();

Route::resource('admin/capability','Admin\CapabilityController');
Route::resource('admin/company','Admin\CompanyController',['except' => 'show']);
Route::resource('admin/country','Admin\CountryController');


