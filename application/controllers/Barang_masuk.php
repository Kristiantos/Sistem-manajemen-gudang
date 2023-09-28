<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_masuk extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_BarangMasuk');
        $this->load->model('M_Kategori');
        $this->load->model('M_Suplier');
        // $this->load->model('M_Stok');
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        isAdmin();
        $data['title'] = 'Barang';
        $data['barang_masuk'] = $this->M_BarangMasuk-> GetAllBarangMasuk_suplier_barang();
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/barang_masuk/barang_masuk', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah()
    {
        isAdmin();
        $data['title'] = 'Form Tambah barang Masuk';
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->M_Kategori->GetAllKategori();
        $data['suplier'] = $this->M_Suplier->GetAllSuplier();

        $this->form_validation->set_rules('kode_barang','Kode barang','required|is_unique[barang_masuk.kode_barang]');
        $this->form_validation->set_rules('nama_barang','Nama barang','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required|numeric');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/barang_masuk/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_BarangMasuk->tambahBarangMasuk();
            // $this->M_stok->ubahStok();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('barang_masuk');
        }
    }

    public function edit($kode_barang)
    {
        isAdmin();
        $data['title'] = 'Edit Data Barang';
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->M_Kategori->GetAllKategori();
        $data['suplier'] = $this->M_Suplier->GetAllSuplier();
        $data['barang_masuk'] = $this->M_BarangMasuk->getBarangMasukById($kode_barang);
        
        $this->form_validation->set_rules('nama_barang','nama barang','required');
        // $this->form_validation->set_rules('jumlah','Jumlah','required|numeric');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/barang_masuk/edit', $data);
            $this->load->view('templates/footer');
        } else {
            // echo $this->input->post('kode_barang');
            $this->M_BarangMasuk->editBarangMasuk();
            $this->session->set_flashdata('flash','DiUbah');
            redirect('barang_masuk');
            // echo "data diupdate";
            // var_dump($this->input->post());
        }
    }

    public function hapus($kode_barang)
    {
        $this->M_BarangMasuk->hapusBarangMasuk($kode_barang);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('barang_masuk');

    }
}