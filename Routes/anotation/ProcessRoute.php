<?php

class Route
{
   protected static $routes = [];
   protected static $middleware = false;
   protected $request;
   protected static $prefix = null;

   public function __construct()
   {
      $this->request = request();
   }

   public static function get($uri, $action)
   {
      static::addRoute('GET', $uri, $action);
   }

   public static function post($uri, $action)
   {
      static::addRoute('POST', $uri, $action);
   }

   private static function addRoute($method, $uri, $action)
   {
      if (static::$prefix != null) {
         $uri = static::$prefix . $uri;
      }

      static::$routes[] = [
         'method' => strtoupper($method),
         'path' => ROOT . $uri,
         'controllerMethod' => $action,
         'isMiddleware' =>  static::$middleware
      ];;
   }

   public static function privateRoute($callback)
   {
      static::$middleware = true;
      if (!is_callable($callback)) {
         die('Private Route Espera um Callback');
      }
      $callback();
      static::$middleware = false;
   }

   public static function groupRoute($prefix, $callback)
   {
      static::$prefix = $prefix;
      if (!is_callable($callback)) {
         die('Private Route Espera um Callback');
      }
      $callback();
      static::$prefix = null;
   }

   public function disapatch()
   {
      // global $routes;

      foreach (static::$routes as $route) {
         $pathPattern = preg_replace('/\/{(\w+)}/', '/(?<$1>.*?)', $route['path']);

         if ($route['method'] === $this->request->method() && preg_match("#^" . $pathPattern . "$#", $this->request->uri(), $matches)) {
            array_shift($matches);
            $this->request->bind($matches);

            // Quebra o controller e o método
            list($controller, $method) = explode('@', $route['controllerMethod']);
            $controllerFile = abs_path() . "/controller/$controller.php";

            if (file_exists($controllerFile)) {
               require_once $controllerFile;

               if (!class_exists($controller)) {
                  echo "Controller $controller não encontrado";
                  exit();
               }
               $controllerInstance = new $controller();

               if (!method_exists($controllerInstance, $method)) {
                  echo "Método $method não encontrado no controller $controller";
                  exit();
               }

               if ($route['isMiddleware']) {
                  if (!session()->isLoggedIn()) {
                     session()->redirect(ROOT);
                  }
               }
               return $controllerInstance->$method($this->request);
            } else {
               echo "Arquivo do controller $controller não encontrado";
            }
            return;
         }
      }

      // Se a rota não for encontrada, retorna 404
      http_response_code(404);
      echo 'Página não encontrada';
   }
}
