<?php

/**
 * Created by PhpStorm.
 * User: Hannah Patronoudis
 * Date: 16/11/2017
 * Time: 12:46
 */

namespace View;

class PersonJsonView implements View
{
    public function show(array $data)
    {
        header('Content-Type: application/json');

        if (isset($data['Contact'])) {
            $Event = $data['Contact'];
            //var_dump($Contact);
            if (sizeof($Contact)<=1){
                echo json_encode(['ID' => $Contact->getID(), 'Email' => $Contact->getEmail(), 'Name' => $Contact->getName()]);
            }else{
                foreach ($Contact as $show){
                    echo json_encode(['ID' => $Contact->getID(), 'Email' => $Contact->getEmail(), 'Name' => $Contact->getName()]);
                }
            }

        } /*else if (isset($data['Persoon'])) {
            $Event = $data['Persoon'];
            echo json_encode(['PersoonID' => $Event->getPersoonID(), 'PersoonNaam' => $Event->getPersoonNaam()]);
        } else {
            echo '{}';
        }*/
        else {
            echo '"message": "Could not find Contact"';
        }
    }
}