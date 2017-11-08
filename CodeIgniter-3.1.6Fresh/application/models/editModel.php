<?php

class editModel extends CI_Model{

    public function retriveData($id)
    {

        $data =	$this->db->get_where('Contacten',array('ID'=>$id));
        $this->db->delete('Contacten',array('ID'=>$id));
        return $data->result();

    }

    public function editData($data)

    {

        $this->db->insert('Contacten',$data);
        echo '<script>alert("You have update the data successfully.");</script>';

    }


}

?>