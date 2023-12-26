<?php $this->load->view($header)?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Data Peminjaman</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Peminjaman</li>
               </ol>
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
                           <a class="nav-link active" id="data-peminjaman-tab" data-toggle="pill" href="#data-peminjaman" role="tab" aria-controls="data-peminjaman" aria-selected="true">Data Peminjaman</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="tambah-edit-tab" data-toggle="pill" href="#tambah-edit" role="tab" aria-controls="tambah-edit" aria-selected="false">Tambah & Edit Peminjaman</a>
                        </li>
                     </ul>
                  </div>
                  <?php if ($this->session->flashdata('msg')) { ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert" id="autoDismissAlert">
                     <?= $this->session->flashdata('msg') ?>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <?php } ?>
                  <?php if ($this->session->flashdata('error')) { ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert" id="autoDismissAlert">
                     <?= $this->session->flashdata('error') ?>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <?php } ?>
                  <div class="card-body">
                     <div class="tab-content" id="custom-tabs-three-tabContent">
                        <div class="tab-pane fade show active" id="data-peminjaman" role="tabpanel" aria-labelledby="data-peminjaman-tab">
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th>No </th>
                                    <th>Penyewa </th>
                                    <th>Petugas </th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Mobil</th>
                                    <th>Jumlah</th>
                                    <th>Plat</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php $no=1; ?>
                                 <?php foreach ($peminjaman as $data) : ?>
                                 <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->nama_pengguna ?></td>
                                    <td><?= $data->nama_petugas ?></td>
                                    <td><?= $data->tgl_pinjam ?></td>
                                    <td><?= $data->nama_mobil ?></td>
                                    <td><?= $data->jumlah ?></td>
                                    <td><?= $data->no_plat ?></td>
                                    <td>
                                       <button type="button" class="btn btn-info btn-sm" onclick="editPinjam('<?= $data->idpinjam ?>','<?= $data->idpengguna ?>','<?= $data->idmobil ?>','<?= $data->tgl_pinjam ?>','<?= $data->jumlah ?>')">
                                          <i class="fas fa-pencil-alt"></i>
                                          Edit
                                       </button>
                                       <a href="<?= base_url('peminjaman/selesaikan/'. $data->idpinjam) ?>" class="btn btn-success btn-sm"><i class="fas fa-check"></i> Selesaikan</a>
                                    </td>
                                 </tr>
                                 <?php endforeach; ?>
                              </tbody>
                           </table>
                        </div>
                        <div class="tab-pane fade" id="tambah-edit" role="tabpanel" aria-labelledby="tambah-edit-tab">
                           <form onsubmit="return validateForm()" action="<?= base_url('peminjaman/tambah-edit') ?>" method="POST">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">User</label>
                                 <select name="idpengguna" id="idpengguna" class="form-control" required>
                                    <option value selected disabled>Pilih User</option>
                                    <?php foreach ($pengguna as $data) :?>
                                    <option value="<?= $data->idpengguna ?>"><?= $data->nama ?> </option>
                                    <?php endforeach?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Mobil</label>
                                 <select name="idmobil" id="idmobil" class="form-control" required onchange="ubahPilihan()">
                                    <option value selected disabled>Pilih Mobil</option>
                                    <?php foreach ($mobil as $data) :?>
                                    <option value="<?= $data->idmobil ?>" data-stok="<?= $data->stok ?>"><?= $data->nama_mobil. ' - Rp ' . number_format($data->harga_sewa, 0, ',', '.'). ' /Hari' ?> </option>
                                    <?php endforeach?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Tanggal Pinjam</label>
                                 <input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam" placeholder="Masukkan tanggal pinjam" required>
                              </div>
                              <div class="form-group">
                                 <label>Jumlah Barang</label>
                                 <select name="jumlah" id="jumlah" class="form-control" required>
                                    <option disabled selected>Pilih Jumlah</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <input type="hidden" name="idpinjam" id="idpinjam">
                                 <input type="submit" name="proses" id="proses" value="Tambah" class="btn btn-primary">
                              </div>
                           </form>
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

<?php $this->load->view($footer)?>
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