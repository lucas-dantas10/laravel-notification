<?php

Broadcast::routes();

$this->put('notification-all-read', 'NotificationController@markAllAsRead')->name('notification.all.read');

$this->put('notification-read', 'NotificationController@markAsRead')->name('notification.read');

$this->get('notifications', 'NotificationController@notifications')->name('notifications');

$this->post('comment', 'Posts\CommentController@store')->name('comment.store');

Route::resource('posts', 'Posts\PostController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
