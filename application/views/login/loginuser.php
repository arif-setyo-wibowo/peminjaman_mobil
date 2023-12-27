<?php $this->load->view($header)?>
<div class="card">
   <div class="card-body login-card-body">
      <form action="<?= base_url('login-user')?>" method="post">
         <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username">
            <div class="input-group-append">
               <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
               </div>
            </div>
         </div>
         <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
               <div class="input-group-text">
                  <span class="fas fa-lock"></span>
               </div>
            </div>
         </div>
         <div class="row">
            <!-- /.col -->
            <div class="col-4">
               <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
         </div>
      </form>
   </div>
   <!-- /.login-card-body -->
</div>
<?php $this->load->view($footer)?>
