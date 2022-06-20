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


 
//  index  Route functions  @Controllers 
Route::get('/', 'App\Http\Controllers\CategoriesControllers@index');
//  parent Route @Controllers
Route::get('index/{id}/parent', 'App\Http\Controllers\CategoriesControllers@parent');
//  ajax Route   Controllers @child 
Route::get('index/{id}/parent/{ajax_subcat}', 'App\Http\Controllers\CategoriesControllers@child');