<?php
/*
//required headers
header("Access-Control-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//include database and contact entities
include_once '../config/database.php';
include_once '../entities/Contact.php';

use entities\Contact;

//instantiate database & contact object
$database = new Database();
$db = $database->getConnection();

//initialize object
$contact = new Contact($db);

//query products
$stmt = $contact->read();
$nr = $stmt->rowCount();

//check if more than 0 records found
if ($nr > 0) {
    //contacts array
    $contacts_arr = array();
    $contacts_arr["records"] = array();

    //retrieve our table contents
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //extract row
        //this will make $row{'name'} to just $name only
        extract($row);

        $contact_item = array(
            "ID" => $id,
            "email" => $email,
            "name" => $name
        );

        array_push($contacts_arr["records"], $contact_item);
    }

    echo json_encode($contacts_arr);
} else {
    echo json_encode(array("message"=>"No contacts found"));
}
?>

