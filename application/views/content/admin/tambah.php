 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-user-plus mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-6">
  
<form method="post" class="mx-5 my-3">

  <div class="form-group">
    <label for="nama">Nama :</label>
    <input type="text" name="nama" class="form-control" id="nama">
    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
  </div>
  <div class="form-group">
    <label for="emai1">Email :</label>
    <input type="text" name="email" class="form-control" id="emai1">
    <small class="form-text text-danger"><?= form_error('email'); ?></small>
  </div>
  <div class="form-group">
    <label for="No_telp">Telp :</label>
    <input type="text" name="No_telp" class="form-control" id="No_telp">
    <small class="form-text text-danger"><?= form_error('No_telp'); ?></small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password">
    <small class="form-text text-danger"><?= form_error('password'); ?></small>
  </div>
  <button type="submit" name="tambah" class="btn btn-primary float-right">Submit</button>
  <a href="<?= base_url('admin') ?>" class="btn btn-danger float-right mx-2">Back</a>
</form>

</div>
</div>
