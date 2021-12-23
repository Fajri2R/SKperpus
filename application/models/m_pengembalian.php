<?php

class M_pengembalian extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getDataAdmin()
    {
        $this->db->select('*');
        $this->db->from('pengembalian');
        $this->db->join('user', 'pengembalian.id_anggota = user.id_anggota');
        $this->db->join('buku', 'pengembalian.id_buku = buku.id_buku');
        return $this->db->get()->result();
    }

    public function getDataUser()
    {
        $user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->db->select('*');
        $this->db->from('pengembalian');
        $this->db->join('user', 'pengembalian.id_anggota = user.id_anggota');
        $this->db->join('buku', 'pengembalian.id_buku = buku.id_buku');
        $this->db->where('pengembalian.id_anggota', $user['id_anggota']);
        return $this->db->get()->result();
    }

    public function hapus($id)
    {
        $this->db->where('id_pengembalian', $id);
        $this->db->delete('pengembalian');
    }
}
