<?php

class M_laporan extends CI_Model
{
    public function dataAGG()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_id =', 2);
        return $this->db->get()->result();
    }

    public function dataBK()
    {
        $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('pengarang', 'buku.id_pengarang = pengarang.id_pengarang');
        $this->db->join('penerbit', 'buku.id_penerbit = penerbit.id_penerbit');
        return $this->db->get()->result();
    }

    public function dataPM()
    {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('user', 'peminjaman.id_anggota = user.id_anggota');
        $this->db->join('buku', 'peminjaman.id_buku = buku.id_buku');
        return $this->db->get()->result();
    }

    public function filterDataPM($tgl_awal, $tgl_akhir)
    {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('user', 'peminjaman.id_anggota = user.id_anggota');
        $this->db->join('buku', 'peminjaman.id_buku = buku.id_buku');
        $this->db->where('peminjaman.tgl_pinjam >=', $tgl_awal);
        $this->db->where('peminjaman.tgl_kembali <=', $tgl_akhir);
        return $this->db->get()->result();
    }

    public function dataPB()
    {
        $this->db->select('*');
        $this->db->from('pengembalian');
        $this->db->join('user', 'pengembalian.id_anggota = user.id_anggota');
        $this->db->join('buku', 'pengembalian.id_buku = buku.id_buku');
        return $this->db->get()->result();
    }

    public function filterDataPB($tgl_awal, $tgl_akhir)
    {
        $this->db->select('*');
        $this->db->from('pengembalian');
        $this->db->join('user', 'pengembalian.id_anggota = user.id_anggota');
        $this->db->join('buku', 'pengembalian.id_buku = buku.id_buku');
        $this->db->where('pengembalian.tgl_kembali >=', $tgl_awal);
        $this->db->where('pengembalian.tgl_kembalikan <=', $tgl_akhir);
        return $this->db->get()->result();
    }
}
