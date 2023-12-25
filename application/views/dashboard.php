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

      <div class="content-wrapper ml-0">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0">Selamat Datang Di Aplikasi Peminjaman</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" class="btn btn-primary">Login</a></li>
                     </ol>
                  </div><!-- /.col -->
               </div><!-- /.row -->
            </div><!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->

         <!-- Main content -->
         <section class="content">
            <div class="container-fluid">
               <!-- Small boxes (Stat box) -->
               <div class="row">
                  <div class="col-lg-4 col-6">
                     <!-- small box -->
                     <div class="small-box bg-info">
                        <div class="inner">
                           <h3>150</h3>
                           <p>Total Barang</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-bag"></i>
                        </div>
                     </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-4 col-6">
                     <!-- small box -->
                     <div class="small-box bg-success">
                        <div class="inner">
                           <h3>53<sup style="font-size: 20px">%</sup></h3>
                           <p>Total Pinjaman</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-stats-bars"></i>
                        </div>
                     </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-4 col-6">
                     <!-- small box -->
                     <div class="small-box bg-warning">
                        <div class="inner">
                           <h3>44</h3>
                           <p>Total User</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-person-add"></i>
                        </div>
                     </div>
                  </div>
                  <!-- ./col -->
               </div>
               <!-- /.row -->
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>No </th>
                        <th>Kategori</th>
                        <th>Nama Barang</th>
                        <th>Sisa Stok</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>1</td>
                        <td>2023-12-09</td>
                        <td>2023-12-12</td>
                        <td>Avanza</td>
                     </tr>
                  </tbody>
               </table>
            </div><!-- /.container-fluid -->
         </section>
         <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer ml-0">
         <strong>Copyright &copy; 2023</strong>
         All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
         <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
   </div>
   <!-- ./wrapper -->
   <!-- jQuery -->
   <script src="<?= base_url()?>assets/plugins/jquery/jquery.min.js"></script>
   <!-- jQuery UI 1.11.4 -->
   <script src="<?= base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
   <script>
   $.widget.bridge('uibutton', $.ui.button)
   </script>
   <!-- Bootstrap 4 -->
   <script src="<?= base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- Sparkline -->
   <script src="<?= base_url()?>assets/plugins/sparklines/sparkline.js"></script>
   <!-- Tempusdominus Bootstrap 4 -->
   <script src="<?= base_url()?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
   <!-- Summernote -->
   <script src="<?= base_url()?>assets/plugins/summernote/summernote-bs4.min.js"></script>
   <!-- overlayScrollbars -->
   <script src="<?= base_url()?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
   <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   <script src="<?= base_url()?>assets/dist/js/pages/dashboard.js"></script>

   <!-- DataTables  & Plugins -->
   <script src="<?= base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
   <script src="<?= base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="<?= base_url()?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
   <script src="<?= base_url()?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
   <script src="<?= base_url()?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
   <script src="<?= base_url()?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
   <script src="<?= base_url()?>assets/plugins/jszip/jszip.min.js"></script>
   <script src="<?= base_url()?>assets/plugins/pdfmake/pdfmake.min.js"></script>
   <script src="<?= base_url()?>assets/plugins/pdfmake/vfs_fonts.js"></script>
   <script src="<?= base_url()?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
   <script src="<?= base_url()?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
   <script src="<?= base_url()?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
   <!-- AdminLTE App -->
   <script src="<?= base_url()?>assets/dist/js/adminlte.min.js"></script>
   <script src="<?= base_url()?>assets/custom.js"></script>

</body>

</html>