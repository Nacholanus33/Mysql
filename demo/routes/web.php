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
    return view('index');
});
Route::group(['middleware' => 'cart'], function(){
  Route::get('/products', 'ProductsController@index');
  Route::get('/products/create', 'ProductsController@create');
  Route::post('/products', 'ProductsController@store');
  Route::get('/products/{id}', 'ProductsController@show');
  Route::patch('/products/{id}', 'ProductsController@edit');
  Route::delete('/products/{id}', 'ProductsController@destroy');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', function () {
    return view('contact');
});
Route::get('/faqs', function () {
    return view('preguntas');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/carrito', function () {
    return view('carrito');
});
Route::post('/carrito', function () {
    return view('carrito');
});
Route::get('/perfil', function () {
    return view('perfil');
});
Route::post('/perfil', function () {
    return view('perfil');
});
Route::get('/admin/productos/add', function () {
    return view('produc');
});
Route::get('/brand', function () {
    return view('brand');
});
Route::get('/admin/brands/', 'BrandsController@index');
Route::get('/admin/brands/create','BrandsController@create');
Route::post('/admin/brands/', 'BrandsController@store');
Route::get('/admin/brands/{id}', 'BrandsController@show');
Route::post('/admin/brands/{id}','BrandsController@edit');
Route::patch('/admin/brands/{id}','BrandsController@update');
Route::delete('/admin/brands/{id}','BrandsController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
