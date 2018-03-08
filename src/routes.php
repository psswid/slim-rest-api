<?php

//Home page and get
$app->get('/', ['FaultWall\Controllers\HomeController', index])->setName('home');




//Get all issues API
$app->get('/api/issues',['FaultWall\Controllers\HomeController', all_issues_api]);

//Get single issue API
$app->get('/api/issue/{id}',['FaultWall\Controllers\HomeController', single_issue_api]);

//Add issue API
$app->post('/api/issue/add', ['FaultWall\Controllers\HomeController', add_issue_api]);





// use \Psr\Http\Message\ServerRequestInterface as Request;
// use \Psr\Http\Message\ResponseInterface as Response;
//
//
// $app = new \Slim\App;
//
// //Get all customers
// $app->get('/api/customers', function(Request $request, Response $response){
//   $sql = "SELECT * FROM customers";
//
//   try{
//     //get DB obj
//     $db = new Db();
//     //connect
//     $db = $db->connect();
//
//     $stmt = $db->query($sql);
//
//     $customers = $stmt->fetchAll(PDO::FETCH_OBJ);
//
//     $db = null;
//
//     echo json_encode($customers);
//   }catch(PDOException $e){
//     echo '{"error": {"text": '.$e->getMessage().'}}';
//   }
// });
//
//
// //Get single customer
// $app->get('/api/customer/{id}', function(Request $request, Response $response){
//
//   $id = $request->getAttribute('id');
//
//   $sql = "SELECT * FROM customers WHERE id = $id";
//
//   try{
//     //get DB obj
//     $db = new Db();
//     //connect
//     $db = $db->connect();
//
//     $stmt = $db->query($sql);
//
//     $customer = $stmt->fetchAll(PDO::FETCH_OBJ);
//
//     $db = null;
//
//     echo json_encode($customer);
//   }catch(PDOException $e){
//     echo '{"error": {"text": '.$e->getMessage().'}}';
//   }
// });
//
//
// //Add customer
// $app->post('/api/customer/add', function(Request $request, Response $response){
//
//   $first_name = $request->getParam('first_name');
//   $last_name = $request->getParam('last_name');
//   $phone = $request->getParam('phone');
//   $email = $request->getParam('email');
//   $city = $request->getParam('city');
//   $state = $request->getParam('state');
//
//
//
//   $sql = "INSERT INTO customers (first_name, last_name, phone, email, city, state) VALUES(:first_name, :last_name, :phone, :email, :city, :state)";
//
//   try{
//     //get DB obj
//     $db = new Db();
//     //connect
//     $db = $db->connect();
//
//     $stmt = $db->prepare($sql);
//     $stmt->bindParam(':first_name', $first_name);
//     $stmt->bindParam(':last_name', $last_name);
//     $stmt->bindParam(':phone', $phone);
//     $stmt->bindParam(':email', $email);
//     $stmt->bindParam(':city', $city);
//     $stmt->bindParam(':state', $state);
//
//     $stmt->execute();
//
//     echo '{"notice": {"text": "customer added"}}';
//
//   }catch(PDOException $e){
//     echo '{"error": {"text": '.$e->getMessage().'}}';
//   }
// });
//
//
// //Update customer
// $app->put('/api/customer/update/{id}', function(Request $request, Response $response){
//
//   $id = $request->getAttribute('id');
//   $first_name = $request->getParam('first_name');
//   $last_name = $request->getParam('last_name');
//   $phone = $request->getParam('phone');
//   $email = $request->getParam('email');
//   $city = $request->getParam('city');
//   $state = $request->getParam('state');
//
//
//
//   $sql = "UPDATE customers SET
//           first_name = :first_name,
//           last_name = :last_name,
//           phone = :phone,
//           email = :email,
//           city = :city,
//           state = :state
//           WHERE id = $id";
//
//   try{
//     //get DB obj
//     $db = new Db();
//     //connect
//     $db = $db->connect();
//
//     $stmt = $db->prepare($sql);
//     $stmt->bindParam(':first_name', $first_name);
//     $stmt->bindParam(':last_name', $last_name);
//     $stmt->bindParam(':phone', $phone);
//     $stmt->bindParam(':email', $email);
//     $stmt->bindParam(':city', $city);
//     $stmt->bindParam(':state', $state);
//
//     $stmt->execute();
//
//     echo '{"notice": {"text": "customer updated"}}';
//
//   }catch(PDOException $e){
//     echo '{"error": {"text": '.$e->getMessage().'}}';
//   }
// });
//
// //Delete customer
// $app->delete('/api/customer/delete/{id}', function(Request $request, Response $response){
//
//   $id = $request->getAttribute('id');
//
//
//   $sql = "DELETE FROM customers
//           WHERE id = $id";
//
//   try{
//     //get DB obj
//     $db = new Db();
//     //connect
//     $db = $db->connect();
//
//     $stmt = $db->prepare($sql);
//
//     $stmt->execute();
//     $db=null;
//
//     echo '{"notice": {"text": "customer deleted"}}';
//
//   }catch(PDOException $e){
//     echo '{"error": {"text": '.$e->getMessage().'}}';
//   }
// });
