<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_id');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
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
        } else {
            redirect('user');
        }
    }

    public function datauser()
    {

        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $isi['title'] = 'Data User';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Dashboard';
            $isi['dataanggota'] = $this->m_admin->onlyanggota();
            $isi['dataadmin'] = $this->m_admin->onlyadmin();
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('user/v_datauser', $isi);
            $this->load->view('templates/footer');
        } else {
            redirect('user');
        }
    }

    public function edit($id)
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $isi['title'] = 'Edit User';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Edit Data User';
            $isi['data'] = $this->m_admin->edit($id);
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('user/v_editdu', $isi);
            $this->load->view('templates/footer');
        } else {
            redirect('user');
        }
    }

    public function update()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('name', 'Nama User', 'required|trim', [
            'required'      => 'Kamu belum menginput %s',
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required'      => 'Kamu belum menginput %s',
        ]);
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|trim|min_length[11]', [
            'required'      => 'Kamu belum menginput %s',
            'min_length'    => 'Cek kembali Nomor HP yang diinput, min. 11 digit dimulai dari 0',
        ]);
        if ($this->form_validation->run() == false) {
            if ($this->session->userdata('role_id') == '1') {
                $idg = $this->m_admin->editid();
                foreach ($idg as $row) {
                    $id = $row->id_anggota;
                };
                $isi['title']       = 'Edit Data User';
                $isi['title2']      = '<b>E</b>-Perpus';
                $isi['content']     = 'Edit Data User';
                $isi['data']        = $this->m_admin->edit($id);
                $this->load->view('templates/header', $isi);
                $this->load->view('templates/sidebar', $isi);
                $this->load->view('user/v_editdu', $isi);
                $this->load->view('templates/footer');
            } else {
                redirect('user');
            }
        } else {
            $id_anggota = $this->input->post('id_anggota');
            $data = [
                'id_anggota'     => $this->input->post('id_anggota'),
                'username'       => htmlspecialchars($this->input->post('username', true)),
                'name'           => ucwords(htmlspecialchars($this->input->post('name', true))),
                'jenkel'         => $this->input->post('jenkel'),
                'alamat'         => ucwords(htmlspecialchars($this->input->post('alamat', true))),
                'no_hp'          => $this->input->post('no_hp'),
                'role_id'        => $this->input->post('role_id'),
            ];

            $query = $this->m_admin->update($id_anggota, $data);
            if ($query = true) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Akun berhasil diupdate
              </div>');
                redirect('admin/datauser');
            }
        }
    }

    public function hapus($id)
    {
        if ($this->session->userdata('role_id') == '1') {
            $query = $this->m_admin->hapus($id);
            if ($query = true) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Akun berhasil dihapus
          </div>');
                redirect('admin/datauser');
            }
        } else {
            redirect('user');
        }
    }

    public function adduser()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $isi['title'] = 'Tambah User';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Tambah User';
            $isi['id_anggota']     = $this->m_id->id_anggota();
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('user/v_adduser', $isi);
            $this->load->view('templates/footer');
        } else {
            redirect('user');
        }
    }

    public function simpan()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required|trim', [
            'required' => 'Kamu belum menginput %s'
        ]);
        $this->form_validation->set_rules('id_anggota', 'ID Anggota', 'required|trim|is_unique[user.id_anggota]', [
            'required' => 'Kamu belum menginput %s',
            'is_unique' => '%s sudah terdaftar, silahkan refresh halaman, abaikan jika sudah direfresh'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'required' => 'Kamu belum menginput %s',
            'is_unique' => '%s sudah terdaftar'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'required' => 'Kamu belum menginput %s',
            'min_length' => '%s terlalu pendek, minimal 8 karakter',
            'matches' => '%s tidak cocok dengan Konfirmasi Password'
        ]);
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|min_length[8]|matches[password2]', [
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
        $this->form_validation->set_rules('role_id', 'Role', 'required', [
            'required'      => 'Kamu belum memilih %s',
        ]);

        if ($this->form_validation->run() == false) {
            if ($this->session->userdata('role_id') == '1') {
                $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
                $isi['title'] = 'Tambah User';
                $isi['title2'] = '<b>E</b>-Perpus';
                $isi['content'] = 'Tambah User';
                $isi['id_anggota']     = $this->m_id->id_anggota();
                $this->load->view('templates/header', $isi);
                $this->load->view('templates/sidebar', $isi);
                $this->load->view('user/v_adduser', $isi);
                $this->load->view('templates/footer');
            } else {
                redirect('user');
            }
        } else {
            $isi = [
                'id_anggota'     => $this->input->post('id_anggota'),
                'name'          => ucwords(htmlspecialchars($this->input->post('name', true))),
                'username'      => htmlspecialchars($this->input->post('username', true)),
                'image'         => 'default.jpg',
                'password'      => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'jenkel'         => $this->input->post('jenkel'),
                'alamat'         => ucwords(htmlspecialchars($this->input->post('alamat', true))),
                'no_hp'          => $this->input->post('no_hp'),
                'role_id'       => $this->input->post('role_id'),
                'is_active'     => 1,
                'date_created'  => time(),
            ];
            $this->db->insert('user', $isi);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Akun berhasil dibuat
          </div>');
            redirect('admin/datauser');
        }
    }
}
