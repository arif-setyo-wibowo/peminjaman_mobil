<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?= $judul ?></title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Tempusdominus Bootstrap 4 -->
   <link rel="stylesheet" href="<?= base_url()?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <!-- iCheck -->
   <link rel="stylesheet" href="<?= base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- JQVMap -->
   <link rel="stylesheet" href="<?= base_url()?>assets/plugins/jqvmap/jqvmap.min.css">
   <!-- overlayScrollbars -->
   <link rel="stylesheet" href="<?= base_url()?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="<?= base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="<?= base_url()?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <link rel="stylesheet" href="<?= base_url()?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/adminlte.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">

      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
         <img class="animation__shake" src="<?= base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
      </div>

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
               <a href="<?= base_url() ?>" class="nav-link">Dashboard</a>
            </li>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
         <!-- Brand Logo -->
         <a href="<?= base_url() ?>" class="brand-link">
            <img src="<?= base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Rental Mobil</span>
         </a>

         <!-- Sidebar -->
         <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                  <img src="<?= base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
               </div>
               <div class="info">
                  <a href="#" class="d-block"><?= $this->session->userdata('nama')?></a>
               </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <?php if ($this->session->userdata('idpengguna') && $this->session->userdata('role') == 'Admin' ) : ?>
                  <li class="nav-item">
                     <a href="<?= base_url('kategori')?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Kategori</p>
                     </a>
                  </li>

                  <li class="nav-item">
                     <a href="<?= base_url('mobil')?>" class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p>
                           Mobil
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('pengguna')?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                           Pengguna
                        </p>
                     </a>
                  </li>
                  <li class="nav-header">Data Laporan </li>
                  <li class="nav-item">
                     <a href="<?= base_url('laporan/jumlah-barang')?>" class="nav-link">
                        <i class="fas fa-arrow-right"></i>
                        <p>
                           Jumlah Barang
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('laporan/barang-dipinjam')?>" class="nav-link">
                        <i class="fas fa-arrow-right"></i>
                        <p>
                           Barang Dipinjam
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('laporan/barang-belum-kembali')?>" class="nav-link">
                        <i class="fas fa-arrow-right"></i>
                        <p>
                           Barang Belum Kembali
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('laporan/barang-sering-dipinjam')?>" class="nav-link">
                        <i class="fas fa-arrow-right"></i>
                        <p>
                           Barang Sering Dipinjam
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('laporan/barang-stok-habis')?>" class="nav-link">
                        <i class="fas fa-arrow-right"></i>
                        <p>
                           Barang Stok Habis
                        </p>
                     </a>
                  </li>
                  <?php elseif ($this->session->userdata('idpengguna') && $this->session->userdata('role') == 'Petugas' ) : ?>
                  <li class="nav-item">
                     <a href="<?= base_url('kategori')?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Kategori</p>
                     </a>
                  </li>

                  <li class="nav-item">
                     <a href="<?= base_url('mobil')?>" class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p>
                           Mobil
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('pengguna')?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                           Pengguna
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('peminjaman')?>" class="nav-link">
                        <i class="fas fa-file-export"></i>
                        <p>
                           Peminjaman
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('pengembalian')?>" class="nav-link">
                        <i class="fas fa-file-import"></i>
                        <p>
                           Pengembalian
                        </p>
                     </a>
                  </li>
                  <li class="nav-header">Data Laporan </li>
                  <li class="nav-item">
                     <a href="<?= base_url('laporan/jumlah-barang')?>" class="nav-link">
                        <i class="fas fa-arrow-right"></i>
                        <p>
                           Jumlah Barang
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('laporan/barang-dipinjam')?>" class="nav-link">
                        <i class="fas fa-arrow-right"></i>
                        <p>
                           Barang Dipinjam
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('laporan/barang-belum-kembali')?>" class="nav-link">
                        <i class="fas fa-arrow-right"></i>
                        <p>
                           Barang Belum Kembali
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('laporan/barang-sering-dipinjam')?>" class="nav-link">
                        <i class="fas fa-arrow-right"></i>
                        <p>
                           Barang Sering Dipinjam
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('laporan/barang-stok-habis')?>" class="nav-link">
                        <i class="fas fa-arrow-right"></i>
                        <p>
                           Barang Stok Habis
                        </p>
                     </a>
                  </li>
                  <?php elseif ($this->session->userdata('idpengguna') && $this->session->userdata('role') == 'User' ) : ?>
                  <li class="nav-item">
                     <a href="<?= base_url('history')?>" class="nav-link">
                        <i class="fas fa-history"></i>
                        <p>History</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('invoice')?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                           Invoice
                        </p>
                     </a>
                  </li>
                  <?php else : ?>
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="<?= base_url('login')?>" class="btn btn-primary">Login</a></li>
                  </ol>
                  <?php endif;?>
                  <li class="nav-item">
                     <a href="<?= base_url('logout')?>" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                     </a>
                  </li>
               </ul>
            </nav>
            <!-- /.sidebar-menu -->
         </div>
         <!-- /.sidebar -->
      </aside>
