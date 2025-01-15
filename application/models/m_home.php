<?php

class M_home extends CI_Model
{
    public function getDataPM()
    {
        $user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('user', 'peminjaman.id_anggota = user.id_anggota');
        $this->db->join('buku', 'peminjaman.id_buku = buku.id_buku');
        $this->db->where('peminjaman.id_anggota', $user['id_anggota']);
        return $this->db->get()->result();
    }

    public function getDataPB()
    {
        $user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->db->select('*');
        $this->db->from('pengembalian');
        $this->db->join('user', 'pengembalian.id_anggota = user.id_anggota');
        $this->db->join('buku', 'pengembalian.id_buku = buku.id_buku');
        $this->db->where('pengembalian.id_anggota', $user['id_anggota']);
        return $this->db->get()->result();
    }
}
