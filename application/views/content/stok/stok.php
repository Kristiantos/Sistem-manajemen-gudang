 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-boxes mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                     <?php foreach ($stok as $stok) : 
                            foreach($kategori as $k):
                                foreach ($barang_masuk as $masuk) :
                            ?>
                    <tr>
                        <td><?= ($stok['kode_barang'] == $masuk['kode_barang'] ? $masuk['nama_barang'] : '' ); ?></td>
                        <td><?= ($stok['id_kategori'] == $k['id_kategori'] ? $k['jenis_kategori'] : '' ); ?></td>
                        <td><?= $stok['stok']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endforeach; ?>
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