<?php

class ArtigosController extends Controller
{
   protected $allArtigos;

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
      $artigos = $this->get_artigos();
      $currentItems = [];
      $categoria = null;
      foreach ($artigos as $artigo) {
         if ($artigo['uuid'] == $request->id) {
            $currentItems = (object) $artigo;
            $categoria = $currentItems->categoria;
         }
      }
      $artigosRelacionados = [];
      foreach ($artigos as $article) {
         if ($categoria != null & $artigo['categoria'] == $categoria) {
            $artigosRelacionados[] = (object) $artigo;
         }
      }
      $arquivos = explode(',', $currentItems->arquivos);
      return $this->view('site.details', compact('currentItems', 'arquivos', 'artigosRelacionados'));
   }
}
