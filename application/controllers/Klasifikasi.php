<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Klasifikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $isi['title'] = 'Data Klasifikasi';
        $isi['title2'] = '<b>E</b>-Perpus';
        $isi['content'] = 'Daftar Data Klasifikasi';
        $this->load->view('templates/header', $isi);
        $this->load->view('templates/sidebar', $isi);
        $this->load->view('klasifikasi/v_klasifikasi', $isi);
        $this->load->view('templates/footer');
    }
}
