<?php

require_once "Core/Autoloader.php";

use Core\Autoloader;


Autoloader::register();

echo $_SERVER["REQUEST_URI"];
