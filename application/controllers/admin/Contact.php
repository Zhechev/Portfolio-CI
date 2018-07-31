<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

    public function edit()
    {
        $data['header_title'] = 'Контакти';
        $this->load->model('admin/Setting_Model');

        if (!empty($this->input->post())) {
            $user = $this->Setting_Model->edit($this->input->post(), 'contacts');
            redirect(site_url('admin/dashboard'));
        }

        $contacts = $this->Setting_Model->get('contacts');

        $data['formEmail'] = array(
            'name'          => 'email',
            'id'            => 'contacts-email',
            'value'         => isset($contacts['email']) ? $contacts['email'] : '',
            'placeholder'   => 'E-mail',
            'class'         => 'form-control'
        );

        $data['formPhone'] = array(
            'name'          => 'phone',
            'id'            => 'contacts-phone',
            'value'         => isset($contacts['phone']) ? $contacts['phone'] : '',
            'placeholder'   => 'Телефон',
            'class'         => 'form-control'
        );

        $data['formAddress'] = array(
            'name'          => 'address',
            'id'            => 'contacts-address',
            'value'         => isset($contacts['address']) ? $contacts['address'] : '',
            'placeholder'   => 'Адрес',
            'class'         => 'form-control'
        );

        $data['formButton'] = array(
            'type' => 'submit',
            'content'=> 'Изпрати',
            'class'=> 'btn btn-primary btn-block btn-flat'
        );

        $data['head'] = $this->load->view('admin/common/head', NULL, TRUE);
        $data['left_column'] = $this->load->view('admin/common/left_column', NULL, TRUE);

        $this->load->view('admin/common/header', $data);
        $this->load->view('admin/contact_form', $data);
        $this->load->view('admin/common/footer');
    }
}