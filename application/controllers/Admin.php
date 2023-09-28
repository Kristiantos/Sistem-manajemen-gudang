<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        isAdmin();
        //tangkap data
        $data['title'] = 'Data Admin';
        $data['admin'] = $this->M_admin->GetAllAdmin();
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/admin/admin', $data);
        $this->load->view('templates/footer',$data);
    }
 
    public function tambah()
    {
        isAdmin();
        $data['title'] = 'Form Tambah Admin';
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();

        
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('No_telp','Telp','required|numeric');
        $this->form_validation->set_rules('password','Password','required');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/admin/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_admin->tambahAdmin();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('admin');
        }
    }

    public function edit($id_admin)
    {
        isAdmin();
        $data['title'] = 'Edit Data Admin';
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();
        $data['admin'] = $this->M_admin->getAdminById($id_admin);

        
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('No_telp','Telp','required|numeric');
        $this->form_validation->set_rules('password','Password','required');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/admin/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_admin->editAdmin();
            $this->session->set_flashdata('flash','Diubah');
            redirect('admin');
        }
    }

    public function hapus($id_admin)
    {
        $this->M_admin->hapusAdmin($id_admin);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('admin');

    }

}