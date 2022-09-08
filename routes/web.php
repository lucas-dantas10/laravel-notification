<?php

$this->post('comment', 'Posts\CommentController@store')->name('comment.store');
Route::resource('posts', 'Posts\PostController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
