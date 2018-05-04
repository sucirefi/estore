<style type="text/css">
  .form-group input{border-radius: 5px;}
</style>
  <div class="callout callout-warning">
          <h4>Edit Data Barang!</h4>
        </div>
<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Barang</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="<?php echo base_url('barang/update'); ?>" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST" style ="padding: 30px 50px;">

            <input type="hidden" name="id" value="<?php echo $edit->barang_id; ?>">
                                       <div class="form-group">
                      <input type="text" name="kodebar" placeholder="Masukkan Kode Barang" class="form-control" value="<?php echo $edit->barang_kode; ?>" readonly>
                    </div>

                    <div class="form-group">
                      <input type="text" name="namabar" placeholder="Nama Barang" class="form-control" value="<?php echo $edit->barang_nama; ?>">
                    </div>

                     <div class="form-group">
                      <input type="date" name="entri" value="<?php echo date('Y-m-d'); ?>"  class="form-control" readonly">
                    </div>
                     
                     <div class="form-group">
                      <input type="text" name="harga" placeholder="Rp.x,xxx,xxx,xxx" class="form-control" value="<?php echo $edit->barang_harga; ?>">
                    </div>
                    </div>
  <div class="form-group">
       <a href="<?php echo base_url('barang'); ?>"class="btn btn-warning" type="button" name="cancel" value="cancel" style="color:#fff;">Cancel</a>
       <button class="btn btn-primary" type="reset" name="reset" value="reset">Reset</button>
       <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
   </div>
                  </form> 
                </div>
      </div>
      <!-- /.box -->