<?php

//Home page and get
$app->get('/', ['FaultWall\Controllers\HomeController', index])->setName('home');


/*
*
*   ISSUES API ROUTES
*
*/

//Get all issues API
$app->get('/api/issues',['FaultWall\Controllers\IssueApiController', all_issues_api]);

//Get single issue API
$app->get('/api/issue/{id}',['FaultWall\Controllers\IssueApiController', single_issue_api]);

//Add issue API
$app->post('/api/issue/add', ['FaultWall\Controllers\IssueApiController', add_issue_api]);

//Update issue API
$app->put('/api/issue/update/{id}', ['FaultWall\Controllers\IssueApiController', update_issue_api]);

//Delete issue API
$app->delete('/api/issue/delete/{id}', ['FaultWall\Controllers\IssueApiController', delete_issue_api]);


/*
*
*   USERS API ROUTES
*
*/

//Get all users API
$app->get('/api/customers',['FaultWall\Controllers\CustomerApiController', all_customers_api]);

//Get single customer API
$app->get('/api/customer/{id}',['FaultWall\Controllers\CustomerApiController', single_customer_api]);

//Add customer API
$app->post('/api/customer/add', ['FaultWall\Controllers\CustomerApiController', add_customer_api]);

//Update customer API
$app->put('/api/customer/update/{id}', ['FaultWall\Controllers\CustomerApiController', update_customer_api]);

//Delete customer API
$app->delete('/api/customer/delete/{id}', ['FaultWall\Controllers\CustomerApiController', delete_customer_api]);


/*
*
*   SPECIALISTS API ROUTES
*
*/

//Get all specialists API
$app->get('/api/specialists',['FaultWall\Controllers\CustomerApiController', all_specialists_api]);

//Get single specialist API
$app->get('/api/specialist/{id}',['FaultWall\Controllers\CustomerApiController', single_specialist_api]);

//Add specialist API
$app->post('/api/specialist/add', ['FaultWall\Controllers\CustomerApiController', add_specialist_api]);

//Update specialist API
$app->put('/api/specialist/update/{id}', ['FaultWall\Controllers\CustomerApiController', update_specialist_api]);

//Delete specialist API
$app->delete('/api/specialist/delete/{id}', ['FaultWall\Controllers\CustomerApiController', delete_specialist_api]);




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
