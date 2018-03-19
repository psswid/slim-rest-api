<?php

namespace FaultWall\Controllers;

use Slim\Views\Twig;
use Slim\Router;
use FaultWall\Models\Issue;
use FaultWall\Models\Customer;
use FaultWall\Models\Specialist;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class IssueController{

  protected $issue;
  protected $router;
  protected $view;

  public function __construct(Issue $issue, Router $router){

    $this->issue = $issue;
    $this->router = $router;
    //później jeszcze $this->validator = $validator;
  }

  public function index(Request $request, Response $response, Twig $view, Issue $issue){

    $issues = $issue->get();

    return $view->render($response, 'issues/index.twig', [
      'issues' => $issues
    ]);
  }
}
