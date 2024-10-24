<?php

class AppController extends Controller
{
   public function index(Request $request)
   {
      $artigos = $this->get_artigos();
      $categorias = $this->get_categorias();

      // var_dump($artigos);exit;

      // echo '<pre>'; print_r($_SESSION['loggedIn']);exit;

      $this->view('site.index', compact('artigos', 'categorias'));
   }

   public function contacts()
   {
      $this->view('site.contacts');
   }
   
   public function faqs()
   {
      $this->view('site.faqs');
   }
   
   public function terms()
   {
      $this->view('site.terms');
   }

   public function services()
   {
      $this->view('site.services');
   }

   public function about()
   {
      $this->view('site.about');
   }
}
