<?php

namespace App\Controllers;

use App\Controllers\Controller;

class AppController extends Controller
{
   public function contact()
   {
      return $this->view("site.pages.contactos");
   }

   public function terms()
   {
      return $this->view("site.pages.termos");
   }
   
   public function policy()
   {
      return $this->view("site.pages.politicas");
   }
   
   public function delivery()
   {
      return $this->view("site.pages.delivery");
   }
}
