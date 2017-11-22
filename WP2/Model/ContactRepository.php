<?php
/**
 * Created by PhpStorm.
 * User: 11305369
 * Date: 22/11/2017
 * Time: 18:02
 */

namespace Model;

interface ContactRepository {
    public function readContacts();

    //CRUD
    public function addContact($id);
    public function removeContact($id);
}