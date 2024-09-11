<?php

namespace Sienekib;

class Core
{
   private $applicationDirectory;

   public function __construct($dir)
   {
      $dir = explode(DIRECTORY_SEPARATOR, $dir);

      $this->applicationDirectory = end($dir);
   }

   public function dispatch($routes)
   {
      $listMethods = $routes[$this->requestMethod()] ?? [];
      if (empty($listMethods)) {
         die("Invalid Method");
      }
      $validRoute = false;

      foreach ($listMethods as $path => $action) {
         $path = preg_replace('/\/{(\w+)}/', '/(?<$1>.*?)', $path);
         $path = "#^" . $path . "$#";
      

         if (preg_match($path, $this->getUri(), $matches)) {
            $matches = array_slice($matches, 1);
            $matches = (object) $matches;
            [$controller, $method] = explode("@", $action);
            $generatedController = "$controller.php";
            // $controller = __DIR__ . "/../app/controllers/$controller.php";
            $controller = "App\\Controllers\\$controller";
            if (!class_exists($controller)) {
               die("Controller NOT FOUND");
            }
            $controller = new $controller();

            if (!method_exists($controller, $method)) {
               die("Method NOT FOUND");
            }
            $validRoute = true;
            return $controller->$method($matches);
         }
      }

      if(!$validRoute) {
         die ("INVALID ROUTE");
      }


      $uri = $this->getUri();

      echo '<pre>';
      print_r($uri);
      exit;
   }

   private function getUri()
   {
      return str_replace(
         $this->applicationDirectory,
         "",
         ltrim($_SERVER["REQUEST_URI"], "/")
      );
   }

   private function requestMethod()
   {
      return $_SERVER["REQUEST_METHOD"] ?? "GET";
   }
}
