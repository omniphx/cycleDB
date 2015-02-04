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
Route::get('/loader', array('as' => 'loader', 'uses' => 'HomeController@loader'));
Route::post('/store', array('as' => 'store', 'uses' => 'HomeController@store'));

Route::group(array('prefix' => 'api'), function()
{
    Route::resource('categories', 'CategoriesController');
    Route::resource('subcategories', 'SubcategoriesController');
    Route::resource('manufacturers', 'ManufacturersController');
    Route::resource('bikes', 'BikesController');
    Route::resource('components', 'ComponentsController');
});

Route::get('{any}', 'HomeController@index')->where('any', '.*');

Route::get('/test', function(){
    return CsvHandler::toArray('test.csv');
});