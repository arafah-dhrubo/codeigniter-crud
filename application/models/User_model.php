<?php 
class User_model extends CI_Model{
    function create($data){
        var_dump($data);
        $this->db->insert("employee", $data);
    }
}
?>