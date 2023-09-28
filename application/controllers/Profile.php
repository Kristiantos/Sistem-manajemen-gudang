<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_profile');
        $this->load->library('form_validation');
    }

    public function index()
    {
        isAdmin();
        //tangkap data
        $data['title'] = 'Profile';
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/profile/profile', $data);
        $this->load->view('templates/footer',$data);
    }

    public function edit()
    {
        isAdmin();
        $data['title'] = 'Edit Profile';
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();

        
        
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('No_telp','Telp','required|numeric');
        $this->form_validation->set_rules('password','Password','required');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/profile/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_profile->editProfile();
            $this->session->set_flashdata('flash','DiUbah');
            redirect('profile');
        }
    }

}
