 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-fw fa-user mx-2"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<?php if ( $this->session->flashdata('flash') ) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert"> profile
    <strong> berhasil</strong> 
    <?= $this->session->flashdata('flash'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <?php endif; ?>
    <div class="card shadow mb-4 col-lg-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin</h6>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush text-dark">
            <li class="list-group-item">Nama : <?= $namaAdmin['nama'] ?></li>
            <li class="list-group-item">Email : <?= $namaAdmin['email'] ?></li>
            <li class="list-group-item">Telp : <?= $namaAdmin['No_telp'] ?></li>
        </ul>
        <a href="<?= base_url('profile/edit/') ?>" class="btn btn-primary float-right my-4"><i class="fas fa-edit"></i></a>
        </div>
    </div>
</div>
</div>

