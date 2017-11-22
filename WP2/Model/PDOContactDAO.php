<?php
/**
 * Created by PhpStorm.
 * User: 11305369
 * Date: 22/11/2017
 * Time: 12:37
 */

namespace Model;

require_once("../entities/Contact.php");
require_once("DBConfig.php");

include_once("../config/database.php");
include_once ("../entities/Contact.php");


class PDOContactDAO
{
    public function __construct()
    {
    }

    public static function readAllContacts() {
        $lijst = array();
        $sql = "SELECT ID as id, email, name FROM Contacten";

        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $resultSet = $dbh->query($sql);
        foreach ($resultSet as $rij) {
            $contact = new Contact($rij["id"], $rij["email"], $rij["name"]);
            array_push($lijst, $contact);
        }
        $dbh = null;
        return $lijst;
    }
}