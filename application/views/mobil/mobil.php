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
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Mobil</li>
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
                                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Data Mobil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Tambah Mobil</a>
                                </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-three-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
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
                                                <tr>
                                                    <td>1</td>
                                                    <td>Avanza</td>
                                                    <td>W 3434 BF</td>
                                                    <td>2</td>
                                                    <td>
                                                        <a class="btn btn-primary btn-sm" href="<?= base_url('mobil/detail') ?>">
                                                            <i class="fas fa-folder">
                                                            </i>
                                                            View
                                                        </a>
                                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-id="" data-target="#modal-default">
                                                                <i class="fas fa-pencil-alt"></i>    
                                                            Edit
                                                        </button>
                                                        <a class="btn btn-danger btn-sm" href="#">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            Delete
                                                        </a>
                                                    </td>
                                                   
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                                        <form>
                                            <div class="form-group">
                                                <label>Merk Mobil</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Kategori">
                                            </div>
                                            <div class="form-group">
                                                <label>Tahun Mobil</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Kategori">
                                            </div>
                                            <div class="form-group">
                                                <label>Plat Mobil</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Kategori">
                                            </div>
                                            <div class="form-group">
                                                <label>Bpkb Mobil</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Kategori">
                                            </div>
                                            <div class="form-group">
                                                <label>Mobil</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Kategori">
                                            </div>
                                            <div class="form-group">
                                                <label>Kapasitas</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Kategori">
                                            </div>
                                            <div class="form-group">
                                                <label>Warna</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Kategori">
                                            </div>
                                            <div class="form-group">
                                                <label>Gambar</label>
                                                <input type="file" class="form-control" placeholder="Masukkan Kategori">
                                            </div>
                                            <div class="form-group">
                                                <label>Stok</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Kategori">
                                            </div>
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select name="" >
                                                    <option value="">Kategori</option>
                                                </select>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
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
                        <label>Merk Mobil</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kategori">
                    </div>
                    <div class="form-group">
                        <label>Tahun Mobil</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kategori">
                    </div>
                    <div class="form-group">
                        <label>Plat Mobil</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kategori">
                    </div>
                    <div class="form-group">
                        <label>Bpkb Mobil</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kategori">
                    </div>
                    <div class="form-group">
                        <label>Mobil</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kategori">
                    </div>
                    <div class="form-group">
                        <label>Kapasitas</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kategori">
                    </div>
                    <div class="form-group">
                        <label>Warna</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kategori">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" class="form-control" placeholder="Masukkan Kategori">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kategori">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="" >
                            <option value="">Kategori</option>
                        </select>
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
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>