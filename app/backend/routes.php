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

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

// Route::resource('categories', 'CategoriesController', array('only' => array('index', 'show')));

// Route::resource('subcategories', 'SubcategoriesController', array('only' => array('index', 'show')));

// Route::resource('brands', 'BrandsController', array('only' => array('index', 'show')));

// Route::resource('products', 'ProductsController', array('only' => array('index', 'show')));

Route::group(array('prefix' => 'api'), function()
{
    Route::resource('categories', 'CategoriesController');
    Route::resource('products', 'ProductsAPIController');
    Route::resource('brands', 'BrandsAPIController');
});