<?php
/**
 * Created by PhpStorm.
 * User: 11305369
 * Date: 22/11/2017
 * Time: 12:43
 */

require_once("../Model/PDOReadContactsDAO.php");
use entities\ContactDAO;

class ContactService
{
    public static function readAllContacts() {
        $contacten = ContactDAO::readAll();
        return contacten;
    }
}