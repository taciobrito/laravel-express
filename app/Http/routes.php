<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get( '/', 'PostsController@index' );

Route::get( 'admin', 'PostsAdminController@index' );




// Route::get( 'blog', 'PostsController@index' );

// Route::get( 'blog/post/{id?}', 'PostsController@post' );

// Route::get( 'blog/post/{id?}', 'PostsController@post' );