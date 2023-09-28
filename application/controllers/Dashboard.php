<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('M_');
    // }

    public function index()
    {
        isAdmin();
        //tangkap data
        $data['title'] = 'Dashboard';
        $data['namaAdmin'] = $this->db->get_where('admin',['email' => $this->session->userdata('email')])->row_array();
        // $this->load->model('M_admin');
        // echo  'selamat datang ' . $data['admin']['nama'];
        // echo $data['admin']['image'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/index', $data);
        $this->load->view('templates/footer', $data);
    }
}