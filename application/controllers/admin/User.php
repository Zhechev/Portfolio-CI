<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

    public function login()
    {
        $data['header_title'] = 'Вход';
        $this->load->model('admin/User_Model');

        if (!empty($this->input->post())) {
            $user = $this->User_Model->login($this->input->post('username'), $this->input->post('password'));
            if($user) {
                $this->session->set_userdata('isLoggedIn', $user['id']);
                redirect(site_url('admin/dashboard'));
            }
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

        $this->load->view('admin/common/header', $data);
        $this->load->view('admin/login', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('isLoggedIn');
        redirect(site_url('admin/user/login'));
    }
}