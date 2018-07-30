<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function index()
    {
        $data['header_title'] = 'Dashboard';
        if (!$this->isLoggedIn()) {
            redirect(site_url('admin/user/login'));
        }

        $data['head'] = $this->load->view('admin/head', NULL, TRUE);
        $data['left_column'] = $this->load->view('admin/left_column', NULL, TRUE);

        $this->load->view('admin/header', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/footer');
    }
}