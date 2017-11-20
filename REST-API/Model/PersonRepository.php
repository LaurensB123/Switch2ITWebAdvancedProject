<?php

/**
 * Created by PhpStorm.
 * User: Hannah Patronoudis
 * Date: 16/11/2017
 * Time: 12:45
 */

namespace Model;

interface PersonRepository
{
<<<<<<< HEAD
    public function readContacts();
=======
    public function findAllPersons();
>>>>>>> 91f7f6ed0d4b665e24b665cb8d2fa7737a9bd4c1

//CRUD
    public function addContact($id); //nieuw contact toevoegen in database
    public function removeContact($id);
}