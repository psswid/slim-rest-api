<?php

use FaultWall\App;
use Slim\Views\Twig;
use Illuminate\Database\Capsule\Manager as Capsule;

session_start();

require __DIR__ . '/../vendor/autoload.php';

$app = new App;

require __DIR__ . '/../src/routes.php';

$container = $app->getContainer();
