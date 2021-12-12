<?php

class M_profile extends CI_Model
{
    public function getDataUser()
    {
        $user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->db->select('*');
        $this->db->from('user_info');
        $this->db->join('user', 'user.id = user_info.id');
        $this->db->where('user_info.id', $user['id']);
        return $this->db->get()->row_array();
    }
}
