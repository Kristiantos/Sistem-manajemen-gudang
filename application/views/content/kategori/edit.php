 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-edit mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-6">
  
<form method="post" class="mx-5 my-3">
  <div class="form-group">
    <label for="id_kategori">Id Kategori :</label>
    <input type="text" readonly name="id_kategori" class="form-control" id="id_kategori" value="<?= $kategori['id_kategori']; ?>">
    <small class="form-text text-danger"><?= form_error('id_kategori'); ?></small>
  </div>
  <div class="form-group">
    <label for="jenis_kategori">jenis Kategori :</label>
    <input type="text" name="jenis_kategori" class="form-control" id="jenis_kategori" value="<?= $kategori['jenis_kategori']; ?>">
    <small class="form-text text-danger"><?= form_error('jenis_kategori'); ?></small>
  </div>
  <div class="form-group">
    <label for="no_rak">No rak :</label>
    <input type="text" name="no_rak" class="form-control" id="no_rak" value="<?= $kategori['no_rak']; ?>">
    <small class="form-text text-danger"><?= form_error('no_rak'); ?></small>
  </div>
  <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
  <a href="<?= base_url('kategori') ?>" class="btn btn-danger float-right mx-2">Back</a>
</form>

</div>
</div>
