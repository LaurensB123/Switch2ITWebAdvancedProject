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
    public function readContacts();

//CRUD
    public function addContact($id); //nieuw contact toevoegen in database
    public function removeContact($id);
}