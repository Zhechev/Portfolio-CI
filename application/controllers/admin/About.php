<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {

    public function edit()
    {
        $data['header_title'] = 'За мен';
        $this->load->model('admin/Setting_Model');

        if (!empty($this->input->post())) {
            $user = $this->Setting_Model->edit($this->input->post(), 'about');
            redirect(site_url('admin/dashboard'));
        }

        $about = $this->Setting_Model->get('about');

        $data['formSubtitle'] = array(
            'name'          => 'subtitle',
            'id'            => 'about-subtitle',
            'value'         => isset($about['subtitle']) ? $about['subtitle'] : '',
            'placeholder'   => 'Подзаглавие',
            'class'         => 'form-control'
        );

        $data['formContent'] = array(
            'name'          => 'content',
            'id'            => 'about-content',
            'value'         => isset($about['content']) ? $about['content'] : '',
            'placeholder'   => 'Съдържание',
        );

        $data['formButton'] = array(
            'type' => 'submit',
            'content'=> 'Изпрати',
            'class'=> 'btn btn-primary btn-block btn-flat'
        );

        $data['head'] = $this->load->view('admin/common/head', NULL, TRUE);
        $data['left_column'] = $this->load->view('admin/common/left_column', NULL, TRUE);

        $this->load->view('admin/common/header', $data);
        $this->load->view('admin/about_form', $data);
        $this->load->view('admin/common/footer');
    }
}