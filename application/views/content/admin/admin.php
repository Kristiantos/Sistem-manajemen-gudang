 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-fw fa-users mr-2"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <!-- Button tambah -->
    <a href="<?= base_url('admin/tambah') ?>" class="btn btn-primary mx-3">
    <i class="fas fa-user-plus mr-2"></i>Tambah Admin
    </a>

    <div class="card-body">
        <div class="table-responsive">

        <?php if ( $this->session->flashdata('flash') ) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert"> Admin
        <strong> berhasil</strong> 
        <?= $this->session->flashdata('flash'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <?php endif; ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telephon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($admin as $admin) :  ?>
                    <tr>
                        <td><?= $admin['id_admin']; ?></td>
                        <td><?= $admin['nama']; ?></td>
                        <td><?= $admin['email']; ?></td>
                        <td><?= $admin['No_telp']; ?></td>
                        <td class="my-5">
                            <a class="btn btn-warning" href="<?= base_url('Admin/edit/') ?><?= $admin['id_admin'] ?>"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" onclick="return confirm('Yakin Ingin hapus?');" href="<?= base_url('Admin/hapus/'); ?><?= $admin['id_admin'] ?>"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->