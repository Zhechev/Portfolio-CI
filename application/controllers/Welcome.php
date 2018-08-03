<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
	    $this->load->model('admin/Setting_Model');
        $this->load->model('admin/Blog_Model');
	    $data['contacts'] = $this->Setting_Model->get('contacts');
        $posts = $this->Blog_Model->getLastPosts();

        foreach ($posts as $post) {
            $data['posts'][] = array(
                'title' => $post['title'],
                'content' => $post['content'],
                'image' => base_url('assets/img/blog/' . $post['image'])
            );
        }

        //var_dump($data['posts']); exit;

		$this->load->view('catalog/home', $data);
	}
}