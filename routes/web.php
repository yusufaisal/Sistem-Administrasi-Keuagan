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

//Route::get('/laporan', function (){
//    return view('Fungsionalitas\Jurnal\index');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/penerimaan','PenerimaanController@index');
Route::get('/penerimaan/create','PenerimaanController@create');
Route::get('/penerimaan/{id}','PenerimaanController@show');
Route::post('/penerimaan','PenerimaanController@store');

Route::get('/belanja','BelanjaController@index');