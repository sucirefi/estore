<style type="text/css">
  .form-group input{border-radius: 5px;}
</style>
  <div class="callout callout-info">
          <h4>Tambah Data Pegawai!</h4>
        </div>
<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Pegawai</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="<?php echo base_url('pegawai/save'); ?>" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST" style ="padding: 30px 50px;">


                   

                    <div class="form-group">
                      <input type="text" name="namapeg" placeholder="Nama Pegawai" class="form-control">
                    </div>

                     <div class="form-group">
                      <input type="radio" name="jk" class="" value="L">  Laki Laki
                      <input type="radio" name="jk" class="" value="P">  Perempuan
                    </div>

                     <div class="form-group">
                      <input type="text" name="telpeg" placeholder="No. Telepon" class="form-control">
                    </div>
                     
                     <div class="form-group">
                      <input type="text" name="alamat" placeholder="Alamat" class="form-control">
                    </div>

                    <div class="form-group">
                      <input type="text" name="tmp" placeholder="Tempat Lahir" class="form-control">
                    </div>

                    <div class="form-group">
                      <input type="date" name="tgl" class="form-control">
                    </div>
                    <div class="form-group">
                      <input type="file" name="foto" class="form-control">
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