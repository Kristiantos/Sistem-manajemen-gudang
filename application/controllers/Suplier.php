<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_suplier');
        $this->load->library('form_validation');
    }

    public function index()
    {
        isAdmin();
        //tangkap data
        $data['title'] = 'Data Suplier';
        $data['suplier'] = $this->M_suplier->GetAllSuplier();
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();
       

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/suplier/suplier', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah()
    {
        isAdmin();
        $data['title'] = 'Form Tambah Suplier';
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();

        
        $this->form_validation->set_rules('kode_suplier','Kode Suplier','required|is_unique[suplier.kode_suplier]');
        $this->form_validation->set_rules('perusahaan','Perusahaan','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('no_telp','No Telp','required|numeric');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/suplier/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_suplier->tambahSuplier();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('suplier');
        }
    }

    public function edit($kode_suplier)
    {
        isAdmin();
        $data['title'] = 'Edit Data Suplier';
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();
        $data['suplier'] = $this->M_suplier->getSuplierById($kode_suplier);

        
        // $this->form_validation->set_rules('kode_suplier','Kode Suplier','required|is_unique[suplier.kode_suplier]');
        $this->form_validation->set_rules('perusahaan','Perusahaan','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('no_telp','No Telp','required|numeric');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/suplier/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_suplier->editSuplier();
            $this->session->set_flashdata('flash','DiUbah');
            redirect('suplier');
        }
    }

    public function hapus($kode_suplier)
    {
        $this->M_suplier->hapusSuplier($kode_suplier);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('suplier');

    }


}