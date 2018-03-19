<?php

namespace FaultWall\Controllers;

use Slim\Views\Twig;
use Slim\Router;
use FaultWall\Models\Issue;
use FaultWall\Models\Customer;
use FaultWall\Models\Specialist;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class CustomerController{

  protected $customer;
  protected $router;
  protected $view;

  public function __construct(Customer $customer, Router $router){

    $this->customer = $customer;
    $this->router = $router;
    //później jeszcze $this->validator = $validator;
  }

  //Show customers table
  public function index(Request $request, Response $response, Twig $view, Customer $customer){

    $customers = $customer->get();

    return $view->render($response, 'customers/index.twig', [
      'customers' => $customers
    ]);
  }

  //Create customer
  public function createCustomer(Request $request, Response $response){

    // Customer::create([
    //
    // ])
  }


}
