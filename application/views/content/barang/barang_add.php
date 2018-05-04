<style type="text/css">
  .form-group input{border-radius: 5px;}
</style>
  <div class="callout callout-info">
          <h4>Tambah Data Barang!</h4>
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
          <form action="<?php echo base_url('barang/save'); ?>" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST" style ="padding: 30px 50px;">
<?php $query=$this->db->get('barang')->num_rows();
$bar="br000";
$kode=$query+1;
$hasil=$bar.$kode;
 ?>

                    <div class="form-group">
                      <input type="text" name="kodebar" value="<?=$hasil?>" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                      <input type="text" name="namabar" placeholder="Nama Barang" class="form-control">
                    </div>

                     <div class="form-group">
                      <input type="date" name="entri" value="<?php echo date('Y-m-d'); ?>"  class="form-control" readonly>
                    </div>
                     
                     <div class="form-group">
                      <input type="text" name="harga" placeholder="Rp.x,xxx,xxx,xxx" class="form-control">
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