<?php

require_once __DIR__ . "/generator.php";
require_once __DIR__ . '/anotation/ProcessRoute.php';


// Rota de Login
Route::post("/login", 'AuthController@login');
Route::get("/register", 'AuthController@register');

// App
Route::get('/', 'AppController@index');
Route::post("/users", '');
Route::get("/cart", 'CheckoutController@get_carrinho');
Route::get("/checkout", 'CheckoutController@checkout');
Route::get("/category/all", 'ArtigosController@categorias');
Route::get("/category/{id}", 'ArtigosController@get_categoria');

Route::get("/details/{id}", 'ArtigosController@get_detalhes');

// App
Route::get("/contacts", 'AppController@contacts');
Route::get("/services", 'AppController@services');
Route::get("/about", 'AppController@about');
