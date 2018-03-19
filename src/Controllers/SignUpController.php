<?php

namespace FaultWall\Controllers;

use Slim\Views\Twig;
use Slim\Router;
use FaultWall\Models\Issue;
use FaultWall\Models\Customer;
use FaultWall\Models\Specialist;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class SignUpController{

  protected $router;
  protected $view;

  // public function __construct( Router $router){
  //
  //   $this->router = $router;
  //   //później jeszcze $this->validator = $validator;
  // }

  // public function index(Request $request, Response $response, Twig $view){
  //   echo "<h1>register</h1>";
  // }
  public function getSignUp(Request $request, Response $response, Twig $view){

    return $view->render($response, 'signup.twig');
  }

  public function postSignUp(Request $request, Response $response, Router $router){

    // if(isset($_POST['customer-check']) && ($_POST["password"] === $_POST["password-confirm"])){
    //   //
    // }
    $customer = Customer::create([
      'email' => $request->getParam('email'),
      'first_name' => $request->getParam('name'),
      'last_name' => $request->getParam('last_name'),
      'password' => password_hash($request->getParam('password'), PASSWORD_DEFAULT)
    ]);
    return $response->withRedirect($router->pathFor('home'));
  }
}
