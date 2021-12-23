<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
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
        $isi['title'] = 'Profil';
        $isi['title2'] = '<b>E</b>-Perpus';
        $isi['content'] = 'Profile';
        $this->load->view('templates/header', $isi);
        $this->load->view('templates/sidebar', $isi);
        $this->load->view('user/v_profile', $isi);
        $this->load->view('templates/footer');
    }

    public function update()
    {

        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|trim|min_length[10]|max_length[13]', [
            'required'      => 'Kamu belum menginput %s',
            'min_length'    => 'Cek kembali Nomor HP yang diinput, min. 10 digit dimulai dari 0 dan max. 13 digit',
            'max_length'    => 'Cek kembali Nomor HP yang diinput, min. 10 digit dimulai dari 0 dan max. 13 digit',
        ]);
        // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
        //     'required' => 'Kamu belum menginput %s',
        //     'valid_email' => 'Format %s salah',
        // ]);

        if ($this->form_validation->run() == false) {
            $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $isi['title'] = 'Profil';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Profile';
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('user/v_profile', $isi);
            $this->load->view('templates/footer');
        } else {
            $username = $this->input->post('username');
            $alamat = $this->input->post('alamat');
            $no_hp = $this->input->post('no_hp');


            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/img/';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']     = '2048';
                $config['max_width'] = '512';
                $config['max_height'] = '512';


                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $old_image = $isi['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('error_msg', $this->upload->display_errors());
                }
            }

            $this->db->set('alamat', $alamat);
            $this->db->set('no_hp', $no_hp);
            $this->db->where('username', $username);
            $this->db->update('user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                     Data berhasil diupdate
                       </div>');
            redirect('profile');
        }
    }
}
