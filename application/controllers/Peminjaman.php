<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('user_agent');
        $this->load->helper('fnohp');
        $this->load->helper('rp');
        $this->load->helper('tgl_indo');
        $this->load->helper('text');
        $this->load->model('m_id');
        $this->load->model('m_peminjaman');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $isi['title'] = 'Data Peminjaman';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Daftar Data Peminjaman';
            $isi['datapm'] = $this->m_peminjaman->getDataPM();
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('peminjaman/v_peminjaman', $isi);
            $this->load->view('templates/footer');
        } else {
            $isi['title'] = 'Data Peminjaman';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Daftar Data Peminjaman';
            $isi['datapm'] = $this->m_peminjaman->getDataUSPM();
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('peminjaman/v_uspm', $isi);
            $this->load->view('templates/footer');
        }
    }

    public function addPM()
    {
        $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('role_id') == '1') {
            $isi['title'] = 'Data Peminjaman';
            $isi['title2'] = '<b>E</b>-Perpus';
            $isi['content'] = 'Daftar Data Peminjaman';
            $isi['id_pm'] = $this->m_id->id_peminjaman();
            $isi['pm'] = $this->m_peminjaman->anggota();
            $isi['buku'] = $this->db->get('buku')->result();
            $this->load->view('templates/header', $isi);
            $this->load->view('templates/sidebar', $isi);
            $this->load->view('peminjaman/v_addpm', $isi);
            $this->load->view('templates/footer');
        } else {
            redirect('peminjaman');
        }
    }

    public function simpan()
    {
        $this->form_validation->set_rules('id_anggota', 'ID Anggota', 'required|trim', [
            'required'      => 'Kamu belum memilih nama peminjam',
        ]);
        $this->form_validation->set_rules('id_buku', 'ID Buku', 'required|trim', [
            'required'      => 'Kamu belum memilih judul buku',
        ]);

        if ($this->form_validation->run() == false) {
            $isi['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            if ($this->session->userdata('role_id') == '1') {
                $isi['title'] = 'Data Peminjaman';
                $isi['title2'] = '<b>E</b>-Perpus';
                $isi['content'] = 'Daftar Data Peminjaman';
                $isi['id_pm'] = $this->m_id->id_peminjaman();
                $isi['pm'] = $this->m_peminjaman->anggota();
                $isi['buku'] = $this->db->get('buku')->result();
                $this->load->view('templates/header', $isi);
                $this->load->view('templates/sidebar', $isi);
                $this->load->view('peminjaman/v_addpm', $isi);
                $this->load->view('templates/footer');
            } else {
                redirect('peminjaman');
            }
        } else {
            $isi = [
                'id_peminjaman' => $this->input->post('id_peminjaman'),
                'id_anggota' => $this->input->post('id_anggota'),
                'id_buku' => $this->input->post('id_buku'),
                'tgl_pinjam' => $this->input->post('tgl_pinjam'),
                'tgl_kembali' => $this->input->post('tgl_kembali'),
            ];
            $this->db->insert('peminjaman', $isi);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Data peminjaman berhasil disimpan
              </div>');
            redirect('peminjaman');
        }
    }

    public function hapus($id)
    {
        if ($this->session->userdata('role_id') == '1') {
            $query = $this->m_peminjaman->hapus($id);
            if ($query = true) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Data peminjaman berhasil dihapus
          </div>');
                redirect('peminjaman');
            }
        } else {
            redirect('user');
        }
    }

    public function kembalikan($id)
    {
        if ($this->session->userdata('role_id') == '1') {
            $data = $this->m_peminjaman->getDataById_pm($id);
            $kembalikan = [
                'id_pengembalian' => $this->m_id->id_pengembalian(),
                'id_anggota'         => $data['id_anggota'],
                'id_buku'             => $data['id_buku'],
                'tgl_pinjam'         => $data['tgl_pinjam'],
                'tgl_kembali'         => $data['tgl_kembali'],
                'tgl_kembalikan'     => date('Y-m-d')
            ];

            $query = $this->db->insert('pengembalian', $kembalikan);
            if ($query = true) {
                $delete = $this->m_peminjaman->deletePm($id);
                if ($delete = true) {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Buku berhasil dikembalikan
          </div>');
                    redirect('peminjaman');
                }
            }
        } else {
            redirect('user');
        }
    }
}
