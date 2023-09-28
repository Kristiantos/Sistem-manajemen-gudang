<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kategori');
        $this->load->library('form_validation');
    }

    public function index()
    {
        isAdmin();
        //tangkap data
        $data['title'] = 'Kategori';
        $data['kategori'] = $this->M_kategori->GetAllKategori();
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();
       

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/kategori/kategori', $data);
        $this->load->view('templates/footer', $data);
    }


    public function tambah()
    {
        isAdmin();
        $data['title'] = 'Tambah Kategori';
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('jenis_kategori','Jenis Kategori','required');
        $this->form_validation->set_rules('no_rak','No Rak','required');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/kategori/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_kategori->tambahKategori();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('kategori');
        }
    }

    public function edit($id_kategori)
    {
        isAdmin();
        $data['title'] = 'Edit Data Kategori';
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->M_kategori->getKategoriById($id_kategori);

        
        
        $this->form_validation->set_rules('jenis_kategori','Jenis Kategori','required');
        $this->form_validation->set_rules('no_rak','No rak','required');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/kategori/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_kategori->editKategori();
            $this->session->set_flashdata('flash','DiUbah');
            redirect('kategori');
        }
    }

    public function hapus($id_kategori)
    {
        $this->M_kategori->hapusKategori($id_kategori);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('kategori');

    }
}