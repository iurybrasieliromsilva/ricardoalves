<?php

Route::get('/', 'HomeController')->name('home');

Route::resources([
    'photo'     => 'PhotoController',
    'video'     => 'VideoController',
    'comment'   => 'CommentController'
]);

Route::prefix('auth')->group(function (){
    Route::get('/login', 'AuthController@login')->name('auth.login');
    Route::post('/authenticate', 'AuthController@authenticate')->name('auth.authenticate');

    Route::get('/logout', 'AuthController@logout')->name('auth.logout');

    Route::get('/register', 'AuthController@register')->name('auth.register');
    Route::post('/create', 'AuthController@create')->name('auth.create');
});