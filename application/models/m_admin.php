<?php

class M_admin extends CI_Model
{
    public function countAnggota()
    {
        $this->db->from('user');
        $this->db->where('role_id =', 2);
        return $this->db->count_all_results();
    }

    public function countBuku()
    {
        return $this->db->count_all('buku');
    }

    public function countPinjam()
    {
        return $this->db->count_all('peminjaman');
    }

    public function countKembali()
    {
        return $this->db->count_all('pengembalian');
    }

    public function onlyanggota()
    {
        $this->db->select('*');
        $this->db->from('user_info');
        $this->db->join('user', 'user.id = user_info.id');
        $this->db->where('role_id =', 2);
        return $this->db->get()->result();
    }

    public function onlyadmin()
    {
        $this->db->select('*');
        $this->db->from('user_info');
        $this->db->join('user', 'user.id = user_info.id');
        $this->db->where('role_id =', 1);
        return $this->db->get()->result();
    }
}
