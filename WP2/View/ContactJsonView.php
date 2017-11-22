<?php
/**
 * Created by PhpStorm.
 * User: 11305369
 * Date: 22/11/2017
 * Time: 17:53
 */

namespace View;
require_once 'View.php';

class ContactJsonView implements View
{
    public function show(array $data)
    {
        header('Content-Type: application/json');

        if (isset($data['Contact'])) {
            $contact = $data['Contact'];

            if (sizeof($contact) <= 1) {
                echo json_encode(['ID' => $contact->getID(), 'Email' => $contact->getEmail(), 'Name' => $contact->getName()]);
            } else {
                foreach ($contact as $show) {
                    echo json_encode(['ID' => $contact->getID(), 'Email' => $contact->getEmail(), 'Name' => $contact->getName()]);
                }
            }
        } else {
            echo '"message": "Could not find Contact"';
        }
    }
}