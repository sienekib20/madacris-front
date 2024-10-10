<?php

class AppController extends Controller
{
   public function index()
   {
      $this->view('site.index');
   }

   public function contacts()
   {
      $this->view('site.contacts');
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
