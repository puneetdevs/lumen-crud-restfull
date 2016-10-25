<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$app->get('user', 'UserController@get');
$app->get('user/{id}', 'UserController@get');
$app->post('user', 'UserController@create');
$app->put('user/{id}', 'UserController@update');
$app->delete('user/{id}', 'UserController@delete');

$app->get('/', function () use ($app) {
    return $app->version();
});
