<?php

require __DIR__ . '/Routes/routes.php'; 
require __DIR__ . '/Routes/suporte/Env.php'; 

// Inicializa o .env

$env = Env::createImmutable(__DIR__ . '/.env');
$env->load();

// Carrega a Session

session()->start();


// Inicializa o app

process()->disapatch();