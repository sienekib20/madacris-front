<?php

namespace App\Controllers;

use App\Controllers\Controller;

class CarrinhoController extends Controller
{
   public function index()
   {
      return $this->view("site.pages.carrinho");
   }
}