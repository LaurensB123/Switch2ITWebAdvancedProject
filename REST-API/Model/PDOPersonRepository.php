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

    public function findAllPersons()
    {
        try {
            $statement = $this->connection->prepare("SELECT * FROM Afspraak");
            //var_dump($statement);
            $statement->execute();
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            $rows = [];
            //    var_dump($result);
            foreach ($result as $row) {
                $rows[] = new Event($row['EventID'], $row['PersoonID'], $row['StartDatum'], $row['EindDatum'], $row['beschrijving']);
            }
            return $rows;
        } catch (\Exception $exception) {
            var_dump($exception);
            return null;
        }
    }

    public function add($id)
    {
        //  $logger = \Logger::getLogger("Main");
        // $logger->error("LOG THE POST ARRAY:" . json_encode($_REQUEST));
        try {
            $data = json_decode(file_get_contents('php://input'));

            $persoonID = $data->PersoonID;
            $startDatum = $data->StartDatum;
            $eindDatum = $data->EindDatum;
            $beschrijving = $data->beschrijving;

            $statement = $this->connection->prepare('INSERT INTO Afspraak VALUES (' . $id . ', :persID, :startDatum, :eindDatum, :beschrijving)');

            //$statement->bindParam(1, $id, \Pdo::PARAM_INT);
            $statement->bindParam(':persID', $persoonID, \Pdo::PARAM_INT);
            $statement->bindParam(':startDatum', $startDatum, \Pdo::PARAM_STR);
            $statement->bindParam('eindDatum', $eindDatum, \Pdo::PARAM_STR);
            $statement->bindParam(':beschrijving', $beschrijving, \Pdo::PARAM_STR);
            //var_dump($statement);
            $result = $statement->execute();
            //$result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;

        } catch (\PDOException $exception) {
            var_dump($exception);
            return null;
        }
    }

    public function remove($id)
    {
        try {
            $statement = $this->connection->prepare("
            DELETE FROM Afspraak
            WHERE EventID=?");

            $statement->bindParam(1, $id, \Pdo::PARAM_INT);
            $statement->execute();
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);

        } catch (\Exception $exception) {
            var_dump($exception);
            return null;
        }

    }

    public function update($id)
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

    }


}