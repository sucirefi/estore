<style type="text/css">
  .form-group input{border-radius: 5px;}
</style>
  <div class="callout callout-warning">
          <h4>Edit Data User!</h4>
        </div>
<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data User</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="<?php echo base_url('user/update'); ?>" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST" style ="padding: 30px 50px;">
<input type="hidden" name="id" value="<?php echo $user->user_id; ?>">

                    <div class="form-group">
                      <input type="text" name="username" placeholder="Masukkan Username" class="form-control" value="<?php echo $user->user_username; ?>">
                    </div>

                    <div class="form-group">
                      <input type="text" name="password" placeholder="Masukkan Password" class="form-control" value="<?php echo $user->user_password; ?>">
                    </div>
                    <?php if ($user->user_level=='admin') {
                      $a='checked';
                      $k=null;
                    }else{
                      $a=null;
                      $k='checked';
                    } ?>
                    <div class="form-group">
                      <input type="radio" name="level" class="" readonly="" value="admin" <?php echo $a; ?>>  Admin
                      <input type="radio" name="level" class="" readonly="" value="kasir" <?php echo $k; ?>>  Kasir
                    </div>
                     
  <div class="form-group">
       <a href="<?php echo base_url('user'); ?>"class="btn btn-warning" type="button" name="cancel" value="cancel" style="color:#fff;">Cancel</a>
       <button class="btn btn-primary" type="reset" name="reset" value="reset">Reset</button>
       <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
   </div>
                  </form> 
                </div>
      </div>
      <!-- /.box -->