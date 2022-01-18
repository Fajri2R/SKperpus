<?php

class M_id extends CI_Model
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

    public function id_pengarang()
    {
        $this->db->select('RIGHT(pengarang.id_pengarang,3) as kode', FALSE);
        $this->db->order_by('id_pengarang', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pengarang');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "PGG" . $kodemax;
        return $kodejadi;
    }

    public function id_penerbit()
    {
        $this->db->select('RIGHT(penerbit.id_penerbit,3) as kode', FALSE);
        $this->db->order_by('id_penerbit', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('penerbit');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "PBT" . $kodemax;
        return $kodejadi;
    }

    public function id_buku()
    {
        $this->db->select('RIGHT(buku.id_buku,3) as kode', FALSE);
        $this->db->order_by('id_buku', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('buku');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "BK" . $kodemax;
        return $kodejadi;
    }

    public function id_peminjaman()
    {
        $this->db->select('RIGHT(peminjaman.id_peminjaman,3) as kode', FALSE);
        $this->db->order_by('id_peminjaman', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('peminjaman');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "PM" . $kodemax;
        return $kodejadi;
    }

    public function id_pengembalian()
    {
        $this->db->select('RIGHT(pengembalian.id_pengembalian,3) as kode', FALSE);
        $this->db->order_by('id_pengembalian', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pengembalian');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "PB" . $kodemax;
        return $kodejadi;
    }


    public function no_induk()
    {
        $this->db->select('LEFT(buku.nomor_induk,3) as kode', FALSE);
        $this->db->order_by('nomor_induk', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('buku');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        // $if = $this->input->post('sumber') == "B" ? "/B" : "/NB";
        // $kodejadi = $kodemax . $if . "/MUHI/" . date('Y');
        return $kodemax;
    }
}
