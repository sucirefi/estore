<?php $row=$this->db->get('barang') ?>
<style type="text/css">
  .gaya{
    border-radius: 5px;
  }
  .ttt{
    padding: 2px 10px;
  }
</style>

       <div class="callout callout-info">
          <h4>Data Master Barang!</h4>

          <p>Menginputkan Data Barang, Mengedit Data Barang, Menghapus Data dan Mencari Data Barang</p>
        </div>
  <!-- Default box -->
      <div class="box" style="border-top: 3px #00c0ef solid;">
        <div class="box-header with-border">
          <h3 class="box-title">Data Master Barang</h3>

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
  <a href="<?php echo base_url('barang/add') ;?>" class="btn btn-info" ><i class="fa fa-plus"></i>  Tambah Data</a>
</div>
<br>
<br>
<div class="table-responsive">
          <table class="table table-striped bulk_action gaya" cellspacing="0" width="100%" id="dataTables-example" style="margin-top: 15px;">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Data Entry</th>
                <th>Harga</th>
                <th>Aksi</th>
              </tr>
            </thead>
          <tbody>
<?php if ($row->num_rows()>0) {$no=0;
  foreach ($row->result() as $brg) {$no++;
?>
  <tr>
                           <td><?=$no?></td>
                           <td><?=$brg->barang_kode?></td>
                           <td><?=$brg->barang_nama?></td>
                           <td><?=$brg->barang_entri?></td>
                           <td><?=$brg->barang_harga?></td>
                            <td style="text-align: center;">
<div class="form-group">
  <div id="gender" class="btn-group">
  <a href="<?=base_url('Barang/edit/'.$brg->barang_id)?>" class="btn btn-warning ttt"  data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-hand-scissors-o"></i></a>
  <a onclick="konfirmasi()" class="btn btn-danger ttt" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash-o"></i></a>
  </div>
</div>
                            </td>
                          </tr> 

<?php
  }
} ?>
                        
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
    data=window.confirm('Apakah Anda Yakin Akan Mengahapus Data Barang ini?');
    if (data==true) {
      window.location='<?=base_url('Barang/delete/'.$brg->barang_id)?>';
    }else{
      
    }
  }
</script>