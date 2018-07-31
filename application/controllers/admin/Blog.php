<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {

    public function showAll()
    {
        $data['header_title'] = 'Блог';
        $this->load->model('admin/Blog_Model');

        $data['posts'] = $this->Blog_Model->getAllPosts();

        $data['head'] = $this->load->view('admin/common/head', NULL, TRUE);
        $data['left_column'] = $this->load->view('admin/common/left_column', NULL, TRUE);

        $this->load->view('admin/common/header', $data);
        $this->load->view('admin/blog/blog_list', $data);
        $this->load->view('admin/common/footer');
    }

    public function add()
    {
        $data['header_title'] = 'Блог - Добави';
        $this->load->model('admin/Blog_Model');

        if (!empty($this->input->post())) {
            $user = $this->Blog_Model->addPost($this->input->post());
            redirect(site_url('admin/blog/showAll'));
        }

        $this->getForm();
    }

    public function edit($id = '')
    {
        $data['header_title'] = 'Блог - Добави';
        $this->load->model('admin/Blog_Model');

        if (!empty($this->input->post())) {
            $user = $this->Blog_Model->editPost($this->input->post(), $id);
            redirect(site_url('admin/blog/showAll'));
        }

        $this->getForm($id);
    }

    public function getForm($id = '')
    {
        if (!empty($id)) {
            $post = $this->Blog_Model->getPost($id);
            $data['action'] = 'admin/blog/edit/'.$id;
        } else {
            $data['action'] = 'admin/blog/add';
        }

        $data['formTitle'] = array(
            'name'          => 'title',
            'id'            => 'content-title',
            'value'         => isset($post['title']) ? $post['title'] : '',
            'placeholder'   => 'Заглавие',
            'class'         => 'form-control'
        );

        $data['formContent'] = array(
            'name'          => 'content',
            'id'            => 'content-blog',
            'value'         => isset($post['content']) ? $post['content'] : '',
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
        $this->load->view('admin/blog/blog_form', $data);
        $this->load->view('admin/common/footer');
    }

    public function delete($id)
    {
        $this->load->model('admin/Blog_Model');
        $user = $this->Blog_Model->deletePost($id);
        redirect(site_url('admin/blog/showAll'));
    }
}