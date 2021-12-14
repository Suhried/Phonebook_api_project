<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->post('/register','RegistrationController@Register' );
    
$router->post('/login','LoginController@login' );

$router->post('/token',['middleware'=>'auth','uses'=>'LoginController@test']);

$router->post('/insert',['middleware'=>'auth','uses'=>'PhonebookController@insert']);
$router->post('/delete',['middleware'=>'auth','uses'=>'PhonebookController@delete']);
$router->post('/update',['middleware'=>'auth','uses'=>'PhonebookController@update']);
$router->post('/select',['middleware'=>'auth','uses'=>'PhonebookController@select']);

