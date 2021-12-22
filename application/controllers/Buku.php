<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_id');
        $this->load->model('m_buku');
        $this->load->helper('tgl_indo_helper');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $isi['title'] = 'Data Buku';
        $isi['title2'] = '<b>E</b>-Perpus';
        $isi['content'] = 'Daftar Data Buku';
        $isi['databuku']    = $this->m_buku->get_data_buku();
        $this->load->view('templates/header', $isi);
        $this->load->view('templates/sidebar', $isi);
        $this->load->view('buku/v_buku', $isi);
        $this->load->view('templates/footer');
    }

    public function addBK()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $isi['title'] = 'Tambah Buku';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Tambah Data Buku';
            $isi['id_buku']     = $this->m_id->id_buku();
            $isi['pengarang']     = $this->db->get('pengarang')->result();
            $isi['penerbit']     = $this->db->get('penerbit')->result();
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('buku/v_addbk', $isi);
            $this->load->view('templates/footer');
        } else {
            redirect('user');
        }
    }

    public function simpan()
    {
        $this->form_validation->set_rules('id_buku', 'ID Buku', 'required|trim|is_unique[buku.id_buku]', [
            'required' => 'Kamu belum menginput %s',
            'is_unique' => '%s sudah terdaftar, silahkan refresh halaman, abaikan jika sudah direfresh'
        ]);
        $this->form_validation->set_rules('tgl_terima', 'Tanggal Terima', 'required|trim', [
            'required' => 'Kamu belum menginput %s'
        ]);
        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required|trim', [
            'required' => 'Kamu belum menginput %s'
        ]);
        $this->form_validation->set_rules('id_pengarang', 'Nama Pengarang', 'required|trim', [
            'required' => 'Kamu belum menginput %s',
        ]);
        $this->form_validation->set_rules('id_penerbit', 'Nama Penerbit', 'required|trim', [
            'required' => 'Kamu belum menginput %s',
        ]);
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required|trim', [
            'required' => 'Kamu belum menginput %s',
        ]);
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim', [
            'required' => 'Kamu belum menginput %s',
        ]);
        $this->form_validation->set_rules('prog_keahlian', 'Program Keahlian', 'required|trim', [
            'required' => 'Kamu belum menginput %s',
        ]);
        $this->form_validation->set_rules('sumber', 'Sumber Buku', 'required|trim', [
            'required' => 'Kamu belum menginput %s',
        ]);
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim', [
            'required' => 'Kamu belum menginput %s',
        ]);

        if ($this->form_validation->run() == false) {
            if ($this->session->userdata('role_id') == '1') {
                $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
                $isi['title'] = 'Tambah Buku';
                $isi['title2'] = '<b>E</b>-Perpus';
                $isi['content'] = 'Tambah Data Buku';
                $isi['id_buku']     = $this->m_id->id_buku();
                $isi['pengarang']     = $this->db->get('pengarang')->result();
                $isi['penerbit']     = $this->db->get('penerbit')->result();
                $this->load->view('templates/header', $isi);
                $this->load->view('templates/sidebar', $isi);
                $this->load->view('buku/v_addbk', $isi);
                $this->load->view('templates/footer');
            } else {
                redirect('user');
            }
        } else {
            $isi = [
                'id_buku'         => $this->input->post('id_buku'),
                'tgl_terima'     => $this->input->post('tgl_terima'),
                'judul_buku'     => ucwords($this->input->post('judul_buku')),
                'id_pengarang'     => $this->input->post('id_pengarang'),
                'id_penerbit'     => $this->input->post('id_penerbit'),
                'tahun_terbit'     => $this->input->post('tahun_terbit'),
                'kelas'     => $this->input->post('kelas'),
                'prog_keahlian'     => $this->input->post('prog_keahlian'),
                'sumber'     => ucwords($this->input->post('sumber')),
                'jumlah'         => $this->input->post('jumlah'),
            ];
            $this->db->insert('buku', $isi);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data buku berhasil disimpan
          </div>');
            redirect('buku');
        }
    }

    public function edit($id)
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $isi['title'] = 'Edit Buku';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Edit Data Buku';
            $isi['pengarang']   = $this->db->get('pengarang')->result();
            $isi['penerbit']   = $this->db->get('penerbit')->result();
            $isi['data']     =  $this->m_buku->edit($id);
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('buku/v_editbk', $isi);
            $this->load->view('templates/footer');
        } else {
            redirect('user');
        }
    }

    public function update()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('tgl_terima', 'Tanggal Terima', 'required|trim', [
            'required' => 'Kamu belum menginput %s'
        ]);
        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required|trim', [
            'required' => 'Kamu belum menginput %s'
        ]);
        $this->form_validation->set_rules('id_pengarang', 'Nama Pengarang', 'required|trim', [
            'required' => 'Kamu belum menginput %s',
        ]);
        $this->form_validation->set_rules('id_penerbit', 'Nama Penerbit', 'required|trim', [
            'required' => 'Kamu belum menginput %s',
        ]);
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required|trim', [
            'required' => 'Kamu belum menginput %s',
        ]);
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim', [
            'required' => 'Kamu belum menginput %s',
        ]);
        $this->form_validation->set_rules('prog_keahlian', 'Program Keahlian', 'required|trim', [
            'required' => 'Kamu belum menginput %s',
        ]);
        $this->form_validation->set_rules('sumber', 'Sumber Buku', 'required|trim', [
            'required' => 'Kamu belum menginput %s',
        ]);
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim', [
            'required' => 'Kamu belum menginput %s',
        ]);
        if ($this->form_validation->run() == false) {
            if ($this->session->userdata('role_id') == '1') {
                $idg = $this->m_buku->editid();
                foreach ($idg as $row) {
                    $id = $row->id_buku;
                };
                $isi['title'] = 'Tambah Buku';
                $isi['title2'] = '<b>E</b>-Perpus';
                $isi['content'] = 'Tambah Data Buku';
                $isi['id_buku']     = $this->m_id->id_buku();
                $isi['pengarang']     = $this->db->get('pengarang')->result();
                $isi['penerbit']     = $this->db->get('penerbit')->result();
                $this->load->view('templates/header', $isi);
                $this->load->view('templates/sidebar', $isi);
                $this->load->view('buku/v_addbk', $isi);
                $this->load->view('templates/footer');
            } else {
                redirect('user');
            }
        } else {
            $id_buku = $this->input->post('id_buku');
            $data = [
                'id_buku'         => $this->input->post('id_buku'),
                'tgl_terima'     => $this->input->post('tgl_terima'),
                'judul_buku'     => ucwords($this->input->post('judul_buku')),
                'id_pengarang'     => $this->input->post('id_pengarang'),
                'id_penerbit'     => $this->input->post('id_penerbit'),
                'tahun_terbit'     => $this->input->post('tahun_terbit'),
                'kelas'     => $this->input->post('kelas'),
                'prog_keahlian'     => $this->input->post('prog_keahlian'),
                'sumber'     => ucwords($this->input->post('sumber')),
                'jumlah'         => $this->input->post('jumlah'),
            ];

            $query = $this->m_buku->update($id_buku, $data);
            if ($query = true) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Data buku berhasil diupdate
              </div>');
                redirect('buku');
            }
        }
    }

    public function hapus($id)
    {
        if ($this->session->userdata('role_id') == '1') {
            $query = $this->m_buku->hapus($id);
            if ($query = true) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Data buku berhasil dihapus
          </div>');
                redirect('buku');
            }
        } else {
            redirect('user');
        }
    }
}
