<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index()
    {
        $this->load->model('admin/Blog_Model');

        $data['posts'] = $this->Blog_Model->getAllPosts();

        $this->load->view('catalog/blog', $data);
    }
}