<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengarang extends CI_Controller
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
        $isi['title'] = 'Daftar Data Pengarang';
        $isi['title2'] = '<b>E</b>-Perpus';
        $isi['content'] = 'Daftar Data Pengarang';
        $this->load->view('templates/header', $isi);
        $this->load->view('templates/sidebar', $isi);
        $this->load->view('pengarang/v_pengarang', $isi);
        $this->load->view('templates/footer');
    }
}
