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

      <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
         <div class="container">
            <a href="<?= base_url()?>" class="navbar-brand">
            <span class="brand-text font-weight-light">Rental Mobil</span>
            </a>

            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            </div>

            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
               <?php if ($this->session->userdata('idpengguna') && $this->session->userdata('role') == 'Admin' ) : ?>
                  <li class="nav-item"><a href="<?= base_url('kategori')?>" class="btn btn-primary">Dashboard Admin</a></li>
                  <li class="nav-item ml-2"><a href="<?= base_url('logout')?>" class="btn btn-danger">Logout</a></li>
               <?php elseif ($this->session->userdata('idpengguna') && $this->session->userdata('role') == 'Petugas' ) : ?>
                  <li class="nav-item"><a href="<?= base_url('kategori')?>" class="btn btn-success">Dashboard Petugas</a></li>
                  <li class="nav-item ml-2"><a href="<?= base_url('logout')?>" class="btn btn-danger">Logout</a></li>
               <?php elseif ($this->session->userdata('idpengguna') && $this->session->userdata('role') == 'User' ) : ?>
                  <li class="nav-item"><a href="<?= base_url('history')?>" class="btn btn-success">Dashboard User</a></li>
                  <li class="nav-item ml-2"><a href="<?= base_url('logout')?>" class="btn btn-danger">Logout</a></li>
               <?php else : ?> 
                  <li class="nav-item"><a href="<?= base_url('login')?>" class="btn btn-primary">Login</a></li>
               <?php endif;?>
            </ul>
         </div>
      </nav>
      <div class="content-wrapper ml-0">
         <!-- Content Header (Page header) -->
         <!-- /.content-header -->
         <!-- Main content -->
         <section class="content">
            <div class="container-fluid">
               <!-- Small boxes (Stat box) -->
               <?php if ($this->session->userdata('idpengguna') && $this->session->userdata('role') == 'Admin' ) : ?>
                  <div class="row">
                     <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                           <div class="inner">
                              <h3><?= $mobildata ?></h3>
                              <p>Total Mobil</p>
                           </div>
                           <div class="icon">
                              <i class="ion ion-android-car"></i>
                           </div>
                        </div>
                     </div>
                     <!-- ./col -->
                     <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                           <div class="inner">
                              <h3><?= $peminjamandata?></h3>
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
                              <h3><?= $userdata ?></h3>
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
               <?php elseif ($this->session->userdata('idpengguna') && $this->session->userdata('role') == 'Petugas' ) : ?>
                  <div class="row">
                     <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                           <div class="inner">
                              <h3><?= $mobildata ?></h3>
                              <p>Total Mobil</p>
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
                              <h3><?= $peminjamandata?></h3>
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
                              <h3><?= $userdata ?></h3>
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
               <?php endif;?>
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Data Kendaraan</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>No </th>
                              <th>Mobil</th>
                              <th>Tahun Mobil</th>
                              <th>Warna</th>
                              <th>Gambar</th>
                              <th>Harga</th>
                              <th>Stok</th>
                              <th>Detail</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $no=1; foreach($mobil as $data) : ?>
                              <tr>
                                 <td><?= $no++ ?></td>
                                 <td><?= $data->nama_mobil; ?></td>
                                 <td><?= $data->tahun_mobil; ?></td>
                                 <td><?= $data->warna; ?></td> 
                                 <td><img style="height:200px;" src="<?= base_url('uploads/mobil/'.$data->gambar) ?>" alt="" srcset=""></td>
                                 <td><?= rupiah($data->harga_sewa); ?></td>
                                 <td><?= $data->stok; ?></td>
                                 <td>
                                    <a class="btn btn-primary btn-sm" href="<?= base_url('detail_mobil/'.$data->idmobil) ?>">
                                          <i class="fas fa-eye">
                                          </i>
                                          Detail
                                       </a>
                                 </td>
                              </tr>
                           <?php endforeach; ?>
                        </tbody>
                     </table>
                  </div>
                                <!-- /.card-body -->
               </div>
                            <!-- /.card -->
            </div><!-- /.container-fluid -->
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