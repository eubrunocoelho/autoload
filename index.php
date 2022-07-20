<?php

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

require_once 'autoload.php';

use Controller\IndexController;
use lib\Application;

define('DS', DIRECTORY_SEPARATOR);
define('DIR_APP', __DIR__);

new IndexController();
new Application();