<?php

return [

   "GET" => [
      "/" => "HomeController@index",
      "/details/{id}" => "ArtigoController@detalhes",
      "/category" => "ArtigoController@categorias",
      "/cart" => "CarrinhoController@index",
      "/checkout" => "CheckoutController@index"
   ],

   "POST" => []


];
