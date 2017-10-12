<?php
/**
 * Created by PhpStorm.
 * User: laure
 * Date: 12/10/2017
 * Time: 11:12
 */

class Contact_Model extends CI_Model
{
 public $id;
 public $name;
 public $email;

public function get_all_contacten() {
    $db = $this->load->database();
    $query = $this->$db->get('entries',10);
    return $query->result();
}


}