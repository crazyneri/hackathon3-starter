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

// Landing page
Route::get('/', 'LandingController@index');

// Show individual animals

Route::get('/animals', 'AnimalController@index');
Route::get('/animals/{id}', 'AnimalController@show');
Route::post('/animals', 'AnimalController@search');
Route::get('/animals/{id}/edit', 'AnimalController@edit');
Route::put('/animals/{id}', 'AnimalController@update');

// Show individual owners
Route::get('/owners', 'OwnerController@index');



