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

Route::resource('category', 'CategoriesController', array('only' => array('index', 'show')));

Route::resource('subcategory', 'SubcategoriesController', array('only' => array('index', 'show')));

Route::resource('brand', 'BrandsController', array('only' => array('index', 'show')));

Route::resource('product', 'ProductsController', array('only' => array('index', 'show')));