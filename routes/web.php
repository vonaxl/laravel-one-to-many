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

// Route::get('/employee', 'EmployeeController@index');
Route::resource('/employee', 'EmployeeController');
// Route::resource('/task', 'TaskController');
