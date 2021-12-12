<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $isi['title'] = 'Dashboard';
        $isi['title2'] = '<b>E</b>-Perpus';
        $isi['content'] = 'Dashboard';
        $isi['anggota'] = $this->m_admin->countAnggota();
        $isi['buku']    = $this->m_admin->countBuku();
        $isi['pinjam']  = $this->m_admin->countPinjam();
        $isi['kembali'] = $this->m_admin->countKembali();
        $this->load->view('templates/header', $isi);
        $this->load->view('templates/sidebar', $isi);
        $this->load->view('user/v_admin', $isi);
        $this->load->view('templates/footer');
    }

    public function datauser()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $isi['title'] = 'Data User';
        $isi['title2'] = '<b>E</b>-Perpus';
        $isi['content'] = 'Dashboard';
        $isi['dataanggota'] = $this->m_admin->onlyanggota();
        $isi['dataadmin'] = $this->m_admin->onlyadmin();
        $this->load->view('templates/header', $isi);
        $this->load->view('templates/sidebar', $isi);
        $this->load->view('user/v_datauser', $isi);
        $this->load->view('templates/footer');
    }
}
