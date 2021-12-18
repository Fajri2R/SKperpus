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

    // public function id_anggota()
    // {
    //     $this->db->select('RIGHT(user.id_anggota,3) as kode', FALSE);
    //     $this->db->order_by('id_anggota', 'DESC');
    //     $this->db->limit(1);
    //     $query = $this->db->get('user');
    //     if ($query->num_rows() <> 0) {
    //         $data = $query->row();
    //         $kode = intval($data->kode) + 1;
    //     } else {
    //         $kode = 1;
    //     }

    //     $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
    //     $kodejadi = "AGG" . $kodemax;
    //     return $kodejadi;
    // }
}
