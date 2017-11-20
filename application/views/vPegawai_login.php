<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>PT Indocom Nusantara</title>
  
  
  
      <link rel="stylesheet" href="<?php echo base_url(); ?>login/css/style.css">

  
</head>

<body>
  <div class="login-page">
  <div class="form">
    <form class="register-form" >
   
    </form>
    <form class="login-form" action="<?php echo base_url('Pegawailogin/aksi_login'); ?>" method="post">
      <input type="text" placeholder="username" name="nama_pegawai"/>
      <input type="password" placeholder="password" name="password"/>
      <button>login</button>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="<?php echo base_url(); ?>login/js/index.js"></script>

</body>
</html>