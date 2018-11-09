<?php

/**
 * Home
 */
Route::view('/', 'welcome');

Route::redirect('/crud/{name}', '/')->where('name','[A-Za-z]+');

/**
 * Crud Operations
 */
Route::resource('crud', 'CrudController');
Route::post('getData', 'CrudController@getData');
