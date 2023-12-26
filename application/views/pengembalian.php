<?php $this->load->view($header)?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Data Pengembalian</h1>
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
                           <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Data Pengembalian</a>
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
                  <div class="card-body">
                     <div class="tab-content" id="custom-tabs-three-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th>No </th>
                                    <th>Penyewa </th>
                                    <th>Petugas </th>
                                    <th>Tanggal Kembali</th>
                                    <th>Mobil</th>
                                    <th>Plat</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php $no=1; ?>
                                 <?php foreach ($pengembalian as $data) : ?>
                                 <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->nama_pengguna ?></td>
                                    <td><?= $data->nama_petugas ?></td>
                                    <td><?= $data->tgl_kembali ?></td>
                                    <td><?= $data->nama_mobil ?></td>
                                    <td><?= $data->no_plat ?></td>
                                    <td>
                                       <a class="btn btn-danger btn-sm" href="<?= base_url('pengembalian/delete/'.$data->idpinjam) ?>" onclick="return confirm('Yakin Ingin Menghapus Data Pengembalian ?')">
                                          <i class="fas fa-trash">
                                          </i>
                                          Delete
                                       </a>
                                    </td>
                                 </tr>
                                 <?php endforeach; ?>
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