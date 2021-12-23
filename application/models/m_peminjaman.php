<?php

class M_peminjaman extends CI_Model
{
    public function getDataPM()
    {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('user', 'peminjaman.id_anggota = user.id_anggota');
        $this->db->join('buku', 'peminjaman.id_buku = buku.id_buku');
        return $this->db->get()->result();
    }

    public function getDataUSPM()
    {
        $user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('user', 'peminjaman.id_anggota = user.id_anggota');
        $this->db->join('buku', 'peminjaman.id_buku = buku.id_buku');
        $this->db->where('peminjaman.id_anggota', $user['id_anggota']);
        return $this->db->get()->result();
    }

    public function anggota()
    {
        $this->db->select('id_anggota, name, role_id');
        $this->db->from('user');
        $this->db->where('role_id =', 2);
        return $this->db->get()->result();
    }

    public function hapus($id)
    {
        $this->db->where('id_peminjaman', $id);
        $this->db->delete('peminjaman');
    }

    public function getDataById_pm($id)
    {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('user', 'peminjaman.id_anggota = user.id_anggota');
        $this->db->join('buku', 'peminjaman.id_buku = buku.id_buku');
        $this->db->where('peminjaman.id_peminjaman', $id);
        return $this->db->get()->row_array();
    }

    public function deletePm($id)
    {
        $this->db->where('id_peminjaman', $id);
        $this->db->delete('peminjaman');
    }
}
