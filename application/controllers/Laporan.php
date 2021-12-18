<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function dataanggota()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $isi['title'] = 'Laporan Anggota';
        $isi['title2'] = '<b>E</b>-Perpus';
        $isi['content'] = 'Laporan Data Anggota';
        $this->load->view('templates/header', $isi);
        $this->load->view('templates/sidebar', $isi);
        $this->load->view('laporan/vlap_anggota', $isi);
        $this->load->view('templates/footer');
    }

    public function databuku()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $isi['title'] = 'Laporan Buku';
        $isi['title2'] = '<b>E</b>-Perpus';
        $isi['content'] = 'Laporan Data Buku';
        $this->load->view('templates/header', $isi);
        $this->load->view('templates/sidebar', $isi);
        $this->load->view('laporan/vlap_buku', $isi);
        $this->load->view('templates/footer');
    }

    public function datapeminjaman()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $isi['title'] = 'Laporan Peminjaman';
        $isi['title2'] = '<b>E</b>-Perpus';
        $isi['content'] = 'Laporan Data Peminjaman';
        $this->load->view('templates/header', $isi);
        $this->load->view('templates/sidebar', $isi);
        $this->load->view('laporan/vlap_peminjaman', $isi);
        $this->load->view('templates/footer');
    }

    public function datapengembalian()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $isi['title'] = 'Laporan Pengembalian';
        $isi['title2'] = '<b>E</b>-Perpus';
        $isi['content'] = 'Laporan Data Pengembalian';
        $this->load->view('templates/header', $isi);
        $this->load->view('templates/sidebar', $isi);
        $this->load->view('laporan/vlap_pengembalian', $isi);
        $this->load->view('templates/footer');
    }
}
