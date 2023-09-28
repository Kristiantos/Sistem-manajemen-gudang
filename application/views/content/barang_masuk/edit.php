 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 my-3 text-gray-800"><i class="fas fa-edit mx-3"></i><?= $title; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-6">
  
<form method="POST" class="mx-5 my-3">
  <div class="form-group">
    <label for="nama">Kode Barang :</label>
    <input hidden type="text" name="kode_barang" class="form-control" id="kode_barang" value="<?= $barang_masuk['kode_barang']; ?>">
    <small class="form-text text-danger"><?= form_error('kode_barang'); ?></small>
  </div>
  <div class="form-group">
    <label for="nama">Nama Barang :</label>
    <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="<?= $barang_masuk['nama_barang']; ?>">
    <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
  </div>
  <div class="form-group">
    <label for="jumlah">Jumlah :</label>
    <input type="text" name="jumlah" class="form-control" id="jumlah" value="<?= $barang_masuk['jumlah']; ?>">
    <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Kategori</label>
    <select class="form-control" name="id_kategori">
        <?php foreach ($kategori as $k) :  ?>
            <?php if( $k['id_kategori'] == $barang_masuk['id_kategori'] ) : ?>
                <option value="<?= $k["id_kategori"] ?>" selected> <?= $k["jenis_kategori"] ?></option>
                    <?php else : ?>
                    <option value="<?= $k["id_kategori"] ?>"> <?= $k["jenis_kategori"] ?></option>    
                    <?php endif; ?>          
        <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Suplier</label>
    <select class="form-control" name="kode_suplier" id="exampleFormControlSelect1">
        <?php foreach ($suplier as $sup) :  ?>
          <?php if( $sup['kode_suplier'] == $barang_masuk['kode_suplier'] ) : ?>
            <option value="<?= $sup["kode_suplier"] ?>" selected><?= $sup["perusahaan"] ?></option>
            <?php else : ?>
              <option value="<?= $sup["kode_suplier"] ?>"><?= $sup["perusahaan"] ?></option>
              <?php endif; ?> 
        <?php endforeach; ?>
    </select>
  </div>
  <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
  <a href="<?= base_url('barang_masuk') ?>" class="btn btn-danger float-right mx-2">Back</a>
</form>

</div>
</div>
