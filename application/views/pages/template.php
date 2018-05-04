<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>eSTORE | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style type="text/css">
*{
  font-family: 'open sans';
}
	.control-sidebar-dark, .control-sidebar-dark+.control-sidebar-bg{
		background: #fff;
	}
	.control-sidebar-dark .nav-tabs.control-sidebar-tabs>li>a{
		background: #fff;
	}
	.control-sidebar-dark .nav-tabs.control-sidebar-tabs>li>a, .control-sidebar-dark .nav-tabs.control-sidebar-tabs>li>a:hover, .control-sidebar-dark .nav-tabs.control-sidebar-tabs>li>a:focus{
		border-left-color: #fff;
		border-bottom-color: #fff;
	}
  .menu-icon {margin-right: 1.25rem;
            width: 16px;
            line-height: 1;}
  .menu-title{
            color: inherit;
            display: inline-block;
            line-height: 1;
            vertical-align: middle;
  }
  .global-huruf{
        font-family: 'open sans';
  }
  .content-wrapper{
    background:#fff ;
  }
  .form-group input{border-radius: 5px;}
  .input-group .form-control:first-child, .input-group-addon:first-child, .input-group-btn:first-child>.btn, .input-group-btn:first-child>.btn-group>.btn, .input-group-btn:first-child>.dropdown-toggle, .input-group-btn:last-child>.btn-group:not(:last-child)>.btn, .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle){
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
  }
  .input-group .form-control:last-child, .input-group-addon:last-child, .input-group-btn:first-child>.btn-group:not(:first-child)>.btn, .input-group-btn:first-child>.btn:not(:first-child), .input-group-btn:last-child>.btn, .input-group-btn:last-child>.btn-group>.btn, .input-group-btn:last-child>.dropdown-toggle{
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
  }
  .main-sidebar{
    background: #eee;
  }
  .main-header .navbar{
    background: #fff;    
    position: static;
  }
</style>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>e</b>Str</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>electronics</b>Store</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
<?php if ($this->session->userdata('level')=='admin'){
  $p="Administator";}else{$p="Kasir";}

 ?>
  
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         <li class="dropdown user user-menu">
            <a href="#">
              <img src="<?=base_url('assets/dist/img/pegawai/'.$this->session->userdata('foto'))?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $p; ?></span>
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?=base_url('Profil')?>"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url('assets/dist/img/pegawai/'.$this->session->userdata('foto'))?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php  echo $this->session->userdata('nama'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?=$this->session->userdata('name')?></a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form" style="padding: 0px 9px 0px 10px;">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('dashboard'); ?>">
            <img src="<?php echo base_url('assets/'); ?>menu_icons/01.png" class="menu-icon" alt="menu icon"><span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="header">DATA</li>
<?php 
if ($this->session->userdata('level')=='admin'){

 ?>
         <li>
          <a href="<?php echo base_url('barang'); ?>">
            <img src="<?php echo base_url('assets/'); ?>menu_icons/07.png" class="menu-icon" alt="menu icon"><span class="menu-title">Data Barang</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('pegawai'); ?>">
            <img src="<?php echo base_url('assets/'); ?>menu_icons/05.png" class="menu-icon" alt="menu icon"><span class="menu-title">Data Pegawai</span>
          </a>
        </li>
        <li>
        <li>
          <a href="<?php echo base_url('transaksi'); ?>">
            <img src="<?php echo base_url('assets/'); ?>menu_icons/03.png" class="menu-icon" alt="menu icon"><span class="menu-title">Data Transaksi</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('user'); ?>">
            <img src="<?php echo base_url('assets/'); ?>menu_icons/09.png" class="menu-icon" alt="menu icon"><span class="menu-title">Data User</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('dashboard/about'); ?>">
            <img src="<?php echo base_url('assets/');?>menu_icons/04.png" class="menu-icon" alt="menu icon"><span class="menu-title">About</span>
          </a>
        </li>

         <li>
          <a href="" data-toggle="modal" data-target="#modal-default">
            <img src="<?php echo base_url('assets/');?>menu_icons/02.png" class="menu-icon" alt="menu icon"><span class="menu-title">Log Out</span>
          </a>
        </li>
<?php
  }else{
?>

        <li>
          <a href="<?php echo base_url('transaksi'); ?>">
            <img src="<?php echo base_url('assets/'); ?>menu_icons/03.png" class="menu-icon" alt="menu icon"><span class="menu-title">Data Transaksi</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('dashboard/about'); ?>">
            <img src="<?php echo base_url('assets/');?>menu_icons/04.png" class="menu-icon" alt="menu icon"><span class="menu-title">About</span>
          </a>
        </li>

         <li>
          <a href="" data-toggle="modal" data-target="#modal-default">
            <img src="<?php echo base_url('assets/');?>menu_icons/02.png" class="menu-icon" alt="menu icon"><span class="menu-title">Log Out</span>
          </a>
        </li>
        <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
   <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 10px;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Log Out</h4>
              </div>
              <div class="modal-body">
                <p>Apakah Anda Akan Log Out ??&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <a href="<?=base_url('login/logout')?>" type="button" class="btn btn-primary">Log Out</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding: 50px 15px;">
  	<?php $this->load->view($content); ?>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018🛒    <a href="https://adminlte.io">sr🙇‍</a>.</strong> electronicsStore.
  </footer>

</div>
<!-- ./wrapper -->

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/'); ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url('assets/'); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/'); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/'); ?>bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/'); ?>dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/'); ?>dist/js/demo.js"></script>
<script src="<?php echo base_url('assets/js/select.js'); ?>"></script> 
 <!-- jquery nya -->
<script src="<?php echo base_url('assets/'); ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendors/sweetalert-master/src/sweetalert.min.js"></script>
</body>
</html>


<script type="text/javascript">
  $(document).ready(function(){
    $('#dataTables-example').dataTable();
  })
</script>
