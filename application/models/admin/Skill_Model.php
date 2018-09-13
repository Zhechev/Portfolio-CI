<?php

class Skill_Model extends CI_Model {

    public function getAllSkills()
    {
        $this->db->select()->from('skill');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function addSkill($data)
    {
        $data = array(
            'name' => $data['name'],
            'link' => $data['link']
        );

        $this->db->insert('skill', $data);
    }

    public function getSkill($id)
    {
        $this->db->select()->from('skill')->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function editSkill($inputData, $image, $id)
    {
        $data = array(
            'name' => $inputData['name'],
            'link' => $inputData['link'],
            'image' => $image
        );

        $this->db->where('id', $id);
        $this->db->update('skill', $data);
    }

    public function deleteSkill($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('skill');
    }
}