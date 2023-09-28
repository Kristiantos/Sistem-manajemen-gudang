 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-plus mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-6">
  
<form method="post" class="mx-5 my-3">
  <div class="form-group">
    <label for="nama"></label>
    <input hidden type="text" name="id_keluar" class="form-control" id="id_keluar" value="<?php echo $barang_keluar['id_keluar']; ?>">
    <small class="form-text text-danger"><?= form_error('id_keluar'); ?></small>
  </div>
  <div class="form-group">
    <label for="nama">Kode Barang :</label>
    <input readonly type="text" name="kode_barang" class="form-control" id="kode_barang" value="<?php echo $barang_keluar['kode_barang']; ?>">
    <small class="form-text text-danger"><?= form_error('kode_barang'); ?></small>
  </div>
   <div class="form-group">
    <label for="jumlah">Jumlah :</label>
    <input type="text" name="jumlah" class="form-control" id="jumlah" value="<?= $barang_keluar['jumlah']; ?>">
    <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
  </div>
  <div class="form-group">
    <label for="jumlah">Tujuan :</label>
    <input type="text" name="tujuan" class="form-control" id="tujuan" value="<?= $barang_keluar['tujuan']; ?>">
    <small class="form-text text-danger"><?= form_error('tujuan'); ?></small>
  </div>
  <div class="form-group">
    <label for="jumlah">Tanggal :</label>
    <input type="date" name="tgl_keluar" class="form-control" id="tgl_keluar" value="<?= $barang_keluar['tgl_keluar']; ?>">
    <small class="form-text text-danger"><?= form_error('tgl_keluar'); ?></small>
  </div> 
  
  <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
  <a href="<?= base_url('barang_keluar') ?>" class="btn btn-danger float-right mx-2">Back</a>
</form>

</div>
</div>
