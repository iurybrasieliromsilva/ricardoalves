<?php

Route::get('/', 'HomeController');

Route::resources([
    'photo'     => 'PhotoController',
    'video'     => 'VideoController',
    'comment'   => 'CommentController'
]);

Route::prefix('auth')->group(function (){
    Route::get('/register', 'AuthController@register')->name('auth.register');
    Route::post('/create', 'AuthController@create')->name('auth.create');
});