<?php $query=$this->db->get('pegawai'); ?>
<style type="text/css">
  .gaya{
    border-radius: 5px;
  }
  .ttt{
    padding: 2px 10px;
  }
</style>
<div class="row">
       <div class="col-md-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">Pegawai</span>

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
      </div>
  <!-- Default box -->
      <div class="box" style="border-top: 3px #00c0ef solid;">
        <div class="box-header with-border">
          <h3 class="box-title">Data Master Pegawai</h3>

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
  <a href="<?php echo base_url('pegawai/add') ;?>" class="btn btn-info" ><i class="fa fa-plus"></i>  Tambah Data</a>
</div>
<br>
<br>
<div class="table-responsive">
          <table class="table table-striped jambo_table bulk_action gaya" cellspacing="0" width="100%" id="dataTables-example" style="margin-top: 15px;">
            <thead>
              <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama Pegawai</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
          <tbody>
<?php 
if ($query->num_rows()>0) {
 $no=0;
 foreach ($query->result() as $p) {
  $no++;
   echo'
       <tr>
                           <td>'.$no.'</td>
                           <td><img src="'.base_url('assets/dist/img/pegawai/'.$p->pegawai_foto).'" width="35px" height="35px" class="img-circle"></td>
                           <td>'.$p->pegawai_nama.'</td>
                           <td>'.$p->pegawai_tgl_lahir.'</td>
                           <td>'.$p->pegawai_alamat.'</td>
                            <td style="text-align: center;">
<div class="form-group">
  <div id="gender" class="btn-group">

  <a href="'.base_url('pegawai/edit/'.$p->pegawai_id).'" class="btn btn-warning ttt"  data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-hand-scissors-o"></i></a>
  <a onclick="konfirmasi()" class="btn btn-danger ttt" onclick="" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash-o"></i></a>
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
    data=window.confirm('Apakah Anda Yakin Akan Mengahapus Data Pegawai ini?');
    if (data==true) {
      window.location='<?=base_url('pegawai/delete/'.$p->pegawai_id)?>';
    }else{
      
    }
  }
</script>