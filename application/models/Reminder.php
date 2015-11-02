<?php 
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Reminder extends CI_Model {
    
    public function insert($data){
        $this->db->insert('reminders', $data);
        return true;
    }

    
}