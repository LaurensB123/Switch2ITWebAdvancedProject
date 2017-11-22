<?php
/**
 * Created by PhpStorm.
 * User: 11305369
 * Date: 22/11/2017
 * Time: 16:50
 */

namespace Model;
require_once 'ContactRepository.php';

class PDOContactRepository implements ContactRepository
{
    private $connection = null;
    private $contactDAO = null;

    public function readContacts()
    {
        try {
            $statement = $this->connection->prepare("SELECT ID AS id, email, name FROM Contacten");

            $statement->execute();
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            $rows = [];

            foreach ($result as $row) {
                $rows[] = new Event($row['name'], $row['ID'], $row['email']);

                $statement = $this->connection->prepare("SELECT ID as id, email, name FROM Contacten");
                var_dump($statement);

                $statement->bindParam(1, id, \PDO::PARAM_INT);
                $statement->execute();
                $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
                if (count($result) > 0) {
                    return new Contact($result[0]['ID'], $result[0]['Email'], $result[0]['Name']);
                } else {
                    return null;
                }
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

            $statement = $this->connection->prepare('INSERT INTO Contacten VALUES (' . $id . ', :ID, :email, :name)');

            //$statement->bindParam(1, $id, \Pdo::PARAM_INT);
            $statement->bindParam(':ID', $id, \Pdo::PARAM_INT);
            $statement->bindParam(':email', $email, \Pdo::PARAM_STR);
            $statement->bindParam(':name', $name, \Pdo::PARAM_STR);

            $statement = $this->connection->prepare('INSERT INTO Contacten VALUES (' . $id . ', :ID, :naam, :email');


            $statement->bindParam(':ID', $id, \Pdo::PARAM_INT);
            $statement->bindParam(':name', $name, \Pdo::PARAM_STR);
            $statement->bindParam(':email', $email, \Pdo::PARAM_STR);

            $result = $statement->execute();

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
}