<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_laporan');
        $this->load->library('pdfgenerator');
        $this->load->helper('tgl_indo_helper');
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
        $isi['dataanggota'] = $this->m_laporan->dataAGG();
        $this->load->view('templates/header', $isi);
        $this->load->view('templates/sidebar', $isi);
        $this->load->view('laporan/vlap_anggota', $isi);
        $this->load->view('templates/footer');
    }

    public function test()
    {
        $isi['laporan'] = 'Data Anggota';
        $this->load->view('laporan/tester', $isi);
    }

    public function pdf_dagg()
    {
        $tgl =  date('d-m-Y');
        // title dari pdf
        $data['title_pdf'] = 'Laporan Data Anggota';
        $data['laporan'] = 'DATA ANGGOTA';
        $data['dataanggota'] = $this->m_laporan->dataAGG();

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_data_anggota_' . $tgl;

        $html = $this->load->view('laporan/vpdf_anggota', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf);
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
