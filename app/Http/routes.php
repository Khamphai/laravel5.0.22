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


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('hello', function () {
    return 'Hello Laravel';
});

Route::get('welcome/hello', 'WelcomeController@hello');

Route::get('welcome/page/{id}/{title?}',
    'WelcomeController@page')
    ->where(['id' => '[0-9]+', 'title' => '[a-zA-Z]+']);

Route::controller('welcome', 'WelcomeController');

Route::get('hii', 'HelloController@index');


Route::resource('articles', 'ArticlesController');


Route::post('hello/store', function () {
    //
});

Route::put('hello/update', function () {
    //
});

Route::patch('hello/update', function () {
    //
});

Route::delete('hello/destroy', function () {
    //
});

//Multiple

Route::match(['get', 'post'], 'hello', function () {
    //
});

Route::any('hello/edit', function () {
    //
});