<?php $this->load->view($header)?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Data Kategori</h1>
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
                           <a class="nav-link active" id="custom-tab-kategori" data-toggle="pill" href="#tab-kategori" role="tab" aria-controls="tab-kategori" aria-selected="true">Data Kategori</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="custom-tab-tambah-edit" data-toggle="pill" href="#tab-tambah-edit" role="tab" aria-controls="tab-tambah-edit" aria-selected="false">Tambah & Edit Kategori</a>
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
                        <div class="tab-pane fade show active" id="tab-kategori" role="tabpanel" aria-labelledby="custom-tab-kategori">
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th>No </th>
                                    <th>Kategori</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php $no = 1;?>
                                 <?php foreach ($kategori as $data) : ?>
                                 <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->kategori ?></td>
                                    <td>
                                       <button type="button" class="btn btn-info btn-sm" onclick="editKategori('<?= $data->idkategori ?>','<?= $data->kategori ?>')">
                                          <i class="fas fa-pencil-alt"></i>
                                          Edit
                                       </button>
                                       <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Kategori?')" href="<?= base_url('kategori/hapus/'.$data->idkategori) ?>">
                                          <i class="fas fa-trash">
                                          </i>
                                          Delete
                                       </a>
                                    </td>

                                 </tr>
                                 <?php endforeach;?>
                              </tbody>
                           </table>
                        </div>
                        <div class="tab-pane fade" id="tab-tambah-edit" role="tabpanel" aria-labelledby="custom-tab-tambah-edit">
                           <form action="<?= base_url('/kategori/tambah-edit') ?>" method="POST">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Kategori</label>
                                 <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukkan Kategori" required>
                                 <input type="hidden" name="idkategori" id="idkategori">
                              </div>
                              <div class="form-group">
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

<!-- Modal -->
<div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Default Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <form>
            <div class="modal-body">
               <div class="form-group">
                  <label for="exampleInputEmail1">Kategori</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Kategori">
               </div>
            </div>
            <div class="modal-footer justify-content-between">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
         </form>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
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