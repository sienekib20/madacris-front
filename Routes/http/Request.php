<?php

class Request implements JsonSerializable
{
   protected $params;
   protected $files;
   protected $server;
   protected $post;
   protected $cookies;
   protected $env;
   protected $session;

   protected $requestData;

   public function __construct()
   {
      $this->params = $_GET ?? [];
      $this->files = $_FILES ?? [];
      $this->server = $_SERVER ?? [];
      $this->post = $_POST ?? [];
      $this->cookies = $_COOKIE ?? [];
      $this->env = $_ENV ?? [];
      $this->session = $_SESSION ?? [];

      // Capturar dados JSON se a requisição for AJAX e tiver conteúdo JSON
      if ($this->isJson()) {
         $input = file_get_contents('php://input');
         $this->post = json_decode($input, true) ?? [];
      }

      $this->setRequestData();
   }

   public function fromApi($env_api_url, $url, $params = [], $method = 'GET', $headers = []) {
        $ch = curl_init();


        if ($method == 'GET') {
            $queryString = http_build_query($params);
            $url = $queryString ? $url . '?' . $queryString : $url;
        } else if ($method == 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        }
        $url = env($env_api_url) . $url;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        if (!empty($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($response === false) {
            throw new \Exception('Curl error: ' . curl_error($ch));
        }

        curl_close($ch);

        return (object) [
            'status' => $httpCode,
            'data' => json_decode($response, true)
        ];
    }

   // function fromApi($env_api_url, $url, $params = [], $method = 'GET', $headers = []) {
   //     $url = env($env_api_url) . $url;

   //     if ($method === 'GET' && !empty($params)) {
   //         $queryString = http_build_query($params);
   //         $url .= '?' . $queryString;
   //     }

   //     $options = [
   //         'http' => [
   //             'header'  => !empty($headers) ? implode("\r\n", $headers) : '',
   //             'method'  => $method,
   //             'content' => ($method === 'POST') ? http_build_query($params) : null,
   //         ],
   //     ];

   //     $context = stream_context_create($options);
   //     $response = file_get_contents($url, false, $context);

   //     if ($response === false) {
   //         throw new \Exception('Error fetching data');
   //     }

   //     return json_decode($response, true);
   // }


   public function setRequestData()
   {
      // Combinar $_REQUEST e dados JSON, se houver
      $this->requestData = (object) array_merge($_REQUEST, $this->post);
   }

   public function bind(array $bind)
   {
      if ($this->isGet()) {
         foreach ($bind as $key => $value) {
            if (is_string($key)) {
               $_REQUEST[$key] = $value;
            }
         }
      }

      if ($this->isPost()) {
         foreach ($bind as $key => $value) {
            if (is_string($key)) {
               $this->post[$key] = $value; // Ajuste para armazenar no array post
               $_REQUEST[$key] = $value;  // Adicionar também ao $_REQUEST
            }
         }
      }
      $this->setRequestData();
   }

   public function path()
   {
      $path = explode("/", ltrim($_SERVER["REQUEST_URI"], "/"));
      array_shift($path);

      return is_array($path) ? $path : [$path];
   }

   public function method()
   {
      return $this->server['REQUEST_METHOD'];
   }

   public function uri()
   {
      $uri = $this->server['REQUEST_URI'];
      $pos = strpos($uri, '?');

      if ($pos === false) {
         $uri = $uri;
      } else {
         $uri = substr($uri, 0, $pos);
      }
      return $uri;
   }

   public function input($key)
   {
      return $this->post[$key] ?? null; // Corrigido para acessar o array post corretamente
   }

   public function isGet()
   {
      return $this->server['REQUEST_METHOD'] == 'GET';
   }

   public function isPost()
   {
      return $this->server['REQUEST_METHOD'] == 'POST';
   }

   public function post(string $key)
   {
      return $this->post[$key] ?? null;
   }

   public function file(string $key)
   {
      return $this->files[$key] ?? null;
   }

   public function __get($name)
   {
      return $this->requestData->$name ?? null;
   }

   public function isSecure()
   {
      // Verifica se a requisição é segura
      return !empty($this->server['HTTPS']) && $this->server['HTTPS'] !== 'off';
   }

   public function isHttps()
   {
      return $this->isSecure();
   }

   // Método adicional para verificar se a requisição é JSON
   public function isJson()
   {
      return isset($this->server['CONTENT_TYPE']) && strpos($this->server['CONTENT_TYPE'], 'application/json') !== false;
   }

   // Implementar jsonSerialize para customizar a serialização para JSON
   public function jsonSerialize(): mixed
   {
      return [
         'params' => $this->params,
         'files' => $this->files,
         'server' => $this->server,
         'post' => $this->post,
         'cookies' => $this->cookies,
         'env' => $this->env,
         'session' => $this->session,
         'requestData' => $this->requestData,
      ];
   }

   // Método sanitize para limpar o campo solicitado
   public function sanitize($key, $default = null)
   {
      $value = $this->post[$key] ?? $this->params[$key] ?? $default;

      if ($value) {
         // Remover tags HTML e caracteres especiais
         return filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
      }

      return $default;
   }
}
