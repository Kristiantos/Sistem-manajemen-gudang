  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center fixeed-top justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-dragon"></i>
    </div>
    <div class="sidebar-brand-text mx-1">Gudang Naga</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-2">


<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('dashboard'); ?>">
        <i class="fas fa-fw fa-tachometer-alt text-light"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading text-light">
    Barang
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url('admin'); ?>" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-exchange-alt text-light"></i>
        <span>Transaksi</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
            <a class="collapse-item" href="<?= base_url('barang_masuk'); ?>">Barang Masuk</a>
            <a class="collapse-item" href="<?= base_url('barang_keluar'); ?>">Barang Keluar</a>
        </div>
    </div>
</li>

 <!-- Nav Item - stok -->
<!-- <li class="nav-item mb-2">
    <a class="nav-link" href="">
        <i class="fas fa-fw fa-boxes text-light"></i>
        <span>Stok</span></a>
</li> -->

<!-- Nav Item - kategori -->
<li class="nav-item mb-2">
   <a class="nav-link" href="<?= base_url('Kategori'); ?>">
   <i class="fas fa-fw fa-grip-horizontal text-light"></i>
       <span>Kategori</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading text-light">
    Suplier
</div>

 <!-- Nav Item - suplier -->
 <li class="nav-item mb-2">
   <a class="nav-link" href="<?= base_url('Suplier'); ?>">
   <i class="fas fa-fw fa-shipping-fast text-light"></i>
       <span>Data Suplier</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading text-light">
    Admin
</div>

<!-- Nav Item - Admin -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('Admin'); ?>">
    <i class="fas fa-fw fa-users  text-light"></i>
        <span>Data Admin</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
