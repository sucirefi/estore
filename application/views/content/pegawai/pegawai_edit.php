<style type="text/css">
  .form-group input{border-radius: 5px;}
</style>
  <div class="callout callout-warning">
          <h4>Edit Data Pegawai!</h4>
        </div>
<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data Pegawai</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="<?php echo base_url('pegawai/update'); ?>" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST" style ="padding: 30px 50px;">
            <input type="hidden" name="id" value="<?php echo $pegawai->pegawai_id; ?>">
            <input type="hidden" name="foto_id" value="<?php echo $pegawai->pegawai_foto; ?>">


                   

                    <div class="form-group">
                      <input type="text" name="namapeg" placeholder="Nama Pegawai" class="form-control" value="<?php echo $pegawai->pegawai_nama; ?>">
                    </div>
<?php 
if ($pegawai->pegawai_jk=='L') {
  $laki='checked';
  $cwe=null;
}else{
  $laki=null;
  $cwe='checked';
}
 ?>
                     <div class="form-group">
                      <input type="radio" name="jk" class="" value="L" <?php echo $laki; ?>>  Laki Laki
                      <input type="radio" name="jk" class="" value="P" <?php echo $cwe; ?>>  Perempuan
                    </div>

                     <div class="form-group">
                      <input type="text" name="telpeg" placeholder="No. Telepon" class="form-control" value="<?php echo $pegawai->pegawai_notel; ?>">
                    </div>
                     
                     <div class="form-group">
                      <input type="text" name="alamat" placeholder="Alamat" class="form-control" value="<?php echo $pegawai->pegawai_alamat; ?>">
                    </div>

                    <div class="form-group">
                      <input type="text" name="tmp" placeholder="Tempat Lahir" class="form-control" value="<?php echo $pegawai->pegawai_tmp_lahir; ?>">
                    </div>

                    <div class="form-group">
                      <input type="date" name="tgl" class="form-control" value="<?php echo $pegawai->pegawai_tgl_lahir; ?>">
                    </div>
                    <div class="form-group">
                      <input type="file" name="foto" class="form-control" >
                    </div>
  <div class="form-group">
       <a href="<?php echo base_url('pegawai'); ?>"class="btn btn-warning" type="button" name="cancel" value="cancel" style="color:#fff;">Cancel</a>
       <button class="btn btn-primary" type="reset" name="reset" value="reset">Reset</button>
       <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
   </div>
                  </form> 
                </div>
      </div>
      <!-- /.box -->