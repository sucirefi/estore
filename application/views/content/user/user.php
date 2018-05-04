<?php 
// $query=$this->db->get('user');
 ?>
<style type="text/css">
  .gaya{
    border-radius: 5px;
  }
  .ttt{
    padding: 2px 10px;
  }
  .info-box{
    background: #eee;
  }
</style>
<div class="row">
<div class="col-md-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data Users</span>
              <span class="info-box-number">🔐 🔏 🔐</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
</div>
  <!-- Default box -->
      <div class="box" style="border-top: 3px #00c0ef solid;">
        <div class="box-header with-border">
          <h3 class="box-title">Data Master User</h3>
<div class="overlay">
              <i class="fa fa-refresh fa-spin"></i>
            </div>
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
  <a href="<?php echo base_url('user/add') ;?>" class="btn btn-info" ><i class="fa fa-plus"></i>  Tambah Data</a>
</div>
<br>
<br>
<div class="table-responsive">
          <table class="table table-striped jambo_table bulk_action gaya" cellspacing="0" width="100%" id="dataTables-example" style="margin-top: 15px;">
            <thead>
              <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Kode User</th>
                <th>Pegawai</th>
                <th>Username</th>
                <th>Level</th>
                <th>Aksi</th>
              </tr>
            </thead>
          <tbody>
<?php 
if ($query->num_rows()>0) {$no=0;
  foreach ($query->result() as $user) {
    if ($user->user_level=='admin') {
      $tbl='class="label label-primary"';
    }else{
      $tbl='class="label label-info"';
    }
    $no++;

    ?>


                          <tr>
                           <td><?=$no?></td>
                           <td><img src="<?=base_url('assets/dist/img/pegawai/'.$user->pegawai_foto);?>" width="40px" height="40px" style="border-radius: 50%;"></td>
                           <td><?=$user->user_kode?></td>
                           <td><?=$user->pegawai_nama?></td>
                           <td><?=$user->user_username?></td>
                           <td><span <?=$tbl?>><?=$user->user_level?></span></td>
                            <td style="text-align: center;">
<div class="form-group">
  <div id="gender" class="btn-group">
  <a href="<?=base_url('user/edit/'.$user->user_id)?>"class="btn btn-warning ttt"  data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-hand-scissors-o"></i></a>
  <a href="<?=base_url('user/delete/'.$user->user_id)?>" class="btn btn-danger ttt" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash-o"></i></a>
  </div>
</div>
                            </td>
                          </tr> 
    <?php
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
      window.location='<?=base_url('user/delete/'.$user->user_id)?>';
    }else{
      
    }
  }
</script>