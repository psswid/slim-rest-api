<?php

use function DI\get;
use FaultWall\Models\Issue;
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
];


//w sumie to tez mozna dodac jakis rating system majstrów xD
