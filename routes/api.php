<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('employees/', 'EmployeeController@index');
Route::get('employees/{employee}', 'EmployeeController@show');
Route::post('employees/', 'EmployeeController@store');
Route::patch('employees/{employee}', 'EmployeeController@update');
Route::delete('employees/{employee}', 'EmployeeController@destroy');

Route::get('insurances/', 'InsuranceController@index');
Route::get('insurances/{insurance}', 'InsuranceController@show');
Route::post('insurances/', 'InsuranceController@store');
Route::patch('insurances/{insurance}', 'InsuranceController@update');
Route::delete('insurances/{insurance}', 'InsuranceController@destroy');
Route::get('insurances/{insurance}/employees/childrens', 'InsuranceController@Insurance');


Route::get('childrens/', 'ChildrenController@index');
Route::get('childrens/{children}', 'ChildrenController@show');
Route::post('childrens/', 'ChildrenController@store');
Route::patch('childrens/{children}', 'ChildrenController@update');
Route::delete('childrens/{children}', 'ChildrenController@destroy');