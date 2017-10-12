<?php

/**
 * Created by PhpStorm.
 * User: Hannah Patronoudis
 * Date: 12/10/2017
 * Time: 11:00
 */
class Model_users extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getNames(){
        $query = $this->db->query('SELECT name FROM Contacten');

        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }

    function getContacten(){
        $query = $this->db->query('SELECT * FROM Contacten');

        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }

    }

}