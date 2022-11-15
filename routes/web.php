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



Route::get('/', 'InvestorController@index');
Route::get('/investors/create', 'InvestorController@create');
Route::post('/investors/create', 'InvestorController@store');


Route::get('/edit-inv/{investor}','InvestorController@edit');
Route::put('/edit-inv/{investor}', 'InvestorController@update');
Route::get('/delete-confirm/{investor}', 'InvestorController@confirm');
Route::delete('/delete-inv/{investor}', 'InvestorController@delete');

