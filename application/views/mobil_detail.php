<?php $this->load->view($header)?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Data Mobil Detail</h1>
               <a href="<?= base_url('mobil') ?>" class="btn btn-sm btn-danger">Kembali</a>
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
                                    <th scope="row">Gambar </th>
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


<?php $this->load->view($footer)?>