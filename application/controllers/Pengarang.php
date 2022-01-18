<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengarang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_id');
        $this->load->model('m_pengarang');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $isi['title'] = 'Data Pengarang';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Daftar Data Pengarang';
            $isi['datapengarang'] = $this->db->get('pengarang')->result();;
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('pengarang/v_pengarang', $isi);
            $this->load->view('templates/footer');
        } else {
            redirect('user');
        }
    }

    public function addPG()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $isi['title'] = 'Tambah Pengarang';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Tambah Data Pengarang';
            $isi['id_pengarang']     = $this->m_id->id_pengarang();
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('pengarang/v_addpg', $isi);
            $this->load->view('templates/footer');
        } else {
            redirect('user');
        }
    }

    public function simpan()
    {
        $this->form_validation->set_rules('name', 'Nama Pengarang', 'required|trim', [
            'required' => 'Kamu belum menginput %s'
        ]);
        $this->form_validation->set_rules('id_pengarang', 'ID Pengarang', 'required|trim|is_unique[pengarang.id_pengarang]', [
            'required' => 'Kamu belum menginput %s',
            'is_unique' => '%s sudah terdaftar, silahkan refresh halaman, abaikan jika sudah direfresh'
        ]);

        if ($this->form_validation->run() == false) {
            if ($this->session->userdata('role_id') == '1') {
                $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
                $isi['title'] = 'Tambah Pengarang';
                $isi['title2'] = '<b>E</b>-Perpus';
                $isi['content'] = 'Tambah Data Pengarang';
                $isi['id_pengarang']     = $this->m_id->id_pengarang();
                $this->load->view('templates/header', $isi);
                $this->load->view('templates/sidebar', $isi);
                $this->load->view('pengarang/v_addpg', $isi);
                $this->load->view('templates/footer');
            } else {
                redirect('user');
            }
        } else {
            $isi = [
                'id_pengarang'     => $this->input->post('id_pengarang'),
                'nama_pengarang'          => ucwords(htmlspecialchars($this->input->post('name', true))),
            ];
            $this->db->insert('pengarang', $isi);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data pengarang berhasil disimpan
          </div>');
            redirect('pengarang');
        }
    }

    public function edit($id)
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $isi['title'] = 'Edit Pengarang';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Edit Data Pengarang';
            $isi['data'] = $this->m_pengarang->edit($id);
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('pengarang/v_editpg', $isi);
            $this->load->view('templates/footer');
        } else {
            redirect('user');
        }
    }

    public function update()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('name', 'Nama Pengarang', 'required|trim', [
            'required'      => 'Kamu belum menginput %s',
        ]);
        if ($this->form_validation->run() == false) {
            if ($this->session->userdata('role_id') == '1') {
                $idg = $this->m_pengarang->editid();
                foreach ($idg as $row) {
                    $id = $row->id_pengarang;
                };
                $isi['title'] = 'Edit Pengarang';
                $isi['title2'] = '<b>E</b>-Perpus';
                $isi['content'] = 'Edit Data Pengarang';
                $isi['data'] = $this->m_pengarang->edit($id);
                $this->load->view('templates/header', $isi);
                $this->load->view('templates/sidebar', $isi);
                $this->load->view('pengarang/v_editpg', $isi);
                $this->load->view('templates/footer');
            } else {
                redirect('user');
            }
        } else {
            $id_pengarang = $this->input->post('id_pengarang');
            $data = [
                'id_pengarang'     => $this->input->post('id_pengarang'),
                'nama_pengarang'           => ucwords(htmlspecialchars($this->input->post('name', true))),
            ];

            $query = $this->m_pengarang->update($id_pengarang, $data);
            if ($query = true) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Data pengarang berhasil diupdate
              </div>');
                redirect('pengarang');
            }
        }
    }

    public function hapus($id)
    {
        if ($this->session->userdata('role_id') == '1') {
            $query = $this->m_pengarang->hapus($id);
            if ($query = true) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Data pengarang berhasil dihapus
          </div>');
                redirect('pengarang');
            }
        } else {
            redirect('user');
        }
    }
}
