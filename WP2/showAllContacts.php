<?php
/**
 * Created by PhpStorm.
 * User: 11305369
 * Date: 22/11/2017
 * Time: 13:54
 */

require_once ("business/ContactService.php");

$contacten = ContactService::readAllContacts();
include("View/contactList.php");
