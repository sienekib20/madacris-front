<?php

class Model
{
    protected $db;

    public function __construct()
    {
        // Instância da classe Database que faz a conexão com o banco de dados
        $this->db = (new DB())->connect();
    }
}
