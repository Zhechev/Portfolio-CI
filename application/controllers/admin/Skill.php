<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skill extends MY_Controller {

    public function showAll()
    {
        $data['header_title'] = 'Умения';
        $this->load->model('admin/Skill_Model');

        $data['skills'] = $this->Skill_Model->getAllSkills();

        $data['head'] = $this->load->view('admin/common/head', NULL, TRUE);
        $data['left_column'] = $this->load->view('admin/common/left_column', NULL, TRUE);

        $this->load->view('admin/common/header', $data);
        $this->load->view('admin/skill/skill_list', $data);
        $this->load->view('admin/common/footer');
    }

    public function add()
    {
        $data['header_title'] = 'Умения - Добави';
        $this->load->model('admin/Skill_Model');

        if (!empty($this->input->post())) {
            $user = $this->Skill_Model->addSkill($this->input->post());
            redirect(site_url('admin/skill/showAll'));
        }

        $this->getForm();
    }

    public function edit($id = '')
    {
        $data['header_title'] = 'Умения - Добави';
        $this->load->model('admin/Skill_Model');

        if (!empty($this->input->post())) {

            $config['upload_path'] = './assets/img/skills/'; //Use relative or absolute path
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100';
            $config['max_width'] = '5000';
            $config['max_height'] = '5000';
            $config['overwrite'] = FALSE;
            $this->upload->initialize($config);

            $this->upload->do_upload('image');
            $uploadData = $this->upload->data();
            $image = $uploadData['file_name'];

            $user = $this->Skill_Model->editSkill($this->input->post(), $image, $id);
            redirect(site_url('admin/skill/showAll'));
        }

        $this->getForm($id);
    }

    public function getForm($id = '')
    {
        $data['header_title'] = 'Умения';

        if (!empty($id)) {
            $skill = $this->Skill_Model->getSkill($id);
            $data['action'] = 'admin/skill/edit/'.$id;
        } else {
            $data['action'] = 'admin/skill/add';
        }

        $data['formName'] = array(
            'name'          => 'name',
            'id'            => 'name-skill',
            'value'         => isset($skill['name']) ? $skill['name'] : '',
            'placeholder'   => 'Име',
            'class'         => 'form-control'
        );

        $data['formLink'] = array(
            'name'          => 'link',
            'id'            => 'link-skill',
            'value'         => isset($skill['link']) ? $skill['link'] : '',
            'placeholder'   => 'Линк',
            'class'         => 'form-control'
        );

        $data['formImage'] = !empty($skill['image']) ? $skill['image'] : 'blog.png';


        $data['formButton'] = array(
            'type' => 'submit',
            'content'=> 'Запази',
            'class'=> 'btn btn-primary btn-block btn-flat'
        );

        $data['head'] = $this->load->view('admin/common/head', NULL, TRUE);
        $data['left_column'] = $this->load->view('admin/common/left_column', NULL, TRUE);

        $this->load->view('admin/common/header', $data);
        $this->load->view('admin/skill/skill_form', $data);
        $this->load->view('admin/common/footer');
    }

    public function delete($id)
    {
        $this->load->model('admin/Skill_Model');
        $user = $this->Skill_Model->deletePost($id);
        redirect(site_url('admin/скилл/showAll'));
    }
}