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
Route::get('/productos', function () {
    return view('productos');
});
Route::get('/productos/{id}', function ($id) {
  $vac = compact('id');
    return view('productos',$vac);
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::post('/contacto', function () {
    return view('contacto');
});
Route::get('/preguntas', function () {
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
