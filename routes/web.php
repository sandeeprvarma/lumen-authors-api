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

/*$router->get('/createauthors', function () use ($router) {
    $authors = App\Authors::create(['name'=>'test2', 'email'=>'test2@test.com', 'github'=>'test2', 'twitter'=>'test2', 'location'=>'test2', 'latest_article_published'=>'test2']);
    $authors->fill(['name'=>'test2', 'email'=>'test2@test.com', 'github'=>'test2', 'twitter'=>'test2', 'location'=>'test2', 'latest_article_published'=>'test2']);
    $authors->fill(['name'=>'test3', 'email'=>'test3@test.com', 'github'=>'test3', 'twitter'=>'test3', 'location'=>'test3', 'latest_article_published'=>'test3']);
});
*/
$router->group(['prefix' => 'api', 'middleware' => 'auth'], function () use ($router) {
  $router->get('authors',  ['uses' => 'AuthorController@showAllAuthors']);

  $router->get('authors/{id}', ['uses' => 'AuthorController@showOneAuthor']);

  $router->post('authors', ['uses' => 'AuthorController@create']);

  $router->delete('authors/{id}', ['uses' => 'AuthorController@delete']);

  $router->put('authors/{id}', ['uses' => 'AuthorController@update']);
});