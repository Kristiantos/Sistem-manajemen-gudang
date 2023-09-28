 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-plus mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-6">
  
<form method="post" class="mx-5 my-3">
  <div class="form-group">
    <label for="kode_suplier">Kode Barang :</label>
    <input type="text" name="kode_barang" class="form-control" id="kode_barang" placeholder="ex: SEM001">
    <small class="form-text text-danger"><?= form_error('kode_barang'); ?></small>
  </div>
  <div class="form-group">
    <label for="perusahaan">Nama Barang :</label>
    <input type="text" name="nama_barang" class="form-control" id="nama_barang">
    <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
  </div>
  <div class="form-group">
    <label for="alamat">Jumlah :</label>
    <input type="text" name="jumlah" class="form-control" id="jumlah">
    <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Kategori</label>
    <select class="form-control" name="id_kategori">
        <?php foreach ($kategori as $k) :  ?>
      <option value="<?= $k["id_kategori"] ?>"> <?= $k["jenis_kategori"] ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Suplier</label>
    <select class="form-control" name="kode_suplier" id="exampleFormControlSelect1">
        <?php foreach ($suplier as $sup) :  ?>
            <option value="<?= $sup["kode_suplier"] ?>"><?= $sup["perusahaan"] ?></option>
        <?php endforeach; ?>
    </select>
  </div>

  <button type="submit" name="tambah" class="btn btn-primary float-right">Submit</button>
  <a href="<?= base_url('barang_masuk') ?>" class="btn btn-danger float-right mx-2">Back</a>
</form>

</div>
</div>
