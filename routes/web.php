<?php

Route::get('/', 'HomeController');

Route::resources([
    'photo'     => 'PhotoController',
    'video'     => 'VideoController',
    'comment'   => 'CommentController'
]);