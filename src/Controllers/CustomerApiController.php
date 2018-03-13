<?php

namespace FaultWall\Controllers;

use FaultWall\Models\Customer;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class CustomerApiController{

  //API get all customers
  public function all_customers_api(Request $request, Response $response){
    $customers = Customer::all();

    return $customers->toJson();
  }

  //API get single customer
  public function single_customer_api(Request $request, Response $response, $id){
    $customer = Customer::findOrFail($id);

    return $customer->toJson();
  }

  //API add new customer
  public function add_customer_api(Request $request, Response $response){
    $customer = new Customer;
    $params = $request->getParsedBody();

    $customer->email = $params['email'];
    $customer->password = $params['password'];
    $customer->first_name = $params['first_name'];
    $customer->last_name = $params['last_name'];
    $customer->street = $params['street'];
    $customer->city = $params['city'];
    $customer->state = $params['state'];
    $customer->zip = $params['zip'];
    $customer->phone = $params['phone'];

    $customer->save();
    echo '{"notice": {"text": "new customer added"}';
  }

  //API update customer
  public function update_customer_api(Request $request, Response $response, $id){
    $customer = Customer::find($id);
    $params = $request->getParsedBody();

    $customer->email = $params['email'];
    $customer->password = $params['password'];
    $customer->first_name = $params['first_name'];
    $customer->last_name = $params['last_name'];
    $customer->street = $params['street'];
    $customer->city = $params['city'];
    $customer->state = $params['state'];
    $customer->zip = $params['zip'];
    $customer->phone = $params['phone'];

    $customer->save();
    echo '{"notice": {"text": "customer #id:'. $id . ' updated"}';
  }

  //API delete issue
  public function delete_customer_api(Request $request, Response $response, $id){
    $customer = Customer::find($id);

    $customer->delete();

    echo '{"notice": {"text": "customer #id:'. $id . ' deleted"}';
  }
}
