 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-reply mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <!-- Button trigger modal -->
    <a href="<?= base_url('barang_keluar/tambah') ?>" class="btn btn-primary mx-3">
    <i class="fas fa-plus mr-2"></i>Tambah Keluar
    </a>


    </div>
    <div class="card-body">
        <div class="table-responsive">
        <?php if ( $this->session->flashdata('flash') ) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert"> barang keluar
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
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Tujuan</th>
                        <th>Tanggal Keluar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                foreach ($barang_keluar as $keluar) :  
                    
                    ?>
                    <tr>
                        <td><?= $keluar['kode_barang'] ?></td>
                        <td><?= $keluar['nama_barang'] ?></td>
                        <td><?= $keluar['jumlah'] ?></td>
                        <td><?= $keluar['tujuan'] ?></td>
                        <td><?= $keluar['tgl_keluar'] ?></td>
                        <td>
                        <a class="btn btn-warning" href="<?= base_url('Barang_keluar/edit/') ?><?= $keluar['id_keluar']; ?>"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-danger" onclick="return confirm('Yakin Ingin hapus?');" href=" <?= base_url('Barang_keluar/hapus/') ?><?= $keluar['id_keluar'] ?>"><i class="fas fa-trash"></i></a>
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