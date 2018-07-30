<?php

class User_Model extends CI_Model {

    public function login($username, $password)
    {
        $this->db->select()->from('users')->where('username', $username)->where('password', $password);
        $query = $this->db->get();
        return $query->num_rows() > 0 ? $query->row_array() : false;
    }
}