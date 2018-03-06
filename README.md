# slim rest api

PHP Rest API based on Traversy Media RESTful API With PHP & MySQL

Writen OOP way.

Technologies used:
-MySQL,
-php,
-Slim 3.0

This is my first attempt to write REST API in Slim php framework to get to know faster way to write REST API. Database contains 1 tables: categories, products. See database.json

To see customers from database type /api/customers
To see single customer type /api/customer/{id of customer}
To add customer go to browser api addon, set url to public/api/customer/add and post and type

{
    "first_name": "aaa",
    "last_name": "bbb",
    "phone": "666 666 666 ",
    "email": "asd@asd",
    "city": "ASD",
    "state": "DSA"
}
in body

To update customer /api/customer/update/{id} and put same body as above with updated data
To delete customer /api/customer/delete/{id}


todo:
-build basic front CRUD interface (use bootstrap)
-make it functionable to create and pick issues (like reporting problems with sink and picking issue by specialist)
-create registration and accounts
