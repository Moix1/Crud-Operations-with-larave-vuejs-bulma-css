<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/crud/{name}', function(){
	return redirect('/');
})->where('name','[A-Za-z]+');

Route::resource('crud', 'CrudController');
Route::post('getData', 'CrudController@getData');
