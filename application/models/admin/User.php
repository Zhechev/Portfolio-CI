<?php

class User extends CI_Model {

    public function login($username)
    {
        $this->db->select()->from('users')->where('username', $username);
        $query = $this->db->get();
        return $query->num_rows() > 0 ? true : false;
    }
}