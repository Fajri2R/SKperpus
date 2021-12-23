<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('rp');
        $this->load->helper('tgl_indo');
        $this->load->model('m_pengembalian');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $isi['title'] = 'Data Pengembalian';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Daftar Data Pengembalian';
            $isi['datapb'] = $this->m_pengembalian->getDataAdmin();
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('pengembalian/v_pengembalian', $isi);
            $this->load->view('templates/footer');
        } else {
            $isi['title'] = 'Data Pengembalian';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Daftar Data Pengembalian';
            $isi['datapb'] = $this->m_pengembalian->getDataUser();
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('pengembalian/v_uspb', $isi);
            $this->load->view('templates/footer');
        }
    }

    public function hapus($id)
    {
        if ($this->session->userdata('role_id') == '1') {
            $query = $this->m_pengembalian->hapus($id);
            if ($query = true) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Data pengembalian berhasil dihapus
          </div>');
                redirect('pengembalian');
            }
        } else {
            redirect('user');
        }
    }
}
