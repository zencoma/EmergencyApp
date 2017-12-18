<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">
  <!-- <link rel="icon" href="<?php //echo base_url(); ?>assets/dist/img/icons.png"> -->

  <!-- Google Font -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->

  <script type="text/javascript">
    function cek_form()
    {
      if(!$("#username").val()){
        alert("Maaf username harus di isi");
        $("#username").focus();
        return false;
      }

      if(!$("#password").val()){
        alert("Maaf password harus di isi");
        $("#password").focus();
        return false;
      }
    }
  </script>

  <?php 
    $dering = $this->session->flashdata('info');
    if(!empty($dering));
    { echo $dering; }
  ?>

</head>
<body class="hold-transition login-page" style="background:burlywood; padding: 8px 15px;">
<div class="login-box">
  <div class="login-logo">
    <img src="<?php echo base_url(); ?>assets/dist/img/emc.png" alt="ILCS" width="100%" height="100%">
    <!-- <a href="<?php //echo base_url(); ?>assets/dist/img/icons.png" style="color: #fff;"><b>LOGIN</b> INVOICE</a> -->
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">E-Mergency Call</p>
    <form action="<?php base_url();?>login/cek_login" class="form-horizontal" method="post" onsubmit="return cek_form();">

      <div class="form-group">
        <label for="username" class="col-sm-2 control-label">User</label>
        <div class="col-sm-10">
          <input type="type" name="username" id="username" class="form-control" placeholder="login" required>
        </div>
      </div>

      <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Pass</label>
        <div class="col-sm-10">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        </div>
        <div align="center">
          <!-- <?php// echo $this->recaptcha->render(); ?><br> -->
          <!-- <?php echo $image; ?>   -->
        </div>
      </div>
      <?php 

      $bunyi_log = $this->session->flashdata('warning');
      if(!empty($bunyi_log));
      { echo $bunyi_log;}
      
      ?>
      
      <div class="row">
        <div class="col-xs-8">
        </div>
        
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-unlock"></i> Sign In</button>
        </div>
        
      </div>
      
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3.1.1 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
