<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Rental Mobil | Dashboard</title>

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
      <nav class="main-header navbar navbar-expand-md navbar-light navbar-white ml-0">
         <div class="container">
            <a href="<?= base_url() ?>" class="navbar-brand">
               <span class="fw-bold">Rental Mobil</span>
            </a>

            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
               <!-- Messages Dropdown Menu -->
               <li class="nav-item">
                  <a href="<?= base_url() ?>" class="nav-link text-dark">Home</a>
               </li>
               <li class="nav-item">
                  <a href="<?= base_url('data-kendaraan') ?>" class="nav-link text-dark">Data Kendaraan </a>
               </li>
               <?php if ($this->session->userdata('idpengguna') && $this->session->userdata('role') == 'Admin' ) : ?>
               <li class="nav-item"><a href="<?= base_url('kategori')?>" class="btn btn-primary rounded-pill">Dashboard Admin</a></li>
               <li class="nav-item ml-2"><a href="<?= base_url('logout')?>" class="btn btn-danger rounded-pill">Logout</a></li>
               <?php elseif ($this->session->userdata('idpengguna') && $this->session->userdata('role') == 'Petugas' ) : ?>
               <li class="nav-item"><a href="<?= base_url('kategori')?>" class="btn btn-success rounded-pill">Dashboard Petugas</a></li>
               <li class="nav-item ml-2"><a href="<?= base_url('logout')?>" class="btn btn-danger rounded-pill">Logout</a></li>
               <?php elseif ($this->session->userdata('idpengguna') && $this->session->userdata('role') == 'User' ) : ?>
               <li class="nav-item"><a href="<?= base_url('history')?>" class="btn btn-success rounded-pill">Dashboard User</a></li>
               <li class="nav-item ml-2"><a href="<?= base_url('logout')?>" class="btn btn-danger rounded-pill">Logout</a></li>
               <?php else : ?>
               <li class="nav-item dropdown">
                  <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle btn btn-sm btn-primary text-light fw-bold rounded-pill">Login</a>
                  <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                     <li><a href="<?= base_url('login-admin') ?>" class="dropdown-item">Admin </a></li>
                     <li><a href="<?= base_url('login-petugas') ?>" class="dropdown-item">Petugas</a></li>
                     <li><a href="<?= base_url('login-user') ?>" class="dropdown-item">User</a></li>
                  </ul>
               </li>
               <?php endif;?>
            </ul>
         </div>
      </nav>
