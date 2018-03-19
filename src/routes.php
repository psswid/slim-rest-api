<?php

//Home page and get
$app->get('/', ['FaultWall\Controllers\HomeController', index])->setName('home');

//SignUp get form - customer
$app->get('/signup',['FaultWall\Controllers\SignUpController', getSignUp])->setName('singup');

//SignUp post register action
$app->post('/signup',['FaultWall\Controllers\SignUpController', postSignUp]);

//Get all issues
$app->get('/issues', ['FaultWall\Controllers\IssueController', index])->setName('issues.index');

//Get all customers
$app->get('/customers', ['FaultWall\Controllers\CustomerController', index])->setName('customers.index');

//Get all specialists
$app->get('/specialists', ['FaultWall\Controllers\SpecialistController', index])->setName('specialists.index');

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
$app->get('/api/specialists',['FaultWall\Controllers\SpecialistApiController', all_specialists_api]);

//Get single specialist API
$app->get('/api/specialist/{id}',['FaultWall\Controllers\SpecialistApiController', single_specialist_api]);

//Add specialist API
$app->post('/api/specialist/add', ['FaultWall\Controllers\SpecialistApiController', add_specialist_api]);

//Update specialist API
$app->put('/api/specialist/update/{id}', ['FaultWall\Controllers\SpecialistApiController', update_specialist_api]);

//Delete specialist API
$app->delete('/api/specialist/delete/{id}', ['FaultWall\Controllers\SpecialistApiController', delete_specialist_api]);
