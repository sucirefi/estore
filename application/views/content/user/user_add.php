<?php $query=$this->db->get('pegawai'); ?>
<style type="text/css">
  .form-group input, .form-group select{border-radius: 5px;}
</style>
  <div class="callout callout-info">
          <h4>Tambah Data User!</h4>
        </div>
<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data User</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="<?php echo base_url('user/save'); ?>" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST" style ="padding: 30px 50px;">
            <?php $data=$this->db->get('user')->num_rows();
$bar="us000";
$kode=$data+1;
$hasil=$bar.$kode;
 ?>
                    <div class="form-group">
                      <input type="text" name="kodeus" value="<?=$hasil?>" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                      <input type="text" name="username" placeholder="Masukkan Username" class="form-control">
                    </div>

                    <div class="form-group">
                      <input type="text" name="password" placeholder="Masukkan Password" class="form-control">
                    </div>

                    <div class="form-group">
                     <select class="form-control" name="napeg">
                      <?php 
                      if ($query->num_rows()>0) {
                        foreach ($query->result() as $user) {
                          echo'<option value="'.$user->pegawai_id.'">'.$user->pegawai_nama.'</option>';
                        }
                      }
                       ?>
                     </select>
                    </div>
                    <div class="form-group">
                      <input type="radio" name="level" class="" value="admin">  Admin
                      <input type="radio" name="level" class="" value="kasir">  Kasir
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