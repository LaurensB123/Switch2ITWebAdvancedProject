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
            $statement = $this->connection->prepare("SELECT ID as id, email, name FROM Contacten");
            //var_dump($statement);
            $statement->bindParam(1, $id, \PDO::PARAM_INT);
            $statement->execute();
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            if (count($result) > 0) {
                return new Contact($result[0]['ID'], $result[0]['Email'], $result[0]['Name']);
            } else {
                return null;
            }
        } catch (\Exception $exception) {
            //var_dump($exception);
            return null;
            //encoderen naar JSON??????????
        }
    }

    public function addContact($id)
    {
        //  $logger = \Logger::getLogger("Main");
        // $logger->error("LOG THE POST ARRAY:" . json_encode($_REQUEST));
        try {
            $data = json_decode(file_get_contents('php://input'));

            $id = $data->id;
            $email = $data->email;
            $name = $data->name;

            $statement = $this->connection->prepare('INSERT INTO Contacten VALUES (' . $id . ', :ID, :email, :name)');

            //$statement->bindParam(1, $id, \Pdo::PARAM_INT);
            $statement->bindParam(':ID', $id, \Pdo::PARAM_INT);
            $statement->bindParam(':email', $email, \Pdo::PARAM_STR);
            $statement->bindParam(':name', $name, \Pdo::PARAM_STR);
            //var_dump($statement);
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
            WHERE id=?");

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
            $startDatum = $data->StartDatum;
            $eindDatum = $data->EindDatum;
            $beschrijving = $data->beschrijving;

            $statement = $this->connection->prepare('UPDATE Afspraak SET PersoonID = :persID, StartDatum = :startDatum, EindDatum = :eindDatum, beschrijving = :beschrijving WHERE EventID =' . $id);

            //waardes worden uitgelezen maar update niet ???
            //$statement->bindParam(1,$id, \Pdo::PARAM_INT);
            $statement->bindParam(':persID', $persoonID, \Pdo::PARAM_INT);
            $statement->bindParam(':startDatum', $startDatum, \Pdo::PARAM_STR);
            $statement->bindParam(':eindDatum', $eindDatum, \Pdo::PARAM_STR);
            $statement->bindParam(':beschrijving', $beschrijving, \Pdo::PARAM_STR);

            $result = $statement->execute();
            var_dump($result);
            //$result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;


        } catch (\Exception $exception) {
            var_dump($exception);
            return null;
        }

    }*/
}