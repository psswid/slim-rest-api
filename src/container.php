<?php

use function DI\get;
use FaultWall\Models\Issue;
use FaultWall\Models\Customer;
use FaultWall\Models\Specialist;
use FaultWall\Controllers\SignUpController;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Interop\Container\ContainerInterface;



return [
    RouterInterface::class => function (ContainerInterface $c) { return $c->get('router'); },
    Twig::class => function (ContainerInterface $c) {
      $twig = new Twig(__DIR__ . '/../resources/views', [
        'cache' => false
      ]);

      $twig->addExtension(new TwigExtension(
        $c->get('router'),
        $c->get('request')->getUri()
      ));

      return $twig;
    },
    Issue::class => function (ContainerInterface $c) {
      return new Issue;
    },
    Customer::class => function (ContainerInterface $c) {
      return new Customer;
    },
    Specialist::class => function (ContainerInterface $c) {
      return new Specialist;
    },
    SignUpController::class => function (ContainerInterface $c) {
      return new SignUpController;
    },
];


//w sumie to tez mozna dodac jakis rating system majstrów xD
