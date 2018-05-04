<?php if ($this->session->userdata('level')=='admin') {
  $query=$this->db->get('transaksi');
}else{
  $query=$this->db->get_where('transaksi',['transaksi_kode_user'=>$this->session->userdata('user')]);
} ?>
<style type="text/css">
  .gaya{
    border-radius: 5px;
  }
  .ttt{
    padding: 2px 10px;
  }
</style>
<div class="row">
       <div class="col-md-9">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-shopping-cart"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">Transaksi</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
          <div class="col-md-3">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-key"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">Kode User</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                   <?php echo $this->session->userdata('user');  ?>
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>
  <!-- Default box -->
      <div class="box" style="border-top: 3px #00c0ef solid;">
        <div class="box-header with-border">
          <h3 class="box-title">Data Master Transaksi</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
<div class="panel-body">  
<div id="gender" class="btn-group">
  <a href="<?php echo base_url('transaksi/add') ;?>" class="btn btn-info" ><i class="fa fa-plus"></i>  Tambah Data</a>
</div>
<br>
<br>
<div class="table-responsive">
          <table class="table table-striped jambo_table bulk_action gaya" cellspacing="0" width="100%" id="dataTables-example" style="margin-top: 15px;">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode User</th>
                <th>Nama Pembeli</th>
                <th>Entry</th>
                <th>Aksi</th>
              </tr>
            </thead>
          <tbody>
<?php 
if ($query->num_rows()>0) {
 $no=0;
 foreach ($query->result() as $tran) {
  $no++;
  echo'
                          <tr>
                           
                           <td>'.$no.'</td>
                           <td>'.$tran->transaksi_kode_user.'</td>
                           <td>'.$tran->transaksi_pembeli.'</td>
                           <td>'.$tran->transaksi_entri.'</td>
                            <td style="text-align: center;">
<div class="form-group">
  <div id="gender" class="btn-group">
  <a href="'.base_url('transaksi/detail/'.$tran->transaksi_id).'" class="btn btn-info ttt" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
  <a href="'.base_url('transaksi/edit/'.$tran->transaksi_id).'" class="btn btn-warning ttt"  data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-hand-scissors-o"></i></a>
  <a onclick="konfirmasi()" class="btn btn-danger ttt" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash-o"></i></a>
  </div>
</div>
                            </td>
                          </tr> ';

}
}
 ?>
          </tbody>
        </table>
       </div>
     </div>
   </div>
 <!-- /.box-body -->
</div>
<!-- /.box -->
<script type="text/javascript">
  function konfirmasi(){
    data=window.confirm('Apakah Anda Yakin Akan Mengahapus Data Transaksi beserta Sub Subnya?');
    if (data==true) {
      window.location='<?=base_url('transaksi/delete/'.$tran->transaksi_id)?>';
    }else{
      
    }
  }
</script>