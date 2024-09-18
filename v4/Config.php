<?php

define("BASE_APP", "madacris-front");

define("URL", "http://localhost/madacris-front");
define("ASSET_PATH", URL . "/assets");
define("VIEW_PATH", __DIR__ . "/../views");


define("DB_HOST", "localhost");
define("DB_PORT", "3306");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "fe");


if (!function_exists("partial")) {
   function partial($partial)
   {
      $partial = str_contains($partial, ".") ? str_replace(".", "/", $partial) : $partial;

      if (!file_exists(VIEW_PATH . "/site/partials/$partial.php")) {
         die("PARTIAL NOT FOUND");
      }
      require VIEW_PATH . "/site/partials/$partial.php";
   }
}

if (!function_exists("url")) {
   function url($url, $param = null)
   {
      $url = $url == "/" ? "/madacris-front" : "/madacris-front/$url";
      $url .= $param ? "/$param" : '';
      return $url;
   }
}


if (!function_exists("asset")) {
   function asset($asset)
   {
      return ASSET_PATH . "/$asset?v=" . time();
   }
}
