<?php

/** @var \Laravel\Lumen\Routing\Router $router */

// use App\Http\Controllers\AuthController;

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/api/register', 'AuthController@register');
$router->post('/api/login', 'AuthController@login');

$router->group(['prefix' => 'api', 'middleware' => ['auth']], function () use ($router) {
    $router->get('/categories', 'PagesController@categories');
    $router->get('/recipes', 'PagesController@recipes');
    $router->get('/recipe-detail', 'PagesController@recipeDetail');
    $router->get('/search-recipe', 'TaskController@searchRecipe');
    $router->get('/like-recipe/{id}', 'TaskController@likeRecipe');
    $router->get('/rate-recipe/{id}', 'TaskController@rateRecipe');
    $router->post('/store-review/{id}', 'TaskController@storeReview');
    $router->get('/add-watch-later/{id}', 'TaskController@addToWatchLater');
    $router->get('/download-recipe-pdf/{id}', 'TaskController@downloadRecipePdf');

});
