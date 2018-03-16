<?php

namespace FaultWall\Controllers;

use Slim\Views\Twig;
use Slim\Router;
use FaultWall\Models\Issue;
use FaultWall\Models\Customer;
use FaultWall\Models\Specialist;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class SpecialistController{

  protected $specialist;
  protected $router;

  public function __construct(Specialist $specialist, Router $router){

    $this->specialist = $specialist;
    $this->router = $router;
    //później jeszcze $this->validator = $validator;
  }

  public function index(Request $request, Response $response, Twig $view, Specialist $specialist){

    $specialists = $specialist->get();

    return $view->render($response, 'specialists/index.twig', [
      'specialists' => $specialists
    ]);
  }
}
