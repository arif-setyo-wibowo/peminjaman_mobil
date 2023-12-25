<?php $this->load->view($header)?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Data Pengguna</h1>
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
                           <a class="nav-link active" id="data-pengguna-tab" data-toggle="pill" href="#data-pengguna" role="tab" aria-controls="data-pengguna" aria-selected="true">Data Pengguna</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="tambah-edit-tab" data-toggle="pill" href="#tambah-edit" role="tab" aria-controls="tambah-edit" aria-selected="false">Tambah & Edit Pengguna</a>
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
                        <div class="tab-pane fade show active" id="data-pengguna" role="tabpanel" aria-labelledby="data-pengguna-tab">
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th>No </th>
                                    <th>Nama pengguna</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php $no = 1?>
                                 <?php foreach($pengguna as $data): ?>
                                 <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->nama ?></td>
                                    <td><?= $data->username ?></td>
                                    <td><?= $data->email ?></td>
                                    <td><?= $data->level ?></td>
                                    <td>
                                       <?php if($data->level != 'Admin'): ?>
                                       <a onclick="return confirm('Yakin Ingin Mengubah Status User <?= $data->username ?> ?')" href="<?= base_url('pengguna/status/'.$data->idpengguna. ($data->status == 'aktif' ? '/nonaktif' : '/aktif')) ?>"
                                          class="text-uppercase btn btn-sm <?= $data->status == 'aktif' ? 'btn-success' : 'btn-danger' ?>"><?= $data->status ?></a>
                                       <?php else: ?>
                                       <a class="text-uppercase btn btn-sm btn-success"><?= $data->status ?></a>
                                       <?php endif ?>
                                    </td>

                                    <td>
                                       <?php if($data->level != 'Admin'): ?>
                                       <button type="button" class="btn btn-info btn-sm" onclick="editPengguna('<?= $data->idpengguna ?>','<?= $data->nama ?>','<?= $data->username ?>','<?= $data->email ?>','<?= $data->level ?>')">
                                          <i class="fas fa-pencil-alt"></i>
                                          Edit
                                       </button>
                                       <a class="btn btn-danger btn-sm" href="<?= base_url('pengguna/hapus/'.$data->idpengguna) ?>" onclick="return confirm('Yakin Ingin Menghapus User <?= $data->username ?> ?')">
                                          <i class="fas fa-trash">
                                          </i>
                                          Delete
                                       </a>
                                       <?php endif; ?>
                                    </td>

                                 </tr>
                                 <?php endforeach;?>
                              </tbody>
                           </table>
                        </div>
                        <div class="tab-pane fade" id="tambah-edit" role="tabpanel" aria-labelledby="tambah-edit-tab">
                           <form action="<?= base_url('/pengguna/tambah-edit') ?>" method="POST">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Nama Pengguna</label>
                                 <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Pengguna" required>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Username</label>
                                 <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Email</label>
                                 <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Password</label>
                                 <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                                 <span class="text-danger" id="notifPassword"></span>
                              </div>
                              <input type="hidden" name="idpengguna" id="idpengguna">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Role</label>
                                 <select name="level" id="level" class="form-control">
                                    <option value="User">User</option>
                                    <option value="Petugas">Petugas</option>
                                 </select>
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