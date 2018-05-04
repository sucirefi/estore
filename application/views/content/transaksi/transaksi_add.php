<?php $u= $this->db->get('user'); ?>
<style type="text/css">
  .form-group input, .form-group select{border-radius: 5px;}
</style>
  <div class="callout callout-info">
          <h4>Tambah Data Transaksi!</h4>
        </div>
<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Transaksi</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="<?php echo base_url('transaksi/save'); ?>" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST" style ="padding: 30px 50px;">


                   

                    <div class="form-group">
                       <input type="text" name="pembeli" class="form-control" placeholder="Nama Pembeli">
                    </div>

                     <div class="form-group">
                      <input type="date" name="entri" value="<?php echo date('Y-m-d'); ?>" class="form-control" readonly>
                    </div>

                     <div class="form-group">
                      <input type="text" name="kodeus" class="form-control" value="<?=$this->session->userdata('user')?>" readonly>
                    </div>
                    
  <div class="form-group">
       <a href="<?php echo base_url('transaksi'); ?>"class="btn btn-warning" type="button" name="cancel" value="cancel" style="color:#fff;">Cancel</a>
       <button class="btn btn-primary" type="reset" name="reset" value="reset">Reset</button>
       <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
   </div>
                  </form> 
                </div>
      </div>
      <!-- /.box -->
      <script type="text/javascript">
        $(document).ready(function(){
          alert(<?=$this->session->userdata('user')?>);
        })
      </script>