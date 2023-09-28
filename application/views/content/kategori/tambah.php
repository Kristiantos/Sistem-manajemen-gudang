 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-grip-horizontal mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-6">
  
<form method="post" class="mx-5 my-3">

  <div class="form-group">
    <label for="jenisKategori">Jenis Kategori :</label>
    <input type="text" name="jenis_kategori" class="form-control" id="jenis_kategori">
    <small class="form-text text-danger"><?= form_error('jenis_kategori'); ?></small>
  </div>
  <div class="form-group">
    <label for="noRak">No Rak :</label>
    <input type="text" name="no_rak" class="form-control" id="no_rak">
    <small class="form-text text-danger"><?= form_error('no_rak'); ?></small>
  </div>
  <button type="submit" name="tambah" class="btn btn-primary float-right">Submit</button>
  <a href="<?= base_url('suplier') ?>" class="btn btn-danger float-right mx-2">Back</a>
</form>

</div>
</div>
