<!DOCTYPE html>
<html>
<head>
    <title>Login || eStore</title>
      <link rel="stylesheet" href="<?php echo base_url('assets/') ;?>bower_components/bootstrap/dist/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo base_url('assets/') ;?>bower_components/font-awesome/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="<?php echo base_url('assets/') ;?>bower_components/Ionicons/css/ionicons.min.css">
      <link rel="stylesheet" href="<?php echo base_url('assets/') ;?>plugins/sweetalert-master/src/sweetalert.css">
      <link rel="stylesheet" href="<?php echo base_url('assets/') ;?>dist/css/flat/_all.css">
      <link rel="stylesheet" href="<?php echo base_url('assets/') ;?>dist/css/custom.css">
      <style type="text/css">
body{
        background-color: #eee;
    }
    .panel-default{
        padding: 10px 20px 20px 20px;
        border-top: 3px #00c0ef solid;
    }
    .putih{
        color: #fff;
    }
    .huruf{
        font-family: 'open sans';
    }
    .menu-icon {
    width: 20px;
    line-height: 1;
    }
    img {
    vertical-align: middle;
    border:0;
    }
    form{
        margin-top: 30px;
    }
    .input-group{
        margin-top: 10px;
    }
    .input-group-addon{
        font-size: 13px;
        background-color: #fff;
        padding: 0px 15px 0px;
        
    }
    button{
        margin-top: 20px;
    }
    .btn{
        padding: 6px 50px;
        border-radius: 50px;
        font-size: 13px;
    }
    .form-control{
      padding:10px; 
    }
      </style>
    
    
</head>
<body class="huruf">

<div class="container-fluid" style="margin-top: 150px;">
  <div class="callout callout-warning">
    <!-- <p> <?php echo $this->session->flashdata('error'); ?></p> -->
  </div>
 
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default" >
                <h3>Login to your account</h3>
                <hr>
                <form method="POST" action="<?=base_url('login/cek_login');?>">

                    <div class="form-group">
                     <div class="input-group">
                          <div class="input-group-addon">
                          <i class="fa fa-user-o"></i>
                          </div>
                          <input type="text" id="username" name="user" placeholder="Username" class="form-control" required autofocus>
                      </div>

                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-lock" style="font-size:20px ;"></i>
                        </div>
                        <input type="password" id="password" name="pass" placeholder="********" class="form-control" required>
                      </div><br>
                          <input type="checkbox" class="" checked disabled="">
                        Remember Me | <a href="#">Forget Password ?</a><br>
                        <button class="btn btn-info" name="submit" type="submit">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

      

<script src="<?php echo base_url('assets/') ;?>plugins/iCheck/icheck.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') ;?>plugins/sweetalert-master/src/sweetalert.js"></script>
<script src="<?php echo base_url('assets/') ;?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url('assets/') ;?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>