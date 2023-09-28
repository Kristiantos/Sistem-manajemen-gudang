 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-fw fa-user mx-2"></i><?= $title; ?></h1>

<!-- DataTales Example -->
    <div class="card shadow mb-4 col-lg-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Admin</h6>
        </div>
        <form method="post" class="mx-5 my-3">
        <input type="hidden" name="id_admin" value="<?= $namaAdmin['id_admin']; ?>">
  <div class="form-group">
    <label for="nama">Nama :</label>
    <input type="text" name="nama" class="form-control" id="nama" value="<?= $namaAdmin['nama']; ?>">
    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
  </div>
  <div class="form-group">
    <label for="emai1">Email :</label>
    <input type="text" name="email" class="form-control" id="emai1" value="<?= $namaAdmin['email']; ?>">
    <small class="form-text text-danger"><?= form_error('email'); ?></small>
  </div>
  <div class="form-group">
    <label for="No_telp">Telp :</label>
    <input type="text" name="No_telp" class="form-control" id="No_telp" value="<?= $namaAdmin['No_telp']; ?>">
    <small class="form-text text-danger"><?= form_error('No_telp'); ?></small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" value="<?= $namaAdmin['password']; ?>">
    <small class="form-text text-danger"><?= form_error('password'); ?></small>
  </div>
  <button type="submit" name="edit" class="btn btn-primary float-right">Perbarui</button>
  <a href="<?= base_url('profile') ?>" class="btn btn-danger float-right mx-2">Back</a>
</form>

    </div>
</div>
</div>

