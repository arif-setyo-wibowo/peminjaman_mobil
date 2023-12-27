<?php $this->load->view($header)?>
<div class="content-wrapper ml-0 mt-5">
   <!-- Content Header (Page header) -->
   <!-- /.content-header -->
   <!-- Main content -->
   <section class="content">
      <div class="jumbotron mx-0 d-flex align-items-center justify-content-center" style="background-image: url('<?= base_url('assets/dist/img/gambar.jpg') ?>'); background-size: cover; opacity: 0.9; background-position: center; color: #ffffff; text-align: center; height: calc(100vh - 56px);">

         <!-- Menggunakan div untuk menahan teks agar dapat diatur posisinya -->
         <div>
            <h1 class="fw-bolder" style="font-size: clamp(2rem, 8vw, 5rem);">Selamat Datang Di Website Rental Mobil</h1>
            <h5 style="font-size: clamp(1rem, 4vw, 2rem);">Sewa mobil dan jelajahi destinasi Anda dengan nyaman dan mudah.</h5>

            <!-- Diperbaiki href pada tombol -->
            <a href="<?= base_url('data-kendaraan') ?>" class="btn btn-outline-secondary btn-sm text-white mt-4">Data Kendaraan</a>
         </div>
      </div>

   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $this->load->view($footer)?>
