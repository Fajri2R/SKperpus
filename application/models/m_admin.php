<?php

class M_admin extends CI_Model
{
    public function id_anggota()
    {
        $this->db->select('RIGHT(user.id_anggota,3) as kode', FALSE);
        $this->db->order_by('id_anggota', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('user');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "AGG" . $kodemax;
        return $kodejadi;
    }

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
        $this->db->from('user');
        $this->db->where('role_id =', 2);
        return $this->db->get()->result();
    }

    public function onlyadmin()
    {
        $user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_id =', 1);
        $this->db->where('username !=', $user['username']);
        return $this->db->get()->result();
    }

    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_anggota', $id);
        return $this->db->get()->row_array();
    }

    public function hapus($id)
    {
        $this->db->where('id_anggota', $id);
        $this->db->delete('user');
    }

    public function editid()
    {
        $this->db->select('id_anggota');
        $this->db->from('user');
        $this->db->where('role_id =', 2);
        return $this->db->get()->result();
    }

    public function update($id_anggota, $data)
    {
        $this->db->where('id_anggota', $id_anggota);
        $this->db->update('user', $data);
    }
}
