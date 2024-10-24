<?php

class AuthController extends Controller
{
   public function login()
   {
      // TODO: 
   }

   public function rem()
   {
      session()->logout();
   }

   public function set(Request $request)
   {
      $content = file_get_contents('php://input');

      // Exibe o conteúdo para depuração
      // var_dump($content);

      $dados = json_decode($content, true);

      session()->setSession('id', $dados['id']);
      session()->setSession('name', $dados['nome']);

      if (json_last_error() === JSON_ERROR_NONE) {
         echo json_encode($_SESSION);
      } else {
         echo json_encode(['error' => 'Dados inválidos', 'details' => json_last_error_msg()]);
      }
      exit;
   }

   public function register()
   {
      // TODO:

      return $this->view('auth.register');
   }
}
