<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index()
    {
        $this->load->helper('form');
        $data['formEmail'] = array(
            'name'          => 'email',
            'value'         => '',
            'placeholder'   => 'Email',
            'class'         => 'form-control'
        );

        $data['formPassword'] = array(
            'name'          => 'password',
            'id'            => 'password',
            'value'         => '',
            'placeholder'   => 'Password',
            'class'         => 'form-control'
        );
        $this->load->view('admin/zz', $data);
    }
}