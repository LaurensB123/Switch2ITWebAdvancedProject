<?php
/**
 * Created by PhpStorm.
 * User: 11305369
 * Date: 22/11/2017
 * Time: 15:57
 */

require 'altoRouter/AltoRouter.php';

use View\ContactJsonView;
use Model\PDOContactRepository;

$host = "localhost";
$db_name = "ProjectWebAdvanced";
$username  = "root";
$password = "root";
$pdo = null;

try {
    $pdo = new PDO("mysql:host=localhost;dbname=ProjectWebAdvanced", $username, $password); // . localhost . ";dbname=" . $this->db_name, $this->username, $this->password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $contactPDORepository = new PDOContactRepository($pdo);
    $contactJsonView = new ContactJsonView();
    $contactController = new ContactController($contactPDORepository, $contactJsonView);

    $router = new AltoRouter();
    $router->setBasePath('/');

    $router->map('GET', '/Contacten/[i;id]', function () use ($contactController) {
        $contactController->readContacts();
        }
    );

    $router->map('DELETE', '/Contacten/[i:id]', function ($id) use ($contactController) {
        $contactController->remove($id);
        }
    );

    $router->map('POST', '/Contacten/[i:id]', function ($id) use ($contactController) {
        $temp = file_get_contents('php://input');
        $contactController->add($id);
        }
    );

    $match = $router->match();
    if ($match && is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
       }
    } catch (Exception $e) {
        var_dump($e);
    }






