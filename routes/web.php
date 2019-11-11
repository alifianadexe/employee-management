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

Route::get('/', 'EmployeeController@index');

Route::get('/form', 'EmployeeController@form');
Route::post('/form/input', 'EmployeeController@input');
Route::post('/form/update', 'EmployeeController@update');

Route::get('/detail/{emp_no}', 'EmployeeController@detail');
Route::get('/edit/{emp_no}', 'EmployeeController@edit');
Route::get('/delete/{emp_no}', 'EmployeeController@delete');

Route::get('/login', function () {
    return view('login');
});


