<?php

use FaultWall\App;
use Slim\Views\Twig;
use Illuminate\Database\Capsule\Manager as Capsule;

session_start();

require __DIR__ . '/../vendor/autoload.php';

$app = new App;

$capsule = new Capsule;
$capsule->addConnection([
  'driver'  =>  'mysql',
  'host'  =>  'localhost',
  'database'  =>  'fault_wall',
  'username'  =>  'admin',
  'password'  =>  'admin',
  'charset' =>  'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix'  => ''
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();


require __DIR__ . '/../src/routes.php';

$container = $app->getContainer();
