<?php

return [

   "GET" => [
      "/" => "HomeController@index",
      "/details/{id}" => "ArtigoController@detalhes",
      "/category" => "ArtigoController@categorias",
      "/cart" => "CarrinhoController@index",
      "/checkout" => "CheckoutController@index",


      // App
      "/contact" => "AppController@contact",
      "/terms" => "AppController@terms",
      "/policy" => "AppController@policy",
      "/delivery" => "AppController@delivery",
   ],

   "POST" => []


];
