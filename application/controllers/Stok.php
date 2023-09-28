<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

// class Stok extends CI_Controller 
// {
//     public function __construct()
//     {
//         parent::__construct();
//         $this->load->model('M_stok');
//         $this->load->model('M_BarangMasuk');
//         $this->load->model('M_Kategori');
//         $this->load->model('M_Suplier');
//     }

//     public function index()
//     {
//         isAdmin();
//         $data['title'] = 'Stok Barang';
//         $data['stok'] = $this->M_stok->GetAllStok();
//         $data['kategori'] = $this->M_Kategori->GetAllKategori();
//         $data['barang_masuk'] = $this->M_BarangMasuk->GetAllBarangMasuk();
//         $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();

//         $this->load->view('templates/header', $data);
//         $this->load->view('templates/sidebar', $data);
//         $this->load->view('templates/topbar', $data);
//         $this->load->view('content/stok/stok', $data);
//         $this->load->view('templates/footer', $data);
//     }
// }