<?php

class CheckoutController extends Controller
{
   public function get_carrinho()
   {
      return $this->view('site.cart');
   }
   
   public function checkout()
   {
      return $this->view('site.checkout');
   }
}
