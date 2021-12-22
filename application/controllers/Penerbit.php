<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penerbit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_id');
        $this->load->model('m_penerbit');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $isi['title'] = 'Data Penerbit';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Daftar Data Penerbit';
            $isi['datapenerbit'] = $this->db->get('penerbit')->result();;
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('penerbit/v_penerbit', $isi);
            $this->load->view('templates/footer');
        } else {
            redirect('user');
        }
    }

    public function addPN()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $isi['title'] = 'Tambah Penerbit';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Tambah Data Penerbit';
            $isi['id_penerbit']     = $this->m_id->id_penerbit();
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('penerbit/v_addpn', $isi);
            $this->load->view('templates/footer');
        } else {
            redirect('user');
        }
    }

    public function simpan()
    {
        $this->form_validation->set_rules('name', 'Nama Penerbit', 'required|trim', [
            'required' => 'Kamu belum menginput %s'
        ]);
        $this->form_validation->set_rules('id_penerbit', 'ID Penerbit', 'required|trim|is_unique[penerbit.id_penerbit]', [
            'required' => 'Kamu belum menginput %s',
            'is_unique' => '%s sudah terdaftar, silahkan refresh halaman, abaikan jika sudah direfresh'
        ]);

        if ($this->form_validation->run() == false) {
            if ($this->session->userdata('role_id') == '1') {
                $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
                $isi['title'] = 'Tambah Penerbit';
                $isi['title2'] = '<b>E</b>-Perpus';
                $isi['content'] = 'Tambah Data Penerbit';
                $isi['id_penerbit']     = $this->m_id->id_penerbit();
                $this->load->view('templates/header', $isi);
                $this->load->view('templates/sidebar', $isi);
                $this->load->view('penerbit/v_addpn', $isi);
                $this->load->view('templates/footer');
            } else {
                redirect('user');
            }
        } else {
            $isi = [
                'id_penerbit'     => $this->input->post('id_penerbit'),
                'nama_penerbit'          => ucwords(htmlspecialchars($this->input->post('name', true))),
            ];
            $this->db->insert('penerbit', $isi);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data penerbit berhasil disimpan
          </div>');
            redirect('penerbit');
        }
    }

    public function edit($id)
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $isi['title'] = 'Edit Penerbit';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Edit Data Penerbit';
            $isi['data'] = $this->m_penerbit->edit($id);
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('penerbit/v_editpn', $isi);
            $this->load->view('templates/footer');
        } else {
            redirect('user');
        }
    }

    public function update()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('name', 'Nama Penerbit', 'required|trim', [
            'required'      => 'Kamu belum menginput %s',
        ]);
        if ($this->form_validation->run() == false) {
            if ($this->session->userdata('role_id') == '1') {
                $idg = $this->m_penerbit->editid();
                foreach ($idg as $row) {
                    $id = $row->id_penerbit;
                };
                $isi['title']       = 'Edit Pengarang';
                $isi['title2']      = '<b>E</b>-Perpus';
                $isi['content']     = 'Edit Data Pengarang';
                $isi['data']        = $this->m_penerbit->edit($id);
                $this->load->view('templates/header', $isi);
                $this->load->view('templates/sidebar', $isi);
                $this->load->view('user/v_editpg', $isi);
                $this->load->view('templates/footer');
            } else {
                redirect('user');
            }
        } else {
            $id_penerbit = $this->input->post('id_penerbit');
            $data = [
                'id_penerbit'     => $this->input->post('id_penerbit'),
                'nama_penerbit'           => ucwords(htmlspecialchars($this->input->post('name', true))),
            ];

            $query = $this->m_penerbit->update($id_penerbit, $data);
            if ($query = true) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Data penerbit berhasil diupdate
              </div>');
                redirect('penerbit');
            }
        }
    }

    public function hapus($id)
    {
        if ($this->session->userdata('role_id') == '1') {
            $query = $this->m_penerbit->hapus($id);
            if ($query = true) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Data penerbit berhasil dihapus
          </div>');
                redirect('penerbit');
            }
        } else {
            redirect('user');
        }
    }
}
