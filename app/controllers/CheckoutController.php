<?php

namespace App\Controllers;

use App\Controllers\Controller;

class CheckoutController extends Controller
{
   public function index()
   {
      return $this->view("site.pages.checkout");
   }
}