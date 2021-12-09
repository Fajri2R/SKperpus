<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_anggota');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required'      => 'Kamu belum menginput %s',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required'      => 'Kamu belum menginput %s',
        ]);
        if ($this->form_validation->run() == false) {
            $isi['title'] = 'Perpustakaan SMK Muhammadiyah Kota Jambi';
            $isi['title2'] = '<b>E</b>-Perpus';
            $this->load->view('templates/auth_header', $isi);
            $this->load->view('auth/v_login');
            $this->load->view('templates/auth_footer');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->db->get_where('user', ['username' => $username])->row_array();

            if ($user) {
                if ($user['is_active'] == 1) {
                    if (password_verify($password, $user['password'])) {
                        $isi = [
                            'username' => $user['username'],
                            'role_id' => $user['role_id']
                        ];
                        $this->session->set_userdata($isi);
                        redirect('user');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
						Password salah!</div>');
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Username belum diaktivasi!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Username tidak terdaftar!</div>');
                redirect('auth');
            }
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required|trim', [
            'required' => 'Kamu belum menginput %s'
        ]);
        $this->form_validation->set_rules('id_anggota', 'ID Anggota', 'required|trim|is_unique[user_info.id_anggota]', [
            'required' => 'Kamu belum menginput %s',
            'is_unique' => '%s sudah terdaftar, silahkan refresh halaman, abaikan jika sudah direfresh'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'required' => 'Kamu belum menginput %s',
            'is_unique' => '%s sudah terdaftar'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'Kamu belum menginput %s',
            'valid_email' => 'Format %s salah',
            'is_unique' => '%s sudah terdaftar',
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'required' => 'Kamu belum menginput %s',
            'min_length' => '%s terlalu pendek, minimal 8 karakter',
            'matches' => '%s tidak cocok'
        ]);
        $this->form_validation->set_rules('jenkel', 'Jenis Kelamin', 'required', [
            'required'      => 'Kamu belum memilih %s',
        ]);
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|trim|min_length[10]', [
            'required'      => 'Kamu belum menginput %s',
            'min_length'    => 'Cek kembali Nomor HP yang diinput, min. 10 digit dimulai dari 0',
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title2'] = '<b>E</b>-Perpus';
            $data['title'] = 'Membuat Akun Baru';
            $data['id_anggota']     = $this->m_anggota->id_anggota();
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/v_register');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name'          => ucwords(htmlspecialchars($this->input->post('name', true))),
                'username'      => htmlspecialchars($this->input->post('username', true)),
                'email'         => htmlspecialchars($this->input->post('email', true)),
                'image'         => 'default.jpg',
                'password'      => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id'       => 2,
                'is_active'     => 1,
                'date_created'  => time(),
            ];
            $this->db->insert('user', $data);
            $data2 = [
                'id_anggota'     => $this->input->post('id_anggota'),
                'jenkel'         => $this->input->post('jenkel'),
                'no_hp'          => $this->input->post('no_hp'),
            ];
            $this->db->insert('user_info', $data2);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Akun berhasil dibuat
          </div>');
            redirect('auth');
        }
    }

    public function lupapw()
    {
        $isi['title2'] = '<b>E</b>-Perpus';
        $isi['title'] = 'Lupa Password';
        $this->load->view('templates/auth_header', $isi);
        $this->load->view('auth/v_lupapw');
        $this->load->view('templates/auth_footer', $isi);
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
		Anda telah logout!
		  </div>');
        redirect('auth');
    }
}
