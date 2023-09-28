<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model{
   public function GetAllAdmin()
   {
      //ambil semua data tabel admin
      return $this->db->get('admin')->result_array(); 

   }

   public function tambahAdmin()
   {
      $data = [
         "id_admin" => $this->input->post('id_admin',true),
         "nama" => $this->input->post('nama',true),
         "email" => $this->input->post('email',true),
         "No_telp" => $this->input->post('No_telp',true),
         // "password" => $this->input->post('password',true)
         "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
      ];

      $this->db->insert('admin',$data);
   }

   public function getAdminById($id_admin)
   {
      return $this->db->get_where('admin', ['id_admin' => $id_admin])->row_array();
   }

   public function hapusAdmin($id_admin)
   {
      $this->db->where('id_admin',$id_admin);
      $this->db->delete('admin');

   }

   public function editAdmin()
   {
      $data = [
         "id_admin" => $this->input->post('id_admin',true),
         "nama" => $this->input->post('nama',true),
         "email" => $this->input->post('email',true),
         "No_telp" => $this->input->post('No_telp',true),
         // "password" => $this->input->post('password',true)
         "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
      ];

      $this->db->where('id_admin',$this->input->post('id_admin'));
      $this->db->update('admin',$data);
   }

 

 
}