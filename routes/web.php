<?php

Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {
    Route::get('show/{id}', 'UserController@show')->name('users.show');
    Route::get('edit/{id}', 'UserController@edit')->name('users.edit');
    Route::post('update/{id}', 'UserController@update')->name('users.update'); 
});

Auth::routes();

Route::get('/', function () {
    return view('top');
});

Route::get('/home', 'HomeController@index')->name('home');
