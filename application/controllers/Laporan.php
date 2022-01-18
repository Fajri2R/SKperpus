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
        $this->load->helper('rp');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function dataanggota()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $isi['title'] = 'Laporan Anggota';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Laporan Data Anggota';
            $isi['dataanggota'] = $this->m_laporan->dataAGG();
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('laporan/vlap_anggota', $isi);
            $this->load->view('templates/footer');
        } else {
            redirect('user');
        }
    }

    public function pdf_dagg()
    {
        if ($this->session->userdata('role_id') == '1') {
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
        } else {
            redirect('user');
        }
    }

    public function databuku()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $isi['title'] = 'Laporan Buku';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Laporan Data Buku';
            $isi['databuku'] = $this->m_laporan->dataBK();
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('laporan/vlap_buku', $isi);
            $this->load->view('templates/footer');
        } else {
            redirect('user');
        }
    }

    public function pdf_dabk()
    {
        if ($this->session->userdata('role_id') == '1') {
            $tgl =  date('d-m-Y');
            // title dari pdf
            $data['title_pdf'] = 'Laporan Data Buku';
            $data['laporan'] = 'DATA BUKU';
            $data['databuku'] = $this->m_laporan->dataBK();

            // filename dari pdf ketika didownload
            $file_pdf = 'laporan_data_buku_' . $tgl;

            $html = $this->load->view('laporan/vpdf_buku', $data, true);

            // run dompdf
            $this->pdfgenerator->generate($html, $file_pdf);
        } else {
            redirect('user');
        }
    }

    public function datapeminjaman()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $tgl_awal = $this->input->post('tgl_awal');
            $tgl_akhir = $this->input->post('tgl_akhir');

            $this->session->set_userdata('tanggal_awal', $tgl_awal);
            $this->session->set_userdata('tanggal_akhir', $tgl_akhir);

            if (empty($tgl_awal) || empty($tgl_akhir)) {
                $isi['title'] = 'Laporan Peminjaman Buku';
                $isi['title2'] = '<b>E</b>-Perpus';
                $isi['content'] = 'Laporan Data Peminjaman Buku';
                $isi['datapeminjaman'] = $this->m_laporan->dataPM();
                $this->load->view('templates/header', $isi);
                $this->load->view('templates/sidebar', $isi);
                $this->load->view('laporan/vlap_peminjaman', $isi);
                $this->load->view('templates/footer');
            } else {
                $isi['title'] = 'Laporan Peminjaman Buku';
                $isi['title2'] = '<b>E</b>-Perpus';
                $isi['content'] = 'Laporan Data Peminjaman Buku';
                $isi['datapeminjaman'] = $this->m_laporan->filterDataPM($tgl_awal, $tgl_akhir);
                $this->load->view('templates/header', $isi);
                $this->load->view('templates/sidebar', $isi);
                $this->load->view('laporan/vlap_peminjaman', $isi);
                $this->load->view('templates/footer');
            }
        } else {
            redirect('user');
        }
    }

    public function pdf_dapm()
    {
        if ($this->session->userdata('role_id') == '1') {
            $tgl =  date('d-m-Y');
            // title dari pdf
            $data['title_pdf'] = 'Laporan Data Peminjaman Buku';
            $data['laporan'] = 'DATA PEMINJAMAN BUKU';
            $data['datapeminjaman'] = $this->m_laporan->dataPM();

            // filename dari pdf ketika didownload
            $file_pdf = 'laporan_data_peminjaman_buku_' . $tgl;

            $html = $this->load->view('laporan/vpdf_peminjaman', $data, true);

            // run dompdf
            $this->pdfgenerator->generate($html, $file_pdf);
        } else {
            redirect('user');
        }
    }

    public function datapengembalian()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $tgl_awal = $this->input->post('tgl_awal');
            $tgl_akhir = $this->input->post('tgl_akhir');

            $this->session->set_userdata('tanggal_awal', $tgl_awal);
            $this->session->set_userdata('tanggal_akhir', $tgl_akhir);

            if (empty($tgl_awal) || empty($tgl_akhir)) {
                $isi['title'] = 'Laporan Pengembalian Buku';
                $isi['title2'] = '<b>E</b>-Perpus';
                $isi['content'] = 'Laporan Data Pengembalian Buku';
                $isi['datapengembalian'] = $this->m_laporan->dataPB();
                $this->load->view('templates/header', $isi);
                $this->load->view('templates/sidebar', $isi);
                $this->load->view('laporan/vlap_pengembalian', $isi);
                $this->load->view('templates/footer');
            } else {
                $isi['title'] = 'Laporan Pengembalian Buku';
                $isi['title2'] = '<b>E</b>-Perpus';
                $isi['content'] = 'Laporan Data Pengembalian Buku';
                $isi['datapengembalian'] = $this->m_laporan->filterDataPB($tgl_awal, $tgl_akhir);
                $this->load->view('templates/header', $isi);
                $this->load->view('templates/sidebar', $isi);
                $this->load->view('laporan/vlap_pengembalian', $isi);
                $this->load->view('templates/footer');
            }
        } else {
            redirect('user');
        }
    }

    public function pdf_dapb()
    {
        if ($this->session->userdata('role_id') == '1') {
            $tgl =  date('d-m-Y');
            // title dari pdf
            $data['title_pdf'] = 'Laporan Data Pengembalian Buku';
            $data['laporan'] = 'DATA PENGEMBALIAN BUKU';
            $data['datapengembalian'] = $this->m_laporan->dataPB();

            // filename dari pdf ketika didownload
            $file_pdf = 'laporan_data_pengembalian_buku_' . $tgl;

            $html = $this->load->view('laporan/vpdf_pengembalian', $data, true);

            // run dompdf
            $this->pdfgenerator->generate($html, $file_pdf);
        } else {
            redirect('user');
        }
    }


    // public function test()
    // {
    //     $isi['laporan'] = 'Data Anggota';
    //     $this->load->view('laporan/tester', $isi);
    // }
}
