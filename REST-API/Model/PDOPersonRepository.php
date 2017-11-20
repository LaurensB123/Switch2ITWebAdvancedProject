<?php

/**
 * Created by PhpStorm.
 * User: Hannah Patronoudis
 * Date: 16/11/2017
 * Time: 12:44
 */

namespace Model;

class PDOPersonRepository implements PersonRepository
{
    private $connection = null;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function readContacts()
    {
        try {
<<<<<<< HEAD
            $statement = $this->connection->prepare("SELECT ID as id, email, name FROM Contacten");
            //var_dump($statement);
=======
<<<<<<< HEAD
            $statement = $this->connection->prepare("SELECT * FROM Contacten");
            $statement->execute();
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            $rows = [];
            //    var_dump($result);
            foreach ($result as $row) {
                $rows[] = new Event($row['name'], $row['ID'], $row['email']);
=======
            $statement = $this->connection->prepare("SELECT PersoonNaam,PersoonID FROM Persoon WHERE PersoonID=?");
            var_dump($statement);
>>>>>>> 91f7f6ed0d4b665e24b665cb8d2fa7737a9bd4c1
            $statement->bindParam(1, $id, \PDO::PARAM_INT);
            $statement->execute();
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            if (count($result) > 0) {
                return new Contact($result[0]['ID'], $result[0]['Email'], $result[0]['Name']);
            } else {
                return null;
>>>>>>> 0237b64df0b362d1f45a20fed7922a9aa70683b1
            }
        } catch (\Exception $exception) {
            //var_dump($exception);
            return null;
            //encoderen naar JSON??????????
        }
    }

    public function addContact($id)
    {
        try {
            $data = json_decode(file_get_contents('php://input'));

            $id = $data->id;
            $email = $data->email;
            $name = $data->name;

<<<<<<< HEAD
            $statement = $this->connection->prepare('INSERT INTO Contacten VALUES (' . $id . ', :ID, :email, :name)');

            //$statement->bindParam(1, $id, \Pdo::PARAM_INT);
            $statement->bindParam(':ID', $id, \Pdo::PARAM_INT);
            $statement->bindParam(':email', $email, \Pdo::PARAM_STR);
            $statement->bindParam(':name', $name, \Pdo::PARAM_STR);
            //var_dump($statement);
=======
            $statement = $this->connection->prepare('INSERT INTO Contacten VALUES (' . $id . ', :ID, :naam, :email');

            //$statement->bindParam(1, $id, \Pdo::PARAM_INT);
            $statement->bindParam(':ID', $ID, \Pdo::PARAM_INT);
            $statement->bindParam(':naam', $naam, \Pdo::PARAM_STR);
            $statement->bindParam(':email', $email, \Pdo::PARAM_STR);
>>>>>>> 91f7f6ed0d4b665e24b665cb8d2fa7737a9bd4c1
            $result = $statement->execute();
            //$result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;

        } catch (\PDOException $exception) {
            var_dump($exception);
            return null;
        }
    }

    public function removeContact($id)
    {
        try {
            $statement = $this->connection->prepare("
            DELETE FROM Contacten
<<<<<<< HEAD
            WHERE id=?");
=======
            WHERE ID=?");
>>>>>>> 91f7f6ed0d4b665e24b665cb8d2fa7737a9bd4c1

            $statement->bindParam(1, $id, \Pdo::PARAM_INT);
            $statement->execute();
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);

        } catch (\Exception $exception) {
            var_dump($exception);
            return null;
        }

    }

    /*public function update($id)
    {
        try {
            //parse_str(json_decode(file_get_contents('php://input')), $_PUT);
            $data = json_decode(file_get_contents('php://input'));
            //$result = $this->connection->exec('UPDATE Afspraak SET EventID = 1, PersoonID = 1, StartDatum = "2020-10-10", Einddatum = "2025-10-10", Beschrijving = "Test2" WHERE EventID = 1');

            $persoonID = $data->PersoonID;
            $persoonNaam = $data->PersoonNaam;
            $PersoonEmail = $data->PersoonEmail;

            $statement = $this->connection->prepare('UPDATE Contacten SET PersoonID = :ID, PersoonNaam = :naam, PersoonEmail = :email WHERE PersoonID =' . $id);

            //waardes worden uitgelezen maar update niet ???
            //$statement->bindParam(1,$id, \Pdo::PARAM_INT);
            $statement->bindParam(':ID', $persoonID, \Pdo::PARAM_INT);
            $statement->bindParam(':naam', $persoonNaam, \Pdo::PARAM_STR);
            $statement->bindParam(':email', $PersoonEmail, \Pdo::PARAM_STR);

            $result = $statement->execute();
            var_dump($result);
            //$result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;


        } catch (\Exception $exception) {
            var_dump($exception);
            return null;
        }

<<<<<<< HEAD
    }*/
=======
    }

>>>>>>> 91f7f6ed0d4b665e24b665cb8d2fa7737a9bd4c1
}