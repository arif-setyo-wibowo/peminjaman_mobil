<?php $this->load->view($header)?>
<div class="content-wrapper ml-0 mt-5">
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
                           <a class="btn btn-primary btn-sm" href="<?= base_url('data-kendaraan/detail_mobil/'.$data->idmobil) ?>">
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
<?php $this->load->view($footer)?>
