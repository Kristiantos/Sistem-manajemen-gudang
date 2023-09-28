<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_keluar extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_barangKeluar');
        $this->load->model('M_BarangMasuk');
        $this->load->model('M_Kategori');
        $this->load->model('M_Suplier');
        $this->load->library('form_validation');
    }

    public function index()
    {
        isAdmin();
        //tangkap data
        $data['title'] = 'Barang Keluar';
        $data['barang_keluar'] = $this->M_barangKeluar->GetAllBarangkeluar_suplier_barang();
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/barang_keluar/barang_keluar', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah()
    {
        isAdmin();
        $data['title'] = 'Form Tambah barang Keluar';
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->M_Kategori->GetAllKategori();
        $data['suplier'] = $this->M_Suplier->GetAllSuplier();
        $data['barang_masuk'] = $this->M_BarangMasuk->GetAllBarangMasuk();

        // $this->form_validation->set_rules('kode_barang','Kode barang','required|is_unique[barang_masuk.kode_barang]');
        // $this->form_validation->set_rules('nama_barang','Nama barang','required');
        // $this->form_validation->set_rules('nama_barang','Nama barang','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required|numeric');
        $this->form_validation->set_rules('tujuan','Tujuan','required');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/barang_keluar/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_barangKeluar->tambahBarangKeluar();
            // $this->M_stok->ubahStok();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('barang_keluar');
        }
    }

    public function edit($id_keluar)
    {
        isAdmin();
        $data['title'] = 'Edit Data Barang';
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();
        $data['barang_masuk'] = $this->M_BarangMasuk->GetAllBarangMasuk();
        $data['barang_keluar'] = $this->M_barangKeluar->getBarangKeluarById($id_keluar);
        
        $this->form_validation->set_rules('jumlah','Jumlah','required|numeric');
        $this->form_validation->set_rules('tujuan','tujuan','required');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/barang_keluar/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_barangKeluar->editBarangkeluar();
            $this->session->set_flashdata('flash','DiUbah');
            redirect('barang_keluar');
        }
    }
    
    public function hapus($id_keluar)
    {
        $this->M_barangKeluar->hapusBarangKeluar($id_keluar);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('barang_keluar');

    }
    
    // public function edit($id_keluar)
    // {
    //     isAdmin();
    //     $data['title'] = 'Edit Data Barang Keluar';
    //     $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();
    //     $data['kategori'] = $this->M_Kategori->GetAllKategori();
    //     $data['suplier'] = $this->M_Suplier->GetAllSuplier();
    //     $data['barang_keluar'] = $this->M_Barangkeluar->getBarangkeluarById($id_keluar);
        
    //     $this->form_validation->set_rules('nama_barang','nama barang','required');
    //     $this->form_validation->set_rules('jumlah','Jumlah','required|numeric');
    //     if( $this->form_validation->run() == FALSE ) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar');
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('content/barang_keluar/edit', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->M_BarangKeluar->editBarangKeluar();
    //         $this->session->set_flashdata('flash','DiUbah');
    //         redirect('barang_keluar');
    //         // var_dump($this->input->post());
    //     }
    // }

}