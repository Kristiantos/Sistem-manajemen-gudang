 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-edit mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-6">
  
<form method="post" class="mx-5 my-3">
  <div class="form-group">
    <label for="kode_suplier">Kode Suplier :</label>
    <input type="text" readonly name="kode_suplier" class="form-control" id="kode_suplier" value="<?= $suplier['kode_suplier']; ?>">
    <small class="form-text text-danger"><?= form_error('kode_suplier'); ?></small>
  </div>
  <div class="form-group">
    <label for="perusahaan">Perusahaan :</label>
    <input type="text" name="perusahaan" class="form-control" id="perusahaan" value="<?= $suplier['perusahaan']; ?>">
    <small class="form-text text-danger"><?= form_error('perusahaan'); ?></small>
  </div>
  <div class="form-group">
    <label for="alamat">Alamat :</label>
    <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $suplier['alamat']; ?>">
    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
  </div>
  <div class="form-group">
    <label for="no_telp">Password</label>
    <input type="no_telp" name="no_telp" class="form-control" id="no_telp" value="<?= $suplier['no_telp']; ?>">
    <small class="form-text text-danger"><?= form_error('no_telp'); ?></small>
  </div>
  <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
  <a href="<?= base_url('suplier') ?>" class="btn btn-danger float-right mx-2">Back</a>
</form>

</div>
</div>
