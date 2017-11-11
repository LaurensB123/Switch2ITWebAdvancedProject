<?php

//required headers
header("Access-Control-Allow-Origin");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Headers, Authorization, X-Requested-With");

//get database connection
include_once '../config/database.php';

//instantiate contact
include_once '../objects/Contact.php';

$database = new Database();
$db = $database->getConnection();

$contact = new Contact($db);

//get posted data
$data = json_decode(file_get_contents("php://input"));

//set contact property values
$contact->id = $data->id;
$contact->email = $data->email;
$contact->name = $data->name;

//create the contact
if ($contact-> create()) {
    echo '{';
    echo '"message": "Contact was created"';
    echo '}';
} else {  // if unable to create the contact, let the user know
    echo '{';
    echo '"message": "unable to create contact"';
}
?>

