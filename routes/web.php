<?php


Route::get('/', 'PostsController@index')->name('posts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostsController');
