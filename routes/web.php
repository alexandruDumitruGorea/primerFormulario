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

Route::get('/', 'NavController@inicio');

Route::get('inicio/', 'NavController@inicio');

Route::get('login/', 'LoginFormValidationController@create');

Route::post('tryLogin/{mensaje?}', 'LoginFormValidationController@store');

Route::get('successUser/{usuario?}', 'FormController@success');

Route::get('forgotten/', 'FormController@forgotten');

Route::post('forgottenPassword/', 'FormController@forgottenPassword');
