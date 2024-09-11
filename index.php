<?php

session_start();

use Sienekib\Core;

require __DIR__ . "/v4/Config.php";

require __DIR__ . "/vendor/autoload.php";


$core = new Core(dirname(__FILE__));

$core->dispatch(require __DIR__ . "/routes/web.php");
