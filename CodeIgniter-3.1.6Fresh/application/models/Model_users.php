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
        $this->load->database();
    }

    function addContacten($data) {
        $this->load->database();
        $this->db->insert('Contacten', $data);

    }

    function getNames(){
        $this->load->database();
        $query = $this->db->query('SELECT name FROM Contacten');

        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }

    function getContacten(){
        $this->load->database();
        $this->db->select("*");
        $this->db->from("Contacten");
        $query = $this->db->get();
        return $query;
    } }