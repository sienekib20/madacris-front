<?php

require __DIR__ . "/anotation/ProcessRoute.php";
require __DIR__ . "/http/Request.php";
require __DIR__ . "/sessions/SessionManager.php";


if (!function_exists('process')) {
   function process()
   {
      static $instance = null;
      if ($instance == null) {
         $instance = new Route();
      }
      return ($instance);
   }
}



if (!function_exists('abs_path')) {
   function abs_path()
   {
      return ROOT_DIR . "/";
   }
}

if (!function_exists('view_path')) {
   function view_path()
   {
      return abs_path() . 'view/';
   }
}


if (!function_exists('storage_path')) {
   function storage_path()
   {
      return abs_path() . 'assets/storage/';
   }
}



if (!function_exists("url")) {
   function url($route, $params = null)
   {
      if ($route == "/") {
         return ROOT;
      }

      $route = str_replace(".", "/", $route);
      return ROOT . "/" . $route;
   }
}

if (!function_exists("asset")) {
   function asset($arquivo)
   {
      $hasAssetDir = explode("/", $arquivo)[0];
      $assetRoot = ROOT . "/";
      $assetRoot .= $hasAssetDir == "assets" ? $arquivo : "assets/$arquivo";  
      $assetRoot .= "?v=" . time();
      return $assetRoot;
   }
}


if (!function_exists("request")) {
   function request()
   {
      return (new Request());
   }
}

if (!function_exists('view_component')) {
   function view_component($view, $params = []) 
   {
      (new Controller())->view_component($view, $params);
   }
}

if (!function_exists('view')) {
   function view($view, $params = []) 
   {
      (new Controller())->view($view, $params);
   }
}

if (!function_exists('session')) {
   function session()
   {
      return SessionManager::getInstance();
   }
}


if (!function_exists('env')) {
   function env($key, $default = null)
   {
      return $_ENV[$key] ?? $default;
   }
}