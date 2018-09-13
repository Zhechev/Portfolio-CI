<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

    public function index()
    {
        $this->load->model('admin/Setting_Model');
        $this->load->model('admin/Blog_Model');
        $this->load->model('admin/Skill_Model');

        $data['contacts'] = $this->Setting_Model->get('contacts');
        $posts = $this->Blog_Model->getLastPosts();

        foreach ($posts as $post) {
            $data['posts'][] = array(
                'title' => $post['title'],
                'content' => $post['content'],
                'image' => base_url('assets/img/blog/' . $post['image'])
            );
        }

        $data['skills'] = $this->Skill_Model->getAllSkills();

        $data['about'] = $this->Setting_Model->get('about');
        $data['downloadLink'] = base_url('application/views/catalog/download.php');

        $this->load->view('catalog/home', $data);
    }
}