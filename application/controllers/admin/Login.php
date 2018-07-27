<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index()
    {
        $this->load->model('admin/User');
        $this->load->helper('form');

        if (!empty($this->input->post())) {
            $this->User->login($this->input->post('username'));
        }


        $data['formUsername'] = array(
            'name'          => 'username',
            'value'         => '',
            'placeholder'   => 'Username',
            'class'         => 'form-control'
        );

        $data['formPassword'] = array(
            'name'          => 'password',
            'id'            => 'password',
            'value'         => '',
            'placeholder'   => 'Password',
            'class'         => 'form-control'
        );

        $data['formButton'] = array(
            'type' => 'submit',
            'content'=> 'Вход',
            'class'=> 'btn btn-primary btn-block btn-flat'
        );

        $this->load->view('admin/zz', $data);
    }
}