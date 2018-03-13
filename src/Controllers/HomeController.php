<?php

namespace FaultWall\Controllers;

use FaultWall\Models\Issue;
use Slim\Views\Twig;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class HomeController{

  public function index(Request $request, Response $response, Twig $view, Issue $issue){

    $issues = $issue->get();

    var_dump($issues);

    return $view->render($response, 'home.twig');
  }



}
