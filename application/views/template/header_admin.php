<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>AdminLTE 3 | Dashboard</title>

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
               <a href="index3.html" class="nav-link">Home</a>
            </li>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
               <!-- Navbar Search -->
               <li class="nav-item">
                  <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                     <i class="fas fa-search"></i>
                  </a>
                  <div class="navbar-search-block">
                     <form class="form-inline">
                        <div class="input-group input-group-sm">
                           <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                           <div class="input-group-append">
                              <button class="btn btn-navbar" type="submit">
                                 <i class="fas fa-search"></i>
                              </button>
                              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                 <i class="fas fa-times"></i>
                              </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </li>
            </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
         <!-- Brand Logo -->
         <a href="index3.html" class="brand-link">
            <img src="<?= base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
         </a>

         <!-- Sidebar -->
         <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                  <img src="<?= base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
               </div>
               <div class="info">
                  <a href="#" class="d-block">Alexander Pierce</a>
               </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                     <a href="<?= base_url()?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           Dashboard
                        </p>
                     </a>
                  </li>
                  <li class="nav-header">Data Input </li>
                  <li class="nav-item">
                     <a href="<?= base_url('kategori')?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                           Kategori
                        </p>
                     </a>
                  </li>

                  <li class="nav-item">
                     <a href="<?= base_url('mobil')?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                           Mobil
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('pengguna')?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                           Pengguna
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('peminjaman')?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                           Peminjaman
                        </p>
                     </a>
                  </li>
                  <li class="nav-header">Data Report </li>
                  <li class="nav-item">
                     <a href="<?= base_url('pengembalian')?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                           Pengembalian
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('history')?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                           History
                        </p>
                     </a>
                  </li>

               </ul>
            </nav>
            <!-- /.sidebar-menu -->
         </div>
         <!-- /.sidebar -->
      </aside>