<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_buku');
        $this->load->model('m_home');
        $this->load->helper('tgl_indo_helper');
        $this->load->helper('rp');
    }

    public function index()
    {
        $this->goToDefaultPage();
        $username = $this->input->post('username');
        $this->session->set_userdata('username', $username);

        if (empty($username)) {
            $isi['title'] = 'Perpustakaan SMK Muhammadiyah Kota Jambi';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['databuku']    = $this->m_buku->get_data_buku();
            $this->load->view('v_home', $isi);
        } else {
            $isi['title'] = 'Perpustakaan SMK Muhammadiyah Kota Jambi';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['databuku']    = $this->m_buku->get_data_buku();
            $isi['datapm'] = $this->m_home->getDataPM();
            $isi['datapb'] = $this->m_home->getDataPB();
            $this->load->view('v_home', $isi);
        }
    }

    public function goToDefaultPage()
    {
        if ($this->session->userdata('role_id') == '1') {
            redirect('admin');
        } else if ($this->session->userdata('role_id') == '2') {
            redirect('user');
        }
    }
}
