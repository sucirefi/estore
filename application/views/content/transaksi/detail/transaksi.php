<?php $w=$this->db->get('barang'); ?>
<style type="text/css">
  .form-group input, .form-group select{border-radius: 5px;}
</style>

   <!-- Info boxes -->

   <div class="row" style="padding: 0px 10px;">
        <div class="col-md-4" >
          <div class="info-box" style="border:1px #00c0ef solid;">
            <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

            <div class="info-box-content" style="padding: ;">
              <span class="info-box-text">User Kasir</span>
              <span class="info-box-number"><?php echo $transaksi->transaksi_kode_user; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
         <!-- /.col -->
         <div class="col-md-4">
          <div class="info-box" style="border:1px #00a65a solid;">
            <span class="info-box-icon bg-green"><i class="fa fa-user-md"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pembeli</span>
              <span class="info-box-number"><?php echo $transaksi->transaksi_pembeli; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
         <div class="col-md-4">
          <div class="info-box" style="border:1px #dd4b39 solid;"s>
            <span class="info-box-icon bg-red"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tanggal Entry</span>
              <span class="info-box-number"><?php echo $transaksi->transaksi_entri; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
       
</div>
<div class="col-md-3">
   <div class="box" style="border-top: 3px #00c0ef solid;">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Item</h3>

      <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
      <i class="fa fa-times"></i></button>
        </div>
        </div>
        <div class="box-body">

                <form action="<?php echo base_url('transaksi/add_detail'); ?>"  id="form" class="form-horizontal" enctype="multipart/form-data" method="POST" style ="padding: 0px 10px;">
              <input type="hidden" name="id" value="<?php echo $transaksi->transaksi_id; ?>">

                    <div class="form-group">
                      <select class="form-control" name="brg" id="brg">
                        <?php 
                        if ($w->num_rows()>0){ 
                          foreach ($w->result() as $brg) {
                            echo '<option value="'.$brg->barang_kode.'">'.$brg->barang_nama.'</option>';
                          
                    }} 
                          ?>
                      </select>
                    </div>
                    
                     <div class="form-group">
                      <input type="text" id="harga" value="" class="form-control" readonly="">
                    </div>
                     
                    <div class="form-group">
                      <input type="number" id="jml" placeholder="Jumlah Barang" class="form-control">
                    </div>

                     <div class="form-group">
                      <input type="number" id="total" name="total" placeholder="Rp.x,xxx,xxx,xxx" class="form-control">
                    </div>

                    <div class="form-group">
                      <select class="form-control" name="status">
                        <option>Garansi</option>
                        <option>Tidak Garansi</option>
                      </select>
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
</div>
<div class="col-md-9">
  <!-- Default box -->
      <div class="box" style="border-top: 3px #00c0ef solid;">
        <div class="box-header with-border">
          <h3 class="box-title">Data Master Transaksi   </h3>
   <span class="label label-default"><i class="fa fa-tag"></i></span>
   <span class="label label-info"><small><?php echo $transaksi->transaksi_kode_user; ?></small></span>
   <span class="label label-success"><small><?php echo $transaksi->transaksi_pembeli; ?></small></span>
   <span class="label label-danger"><small><?php echo $transaksi->transaksi_entri; ?></small></span>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
<div class="panel-body">  
<div class="table-responsive">
          <table class="table table-striped jambo_table bulk_action gaya" cellspacing="0" width="100%" id="dataTables-example" style="margin-top: 15px;">
            <thead>
<?php $query=$this->db->get_where('transaksi_brg',['transaksi_brg_transaksi_id'=>$transaksi->transaksi_id]);?>
              <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>total</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
        <tbody>
<?php if ($query->num_rows()>0) {
  $no=0;$t=0;
  foreach ($query->result() as $tbrg) {
  if ($tbrg->transaksi_status=='Garansi') {
      $tbl='class="label label-success"';
    }else{
      $tbl='class="label label-warning"';
    }
    $no++;
$t=$t+$tbrg->transaksi_total;
    ?>
    <tr>
      <td><?=$no?></td>
      <td><?=$tbrg->transaksi_kodebar?></td>
      <td>Rp. <?=$tbrg->transaksi_total?>,-</td>
      <td><span <?php echo $tbl; ?>><?=$tbrg->transaksi_status?></span></td>
      <td>
 <?php if ($tbrg->transaksi_status!='Garansi') { ?>
 
 <?php }else { ?>
 <div id="gender" class="btn-group">
  <a onclick="konfirmasi()" class="btn btn-danger ttt" data-toggle="tooltip" data-placement="top" title="Tukar"><i class="fa fa-undo"></i></a>
  </div>
 <?php } ?>
</td></tr>

 
<script type="text/javascript">
   function konfirmasi(){
    data=window.confirm('Apakah Anda Yakin Akan Menukar barang?');
    if (data==true) {
      window.location='<?=base_url('transaksi/detail_delete/'.$tbrg->transaksi_brg_id.'/'.$tbrg->transaksi_brg_transaksi_id)?>';
    }else{
      
    }
  }
</script>
    <?php
  }
} ?>
<tr><td colspan="5"><hr style="border:1px solid #000;"></td></tr>
<tr>
   <td colspan="2" style="text-align: center;font-weight: bold;">Total :</td>
   <td>Rp. <?=number_format($t)?>,-</td>
 </tr>
        </tbody>
        </table>
       </div>
     </div>
   </div>
 <!-- /.box-body -->
</div>
<!-- /.box -->
  
</div>
<script>

  $(document).ready(function(){

    $('#jml').keyup(function(){
    harga = $('#harga').val();
    jml = $('#jml').val();

    proses = harga * jml;

    $('#total').val(proses);
  // }
    });

    $('#brg').change(function(){
      id=$(this).val();
      url='<?php echo base_url('transaksi/getharga') ?>';
      $.ajax({

        method : 'POST',
        url  : url,
        dataType : 'json',
        data:{id:id},
        success:function(responsive){
          $('#harga').val(responsive.hrga);
          // alert(responsive.hrga);
        }

      });
    })
  });
</script>