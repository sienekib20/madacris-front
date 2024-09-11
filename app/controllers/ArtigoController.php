<?php

namespace App\Controllers;

use App\Controllers\Controller;

class ArtigoController extends Controller
{
   public function detalhes($request)
   {

      return $this->view("site.pages.detalhe-artigo");
   }

   public function categorias()
   {
      return $this->view("site.pages.categoria");
   }
}