<?php

class ArtigosController extends Controller
{
   public function categorias(Request $request)
   {
      $artigos = $this->get_artigos();
      $categorias = $this->get_categorias();

      return $this->view('site.categorias', compact('artigos', 'categorias'));
   }

   public function get_categoria(Request $request)
   {
      $artigos = $this->get_artigos();
      $categorias = $this->get_categorias();

      return $this->view('site.categorias', compact('artigos', 'categorias'));
   }

   public function get_detalhes(Request $request)
   {
      return $this->view('site.details');
   }
}
