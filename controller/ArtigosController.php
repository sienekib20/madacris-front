<?php

class ArtigosController extends Controller
{
   public function categorias()
   {
      return $this->view('site.categorias');
   }

   public function get_categoria(Request $request)
   {
      return $this->view('site.categorias');
   }

   public function get_detalhes(Request $request)
   {
      return $this->view('site.details');
   }
}
