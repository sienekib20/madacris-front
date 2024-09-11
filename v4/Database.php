<?php

namespace Sienekib;

use PDO;
use PDOException;

class Database
{
   private $connection = null;

   private function initConnection()
   {
      try {

         if ($this->connection == null) {

            $this->connection = new PDO(
               "mysql:host=" . DB_HOST . ";dbnam=" . DB_DATABASE,
               DB_USERNAME,
               DB_PASSWORD
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         }
      } catch (PDOException $ex) {
         die("ERRO DE CONEXAO AO DB: " . $ex->getMessage());
      }
   }

   public function raw($sql, $data = []) 
   {
      try {

         $stmt = $this->connection->prepare($sql);

         $result = $stmt->execute($data);

         return $result;

      } catch (PDOException $ex) {
         die ("ERRO DE BD: " + $ex->getMessage());
      }


   }

   private function closeConnection()
   {
      $this->connection = null;
   }
}
