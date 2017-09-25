<?php

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
    return view('welcome');
});

Route::get('index', [
    'as'    => 'trang-chu',
    'uses'  => 'PageController@index',
]);

Route::get('product', [
    'as'    =>  'product',
    'uses'  =>  'ProductController@index',
]);

Route::get('productType/{type}', [
    'as'    =>  'danh-sach',
    'uses'  =>  'ProductController@getProductType',
]);

Route::get('about', [
    'as'    =>  'gioi-thieu',
    'uses'  =>  'PageController@getAbout',
]);

Route::get('contact', [
    'as'    =>  'lien-he',
    'uses'  =>  'PageController@getContact',
]);

Route::get('product-detail/{id}', [
    'as'    =>  'chi-tiet-san-pham',
    'uses'  =>  'ProductController@detailProduct',
]);

Route::get('add-to-cart/{id}',[
    'as' => 'them-gio-hang',
    'uses' => 'CartController@addToCart',
]);