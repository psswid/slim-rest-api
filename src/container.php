<?php

use function DI\get;
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
    }
];
