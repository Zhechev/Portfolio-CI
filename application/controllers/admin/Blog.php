<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {

    public function showAll()
    {
        $data['header_title'] = 'Блог';
        $this->load->model('admin/Blog_Model');

        $data['posts'] = $this->Blog_Model->getAllPosts();

        $data['head'] = $this->load->view('admin/head', NULL, TRUE);
        $data['left_column'] = $this->load->view('admin/left_column', NULL, TRUE);

        $this->load->view('admin/header', $data);
        $this->load->view('admin/blog_list', $data);
        $this->load->view('admin/footer');
    }

    public function add()
    {
        $data['header_title'] = 'Блог - Добави';
        $this->load->model('admin/Blog_Model');

        if (!empty($this->input->post())) {
            echo '33'; exit;
            $user = $this->Blog_Model->addPost($this->input->post());
        }

        $data['formId'] = array(
            'name'          => 'id',
            'id'            => 'id',
            'value'         => isset($post['id']) ? $post['id'] : '',
            'placeholder'   => 'ID',
            'class'         => 'form-control',
            'readonly'      => 'readonly'
        );

        $data['formTitle'] = array(
            'name'          => 'title',
            'id'            => 'content-title',
            'value'         => '',
            'placeholder'   => 'Заглавие',
            'class'         => 'form-control'
        );

        $data['formContent'] = array(
            'name'          => 'content',
            'id'            => 'content-blog',
            'value'         => '',
            'placeholder'   => 'Съдържание',
        );

        $data['formButton'] = array(
            'type' => 'submit',
            'content'=> 'Изпрати',
            'class'=> 'btn btn-primary btn-block btn-flat'
        );

        $data['head'] = $this->load->view('admin/head', NULL, TRUE);
        $data['left_column'] = $this->load->view('admin/left_column', NULL, TRUE);

        $this->load->view('admin/header', $data);
        $this->load->view('admin/blog_form', $data);
        $this->load->view('admin/footer');
    }

    public function edit($id = '')
    {
        $data['header_title'] = 'Блог - Добави';
        $this->load->model('admin/Blog_Model');

        if (!empty($this->input->post())) {
            $user = $this->Blog_Model->editPost($this->input->post());
        }

        $post = $this->Blog_Model->getPost($id);

        $data['formId'] = array(
            'name'          => 'id',
            'id'            => 'id',
            'value'         => $post['id'],
            'placeholder'   => 'Заглавие',
            'class'         => 'form-control',
            'readonly'      => 'readonly'
        );

        $data['formTitle'] = array(
            'name'          => 'title',
            'id'            => 'content-title',
            'value'         => $post['title'],
            'placeholder'   => 'Заглавие',
            'class'         => 'form-control'
        );

        $data['formContent'] = array(
            'name'          => 'content',
            'id'            => 'content-blog',
            'value'         => $post['content'],
            'placeholder'   => 'Съдържание',
        );

        $data['formButton'] = array(
            'type' => 'submit',
            'content'=> 'Изпрати',
            'class'=> 'btn btn-primary btn-block btn-flat'
        );

        $data['head'] = $this->load->view('admin/head', NULL, TRUE);
        $data['left_column'] = $this->load->view('admin/left_column', NULL, TRUE);

        $this->load->view('admin/header', $data);
        $this->load->view('admin/blog_form', $data);
        $this->load->view('admin/footer');
    }

    public function delete($id)
    {
        $this->load->model('admin/Blog_Model');
        $user = $this->Blog_Model->deletePost($id);
        redirect(site_url('admin/blog/showAll'));
    }
}