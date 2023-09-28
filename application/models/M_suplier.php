<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_suplier extends CI_Model{
   public function GetAllSuplier()
   {
      return $this->db->get('suplier')->result_array();

   }

   public function tambahSuplier()
   {
      $data = [
         "kode_suplier" => $this->input->post('kode_suplier',true),
         "perusahaan" => $this->input->post('perusahaan',true),
         "alamat" => $this->input->post('alamat',true),
         "no_telp" => $this->input->post('no_telp',true),
      ];

      $this->db->insert('suplier',$data);
   }

   public function getSuplierById($kode_suplier)
   {
      return $this->db->get_where('suplier', ['kode_suplier' => $kode_suplier])->row_array();
   }

   public function hapusSuplier($kode_suplier)
   {
      $this->db->where('kode_suplier',$kode_suplier);
      $this->db->delete('suplier');

   }

   public function editSuplier()
   {
      $data = [
         "kode_suplier" => $this->input->post('kode_suplier',true),
         "perusahaan" => $this->input->post('perusahaan',true),
         "alamat" => $this->input->post('alamat',true),
         "no_telp" => $this->input->post('no_telp',true),
      ];

      $this->db->where('kode_suplier',$this->input->post('kode_suplier'));
      $this->db->update('suplier',$data);
   }

 

 
}