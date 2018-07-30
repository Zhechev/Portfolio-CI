<?php

class Blog_Model extends CI_Model {

    public function getAllPosts()
    {
        $this->db->select()->from('blog');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function addPost($data)
    {
        $data = array(
            'title' => $data['title'],
            'content' => $data['content']
        );

        $this->db->insert('blog', $data);

    }

    public function getPost($id)
    {
        $this->db->select()->from('blog')->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function editPost($inputData)
    {
        $data = array(
            'title' => $inputData['title'],
            'content' => $inputData['content']
        );

        $this->db->where('id', $inputData['id']);
        $this->db->update('blog', $data);
    }

    public function deletePost($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('blog');
    }
}