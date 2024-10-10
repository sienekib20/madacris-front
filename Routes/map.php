<?php

$dirname = dirname(__FILE__, 2);
define("ROOT_DIR", $dirname);

$dirname = explode(DIRECTORY_SEPARATOR, $dirname);
$dirname = "/" . end($dirname);

define("ROOT", $dirname);