<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /**
     * function will check whether the code supplied in the URL
     * matches that in the database. If it does,
     *  it returns true or false if it doesn't.
     */
    function does_code_match($code,$email){
        $query = "SELECT COUNT(*) AS `count`
                  FROM `users`
                  WHERE `usr_pwd_change_code` = ? 
                  AND `usr_email` = ? ";
        $res = $this->db->query($query,array($code,$email));
        foreach($res->result() as $row){
            $count = $row->count; 
        }
        if($count == 1){
            return true;
        } else {
            return false;
        }
    }
}

?>