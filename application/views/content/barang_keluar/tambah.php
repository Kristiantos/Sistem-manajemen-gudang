 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-plus mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-6">
  
<form method="post" class="mx-5 my-3">
  <div class="form-group">
    <label for="kode_suplier">Kode Barang :</label>
    <select class="form-control" name="kode_barang">
        <?php foreach ($barang_masuk as $barang_masuk) :  ?>
      <option value="<?= $barang_masuk["kode_barang"] ?>"> <?= $barang_masuk["kode_barang"] ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label for="alamat">Jumlah :</label>
    <input type="text" name="jumlah" class="form-control" id="jumlah">
    <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
  </div>
  <div class="form-group">
    <label for="tujuan">Tujuan :</label>
    <input type="text" name="tujuan" class="form-control" id="tujuan">
    <small class="form-text text-danger"><?= form_error('tujuan'); ?></small>
  </div>
  <div class="form-group">
    <label for="tanggal">tanggal :</label>
    <input type="date" name="tanggal" class="form-control" id="tanggal">
    <small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
  </div>

  <button type="submit" name="tambah" class="btn btn-primary float-right">Submit</button>
  <a href="<?= base_url('barang_keluar') ?>" class="btn btn-danger float-right mx-2">Back</a>
</form>

</div>
</div>


    