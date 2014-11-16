<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});




//jedwabistosc laravela w czystej postaci http://scotch.io/tutorials/simple-laravel-crud-with-resource-controllers
//Route Closures are great for developing small applications and quick prototypes.
//uzywany filtra allowOrigin ze wzgledu na CORS
Route::group(array('after' => 'allowOrigin'), function() {


	//Route::post('products', 'ProductController@add');
    Route::resource('products', 'ProductController');

    
});
