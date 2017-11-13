<?php

class  Contact {
    //database connection & teble name
    private $conn;
    private $table_name = "Contacten";

    //object properties
    public $id;
    public $email;
    public $name;

    //constructor with $db als database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    //contacten opvragen
    function read() {
        //select all query
        $query = "SELECT
                    ID as id, email, name
                  FROM
                    " . $this->table_name;

        //prepare query statement
        $stmt = $this->conn->prepare($query);

        //execute query
        $stmt->execute();

        return $stmt;
    }

    //contact aanmaken
    function create()
    {
        $query = "INSERT INTO
                    " . $this->table_name . "
                  SET
                    id=:ID, email=:email, name=:name";

        //prepare query
        $stmt = $this->conn->prepare($query);

        //sanitize
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->name = htmlspecialchars(strip_tags($this->name));

        //bind values
        $stmt->bindParam(":ID", $this->id);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":name", $this->name);

        //execute query
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //contact verwijderen
    function delete() {
        //delete query
        $query = "DELETE FROM
                      " . $this->table_name . "
                  WHERE
                      ID = ?";

        //prepare query
        $stmt = $this->conn->prepare($query);

        //sanitize
        $this->id=htmlspecialchars(strip_tags($this->id));

        //bind id of record to delete
        $stmt->bindParam(1, $this->id);

        //execute query
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
