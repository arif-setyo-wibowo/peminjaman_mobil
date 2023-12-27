<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?= $judul ?></title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
   <!-- icheck bootstrap -->
   <link rel="stylesheet" href="<?= base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/adminlte.min.css">
</head>

<body class="login-page" style="min-height: 496.111px;">
   <div class="login-box">
      <div class="login-logo">
         <a href="<?= base_url()?>assets/index2.html"><b><?= $judul ?></a>
      </div>
      <?php if ($this->session->flashdata('msg')) { ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert" id="autoDismissAlert">
         <?= $this->session->flashdata('msg') ?>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <?php } ?>
      <!-- /.login-logo -->