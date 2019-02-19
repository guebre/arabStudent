<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model 
{
    function __construct() 
    {
        parent::__construct();
    }
    public function register_user($data)
    {
        if ($this->db->insert('users', $data)) {
          return $this->db->insert_id();
        } else {
           return false;
        }
    }

    public function register_user_infos($user_infos)
    {
        if ($this->db->insert('users_infos', $user_infos)) {
          return true;
        } else {
           return false;
        }
    }
}

?>