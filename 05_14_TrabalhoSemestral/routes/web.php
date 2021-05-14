<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');

Route::get('/addresses',['as' => 'addresses.index',  'uses' => 'AddressesController@index']) ;

/**
     * Addresses
     */

    Route::get('/addresses',                      ['as' => 'addresses.index',  'uses' => 'AddressesController@index']) ;
    Route::get('/addresses/{address_id}/delete',  ['as' => 'addresses.delete', 'uses' => 'AddressesController@delete']);
    Route::get('/addresses/{address_id}/edit',    ['as' => 'addresses.edit',   'uses' => 'AddressesController@edit'])  ;
    Route::get('/addresses/{address_id}/show',    ['as' => 'addresses.show',   'uses' => 'AddressesController@show'])  ;
    Route::post('/addresses/{address_id}/update', ['as' => 'addresses.update', 'uses' => 'AddressesController@update']);
    Route::post('/addresses',                     ['as' => 'addresses.store',  'uses' => 'AddressesController@store']) ;

    /**
     * CITIES
     */

    Route::get('/cities',                   ['as' => 'cities.index',  'uses' => 'CitiesController@index']) ;
    Route::get('/cities/{city_id}/delete',  ['as' => 'cities.delete', 'uses' => 'CitiesController@delete']);
    Route::get('/cities/{city_id}/edit',    ['as' => 'cities.edit',   'uses' => 'CitiesController@edit'])  ;
    Route::get('/cities/{city_id}/show',    ['as' => 'cities.show',   'uses' => 'CitiesController@show'])  ;
    Route::post('/cities',                  ['as' => 'cities.store',  'uses' => 'CitiesController@store']) ;
    Route::post('/cities/{city_id}/update', ['as' => 'cities.update', 'uses' => 'CitiesController@update']);

    /**
     * PRODUCT
     */

    Route::get('/products',                      ['as' => 'products.index',  'uses' => 'ProductsController@index']) ;
    Route::get('/products/{product_id}/delete',  ['as' => 'products.delete', 'uses' => 'ProductsController@delete']);
    Route::get('/products/{product_id}/edit',    ['as' => 'products.edit',   'uses' => 'ProductsController@edit'])  ;
    Route::get('/products/{product_id}/show',    ['as' => 'products.show',   'uses' => 'ProductsController@show'])  ;
    Route::post('/products',                     ['as' => 'products.store',  'uses' => 'ProductsController@store']) ;
    Route::post('/products/{product_id}/update', ['as' => 'products.update', 'uses' => 'ProductsController@update']);

    /**
     * PRODUCT TYPES
     */

    Route::get('/productTypes',                          ['as' => 'productTypes.index',  'uses' => 'ProductTypesController@index']) ;
    Route::get('/productTypes/{productType_id}/delete',  ['as' => 'productTypes.delete', 'uses' => 'ProductTypesController@delete']);
    Route::get('/productTypes/{productType_id}/edit',    ['as' => 'productTypes.edit',   'uses' => 'ProductTypesController@edit'])  ;
    Route::get('/productTypes/{productType_id}/show',    ['as' => 'productTypes.show',   'uses' => 'ProductTypesController@show'])  ;
    Route::post('/productTypes',                         ['as' => 'productTypes.store',  'uses' => 'ProductTypesController@store']) ;
    Route::post('/productTypes/{productType_id}/update', ['as' => 'productTypes.update', 'uses' => 'ProductTypesController@update']);

    /**
     * STATES
     */

    Route::get('/states',                    ['as' => 'states.index',  'uses' => 'StatesController@index']) ;
    Route::get('/states/{state_id}/delete',  ['as' => 'states.delete', 'uses' => 'StatesController@delete']);
    Route::get('/states/{state_id}/edit',    ['as' => 'states.edit',   'uses' => 'StatesController@edit'])  ;
    Route::get('/states/{state_id}/show',    ['as' => 'states.show',   'uses' => 'StatesController@show'])  ;
    Route::post('/states',                   ['as' => 'states.store',  'uses' => 'StatesController@store']) ;
    Route::post('/states/{state_id}/update', ['as' => 'states.update', 'uses' => 'StatesController@update']);
