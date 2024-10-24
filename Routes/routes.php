<?php

require_once __DIR__ . "/generator.php";
require_once __DIR__ . '/anotation/ProcessRoute.php';


// Rota de Login
Route::post("/login", 'AuthController@login');
Route::post("/set-user", 'AuthController@set');
Route::post("/logout", 'AuthController@rem');


Route::get("/register", 'AuthController@register');


// App
Route::get('/', 'AppController@index');
Route::post("/users", '');
Route::get("/cart", 'CheckoutController@get_carrinho');
Route::get("/checkout", 'CheckoutController@checkout');
Route::get("/category/all", 'ArtigosController@categorias');
Route::get("/category/{id}", 'ArtigosController@get_categoria');

Route::get("/artigo/details", 'ArtigosController@get_detalhes');

// App
Route::get("/contacts", 'AppController@contacts');
Route::get("/services", 'AppController@services');
Route::get("/about", 'AppController@about');
Route::get('/faqs', 'AppController@faqs');
Route::get('/terms', 'AppController@terms');


// Workspace

Route::privateRoute(function () {
   Route::get('/workspace/{id}/pedidos', 'WorkspaceController@index');
   Route::get('/workspace/{id}/conta', 'WorkspaceController@index');
   Route::get('/workspace/{id}/comentarios', 'WorkspaceController@index');
});



Route::get('/shop', 'WorkspaceController@getPdf');

# Endpoints
# baseURL/pedido/recibo?referencia=#ffdafa -> method POST
# baseURL/pedido/recibo?referencia=#ffdafa -> method POST -> pegar todos os pedidos

# baseURL//view/artigos/pedidos?identificador_id=4 -> POST identificador_id = idUsuarioLogado