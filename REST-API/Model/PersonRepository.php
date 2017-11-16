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
    public function findAllPersons();

//CRUD
    public function add($id); //nieuwe persoon toevoegen in database
    public function remove($id);
    public function update($id);
}