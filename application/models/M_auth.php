<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model 
{
    public function CekLogin($table,$pk,$email)
    {
        //pk = primary key
        $this->db->where($pk, $email);
        return $this->db->get($table)->row_array(); 
    }
}