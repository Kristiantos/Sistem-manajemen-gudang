<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_BarangMasuk extends CI_Model{
   public function GetAllBarangMasuk()
   {
      return $this->db->get('barang_masuk')->result_array();

   }
   
   public function tambahBarangMasuk()
   {
      $data = [
         "kode_barang" => $this->input->post('kode_barang',true),
         "nama_barang" => $this->input->post('nama_barang',true),
         "jumlah" => $this->input->post('jumlah',true),
         "id_kategori" => $this->input->post('id_kategori',true),
         "kode_suplier" => $this->input->post('kode_suplier',true),
      ];

      $this->db->insert('barang_masuk',$data);
   }

   public function getBarangMasukById($kode_barang)
   {
      return $this->db->get_where('barang_masuk', ['kode_barang' => $kode_barang])->row_array();
   }

   public function hapusBarangMasuk($kode_barang)
   {
      $this->db->where('kode_barang',$kode_barang);
      $this->db->delete('barang_masuk');

   }

   public function editBarangMasuk()
   {
      $data = [
         "kode_barang" => $this->input->post('kode_barang',true),
         "nama_barang" => $this->input->post('nama_barang',true),
         "jumlah" => $this->input->post('jumlah',true),
         "id_kategori" => $this->input->post('id_kategori',true),
         "kode_suplier" => $this->input->post('kode_suplier',true),
      ];
      // echo $this->input->post('id_kategori');
      // echo "<br>";
     
      // echo "<br>";
      // echo $this->input->post('nama_barang');
      // echo "<br>";
      // echo $this->input->post('jumlah');
      // echo "<br>";
      // echo $this->input->post('kode_suplier');
      $this->db->where('kode_barang',$this->input->post('kode_barang'));
      $this->db->update('barang_masuk',$data);
   }
   
   
   public function GetAllBarangMasuk_suplier_barang()
   {
      $this->db->select('barang_masuk.nama_barang, barang_masuk.kode_barang, barang_masuk.jumlah, suplier.perusahaan, kategori.jenis_kategori')
         ->from('barang_masuk')
         ->join('suplier', 'suplier.kode_suplier = barang_masuk.kode_suplier')
         ->join('kategori', 'kategori.id_kategori = barang_masuk.id_kategori');
      $result = $this->db->get()->result_array();
      return $result;
      // return $this->db->get('barang_masuk')->result_array();

   }
   
   
}