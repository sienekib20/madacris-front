<?php

namespace App\Controllers;

class Controller
{
   public function view($view, $data = [])
   {
      extract($data);
      if (str_contains($view, ".")) {
         $view = str_replace(".", "/", $view);
      }
      $buildFile = VIEW_PATH . "/$view.php";
      if (!file_exists($buildFile)) {
         // die("VIEW NOT FOUND");
         $this->view("404");

         return;
      }
      require $buildFile;
   }
}
