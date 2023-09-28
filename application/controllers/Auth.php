<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_auth');
    }

    public function index()
    {

        $this->form_validation->set_rules('email','Email','required|trim|valid_email');
        $this->form_validation->set_rules('password','Password','required|trim');

        if( $this->form_validation->run() == false){
            $data['title'] = 'Login | Gudang';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else { //lolos validasi
            $this->_login();
        }

    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $data = $this->M_auth->CekLogin('admin','email',$email);
        //jika login
        if($data['password'] == $password AND $data['email'] == $email)
        {
        $array = array( 
            'email' => $data['email'],
            'nama_admin' => $data['nama_admin'],
            'IsAdmin' => 1
        );
        $this->session->set_userdata($array);
        redirect('Dashboard');
        }else{
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email atau Password anda salah!</div>');
        redirect('Auth');
        }
        
    }

    public function logout()
    {
        //data session akan di hancurkan
        $this->session->sess_destroy();
        redirect('Auth');
        
    }
    

}