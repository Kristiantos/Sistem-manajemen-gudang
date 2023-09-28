<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model{
   public function GetAllKategori()
   {
      return $this->db->get('kategori')->result_array();

   }

   public function tambahKategori()
   {
      $data = [
         "jenis_kategori" => $this->input->post('jenis_kategori',true),
         "no_rak" => $this->input->post('no_rak',true),
      ];

      $this->db->insert('kategori',$data);
   }

   public function getKategoriById($id_kategori)
   {
      return $this->db->get_where('kategori', ['id_kategori' => $id_kategori])->row_array();
   }

   public function hapusKategori($id_kategori)
   {
      $this->db->where('id_kategori',$id_kategori);
      $this->db->delete('kategori');

   }

   public function editKategori()
   {
      $data = [
         "id_kategori" => $this->input->post('id_kategori',true),
         "jenis_kategori" => $this->input->post('jenis_kategori',true),
         "no_rak" => $this->input->post('no_rak',true),
      ];

      $this->db->where('id_kategori',$this->input->post('id_kategori'));
      $this->db->update('kategori',$data);
   }

 

 
}