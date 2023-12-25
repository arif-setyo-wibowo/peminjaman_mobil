<?php $this->load->view($header)?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Data Mobil</h1>
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
                           <a class="nav-link active" id="data-mobil-tab" data-toggle="pill" href="#data-mobil" role="tab" aria-controls="data-mobil" aria-selected="true">Data Mobil</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="tambah-edit-tab" data-toggle="pill" href="#tambah-edit" role="tab" aria-controls="tambah-edit" aria-selected="false">Tambah & Edit Mobil</a>
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
                        <div class="tab-pane fade show active" id="data-mobil" role="tabpanel" aria-labelledby="data-mobil-tab">
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th>No </th>
                                    <th>Mobil</th>
                                    <th>Plat Nomer</th>
                                    <th>Stok</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php $no = 1?>
                                 <?php foreach ($mobil as $data) :?>
                                 <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->nama_mobil ?></td>
                                    <td><?= $data->no_plat ?></td>
                                    <td><?= $data->stok ?></td>
                                    <td>
                                       <a class="btn btn-primary btn-sm" href="<?= base_url('mobil/detail/'.$data->idmobil) ?>">
                                          <i class="fas fa-eye">
                                          </i>
                                          Detail
                                       </a>
                                       <button type="button" class="btn btn-info btn-sm"
                                          onclick="editMobil('<?= $data->idmobil ?>','<?= $data->merk_mobil ?>','<?= $data->nama_mobil ?>','<?= $data->idkategori ?>','<?= $data->tahun_mobil ?>','<?= $data->kapasitas ?>','<?= $data->harga_sewa ?>','<?= $data->stok ?>','<?= $data->no_plat ?>','<?= $data->warna ?>','<?= $data->gambar ?>','<?= $data->no_bpkb ?>')">
                                          <i class="fas fa-pencil-alt"></i>
                                          Edit
                                       </button>
                                       <a class="btn btn-danger btn-sm" href="<?= base_url('mobil/hapus/'.$data->idmobil) ?>" onclick="return confirm('Yakin Ingin Menghapus Data Mobil ?')">
                                          <i class="fas fa-trash">
                                          </i>
                                          Delete
                                       </a>
                                    </td>

                                 </tr>
                                 <?php endforeach?>
                              </tbody>
                           </table>
                        </div>
                        <div class="tab-pane fade" id="tambah-edit" role="tabpanel" aria-labelledby="tambah-edit-tab">
                           <form action="<?= base_url('mobil/tambah-edit') ?>" method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                 <label>Kategori</label>
                                 <select name="idkategori" id="idkategori" class="form-control" required>
                                    <option disabled selected>Pilih Kategori</option>
                                    <?php foreach ($kategori as $data) : ?>
                                    <option value="<?= $data->idkategori ?>"><?= $data->kategori ?></option>
                                    <?php endforeach?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Mobil</label>
                                 <input type="text" class="form-control" name="nama_mobil" id="nama_mobil" placeholder="Masukkan Nama Mobil" required>
                              </div>
                              <div class="form-group">
                                 <label>Merk Mobil</label>
                                 <input type="text" class="form-control" name="merk_mobil" id="merk_mobil" placeholder="Masukkan Merk Mobil" required>
                              </div>
                              <div class="form-group">
                                 <label>Tahun Mobil</label>
                                 <select name="tahun_mobil" id="tahun_mobil" class="form-control" required>
                                    <option disabled selected>Pilih Tahun</option>
                                    <?php for ($tahun = 1970; $tahun <= 2024; $tahun++):  ?>
                                    <option value="<?= $tahun ?>"><?= $tahun ?></option>
                                    <?php endfor?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Plat Mobil</label>
                                 <input type="text" class="form-control" name="no_plat" id="no_plat" placeholder="Masukkan PLat Nomor" required>
                              </div>
                              <div class="form-group">
                                 <label>Bpkb Mobil</label>
                                 <input type="text" class="form-control" name="no_bpkb" id="no_bpkb" placeholder="Masukkan No BPKB" required>
                              </div>
                              <div class="form-group">
                                 <label>Kapasitas (Orang)</label>
                                 <select name="kapasitas" id="kapasitas" class="form-control" required>
                                    <option disabled selected>Pilih Kapasitas</option>
                                    <?php for ($i=1; $i <= 10; $i++):  ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Warna</label>
                                 <input type="text" class="form-control" name="warna" id="warna" placeholder="Masukkan Warna" required>
                              </div>
                              <div class="form-group">
                                 <label>Gambar</label>
                                 <input type="file" class="form-control" name="gambar" id="gambar" required>
                                 <span class="text-danger" id="notifGambar"></span>
                              </div>
                              <div class="form-group">
                                 <label>Stok</label>
                                 <select name="stok" id="stok" class="form-control" required>
                                    <option disabled selected>Masukkan Jumlah Stok</option>
                                    <?php for ($i=1; $i <= 1000; $i++):  ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Harga Sewa (Perhari)</label>
                                 <input type="number" class="form-control" name="harga_sewa" id="harga_sewa" placeholder="Masukkan Harga Sewa" required>
                                 <input type="hidden" name="idmobil" id="idmobil">
                                 <input type="hidden" name="gambar_lama" id="gambar_lama">
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
