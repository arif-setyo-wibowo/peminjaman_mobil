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

      <div class="content-wrapper ml-0">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0">Selamat Datang Di Aplikasi Peminjaman</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                     <?php if ($this->session->userdata('idpengguna') && $this->session->userdata('role') == 'Admin' ) : ?>
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('kategori')?>" class="btn btn-primary">Dashboard Admin</a></li>
                     </ol>&nbsp;
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('logout')?>" class="btn btn-danger">Logout</a></li>
                     </ol>
                     <?php elseif ($this->session->userdata('idpengguna') && $this->session->userdata('role') == 'Petugas' ) : ?>
                     <ol class="breadcrumb float-sm-right ml-2">
                        <li class="breadcrumb-item"><a href="<?= base_url('kategori')?>" class="btn btn-success">Dashboard Petugas</a></li>
                     </ol>
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('logout')?>" class="btn btn-danger">Logout</a></li>
                     </ol>
                     <?php elseif ($this->session->userdata('idpengguna') && $this->session->userdata('role') == 'User' ) : ?>
                     <ol class="breadcrumb float-sm-right ml-2">
                        <li class="breadcrumb-item"><a href="<?= base_url('history')?>" class="btn btn-success">Dashboard User</a></li>
                     </ol>
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('logout')?>" class="btn btn-danger">Logout</a></li>
                     </ol>
                     <?php else : ?>
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('login')?>" class="btn btn-primary">Login</a></li>
                     </ol>
                     <?php endif;?>


                  </div><!-- /.col -->
               </div><!-- /.row -->
            </div><!-- /.container-fluid -->
         </div>


         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper ml-0">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <a href="<?= base_url('') ?>" class="btn btn-sm btn-danger">Kembali</a>
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-12 ">
                        <div class="card card-primary card-outline card-tabs">
                           <div class="card-header p-0 pt-1 border-bottom-0">
                              <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                 <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Data Mobil</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="card-body">
                              <div class="tab-content" id="custom-tabs-three-tabContent">
                                 <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                                    <table class="table table-hover text-nowrap">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Data</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <th scope="row">Gambar</th>
                                             <td><img style="height:200px;" src="<?= base_url('uploads/mobil/'.$mobil->gambar) ?>" alt="" srcset=""></td>
                                          </tr>
                                          <tr>
                                             <th scope="row">Mobil</th>
                                             <td><?= $mobil->nama_mobil ?></td>
                                          </tr>
                                          <tr>
                                             <th scope="row">Plat Nomer</th>
                                             <td><?= $mobil->no_plat ?></td>
                                          </tr>
                                          <tr>
                                             <th scope="row">Harga Perhari</th>
                                             <td><?= "Rp " . number_format($mobil->harga_sewa, 0, ',', '.') ?></td>
                                          </tr>
                                          <tr>
                                             <th scope="row">Kategori</th>
                                             <td><?= $mobil->kategori ?></td>
                                          </tr>
                                          <tr>
                                             <th scope="row">Stok</th>
                                             <td><?= $mobil->stok ?></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <!-- /.card -->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
         </div>



         <!-- /.content-wrapper -->
         <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
               <b>Version</b> 3.2.0
            </div>
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
      <script>
      $(function() {
         $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["csv", "excel", "pdf", "print"]
         }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      });
      </script>
</body>

</html>