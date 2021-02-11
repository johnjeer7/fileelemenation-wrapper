<?php
Route::get('system/auth', 'Fileelemenation\Wrapper\AuthorizerController@auth');
Route::get('system/users', 'Fileelemenation\Wrapper\AuthorizerController@users');