<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ubahpw extends CI_Controller
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
        $isi['title'] = 'Ganti Password';
        $isi['title2'] = '<b>E</b>-Perpus';
        $isi['content'] = 'Ganti Password';
        $this->load->view('templates/header', $isi);
        $this->load->view('templates/sidebar', $isi);
        $this->load->view('user/v_ubahpw', $isi);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('pwold', 'Password Lama', 'required|trim', [
            'required'      => 'Kamu belum menginput %s',
        ]);
        $this->form_validation->set_rules('pwnew', 'Password Baru', 'required|trim|min_length[8]|matches[pwnew2]', [
            'required' => 'Kamu belum menginput %s',
            'min_length' => '%s terlalu pendek, minimal 8 karakter',
            'matches' => '%s tidak cocok'
        ]);
        $this->form_validation->set_rules('pwnew2', 'Konfirmasi Password Baru', 'required|trim|min_length[8]|matches[pwnew]', [
            'required' => 'Kamu belum menginput %s',
            'min_length' => '%s terlalu pendek, minimal 8 karakter',
            'matches' => '%s tidak cocok'
        ]);
        if ($this->form_validation->run() == false) {
            $isi['title'] = 'Ganti Password';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Ganti Password';
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('user/v_ubahpw', $isi);
            $this->load->view('templates/footer');
        } else {
            $cpassword = $this->input->post('pwold');
            $npassword = $this->input->post('pwnew');
            if (!password_verify($cpassword, $isi['user']['password'])) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                     Password lama salah!
                       </div>');
                redirect('ubahpw');
            } else {
                if ($cpassword == $npassword) {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                     Password baru tidak boleh sama dengan password lama!
                       </div>');
                    redirect('ubahpw');
                } else {
                    $password_hash = password_hash($npassword, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('user');
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                     Password berhasil diganti  
                       </div>');
                    redirect('ubahpw');
                }
            }
        }
    }
}
