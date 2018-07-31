<?php

class Setting_Model extends CI_Model {
    public function edit($data, $key)
    {
        $data = array(
            'value' => serialize($data),
        );

        $this->db->where('key', $key);
        $this->db->update('settings', $data);
    }

    public function get($key)
    {
        $this->db->select()->from('settings')->where('key', $key);
        $query = $this->db->get();
        return unserialize($query->row_array()['value']);
    }
}