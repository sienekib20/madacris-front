<?php

class DB
{
   private $conn = null;

   public function connect()
   {
      $this->conn = null;

      try {
         $this->conn = new PDO(
            'mysql:host=' . env('DB_HOST') .
               ';dbname=' . env('DB_DATABASE'),
            env('DB_USERNAME'),
            env('DB_PASSWORD')
         );
         $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
         echo 'Erro de Conexão: ' . $e->getMessage();
      }

      return $this->conn;
   }
}
