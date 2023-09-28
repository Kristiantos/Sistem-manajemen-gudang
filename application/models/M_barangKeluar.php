<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_BarangKeluar extends CI_Model{
   public function GetAllBarangKeluar()
   {
      return $this->db->get('barang_keluar')->result_array();

   }

   public function tambahBarangKeluar()
   {
      $data = [
         "kode_barang" => $this->input->post('kode_barang',true),
         // "nama_barang" => $this->input->post('nama_barang',true),
         "jumlah" => $this->input->post('jumlah',true),
         "tujuan" => $this->input->post('tujuan',true),
         "tgl_keluar" => $this->input->post('tanggal') ,
      ];

      $this->db->insert('barang_keluar',$data);
      $bm = $this->db->get_where('barang_masuk', ['kode_barang' => $data['kode_barang']])->row_array();

         $this->db->where('kode_barang',$data['kode_barang']);
         $this->db->set('jumlah',$bm['jumlah'] - $data['jumlah']);
         $this->db->update('barang_masuk');
      

   }

   public function getBarangKeluarById($id_keluar)
   {
      return $this->db->get_where('barang_keluar', ['id_keluar' => $id_keluar])->row_array();
   }

   public function hapusBarangKeluar($id_keluar)
   {
      $this->db->where('id_keluar',$id_keluar);
      $this->db->delete('barang_keluar');

   }

   public function editBarangkeluar()
   {
      $data = [
         "kode_barang" => $this->input->post('kode_barang',true),
         "jumlah" => $this->input->post('jumlah',true),
         "tujuan" => $this->input->post('tujuan',true),
         "tgl_keluar" => $this->input->post('tgl_keluar',true)
      ];

      $this->db->where('id_keluar',$this->input->post('id_keluar'));
      $this->db->update('barang_keluar',$data);
   }

   public function GetAllBarangkeluar_suplier_barang()
   {
      $this->db->select('barang_masuk.nama_barang, barang_keluar.id_keluar, barang_masuk.kode_barang, barang_keluar.jumlah, barang_keluar.tujuan, barang_keluar.tgl_keluar')
      ->from('barang_masuk')
      ->join('barang_keluar', 'barang_keluar.kode_barang = barang_masuk.kode_barang');
   $result = $this->db->get()->result_array();
   return $result;
      // return $this->db->get('barang_masuk')->result_array();

   }



 

 
}