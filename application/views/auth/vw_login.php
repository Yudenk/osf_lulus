<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
  <link href=<?php echo base_url('assets2/assets/css/login.css')?> rel="stylesheet">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
  </style>
</head>
<body>
<div class="wrapper">
        <div class="logo">
            <img src="<?php echo base_url('assets/assets/images/logo_osf.png')?>" alt="">
        </div>
        <div class="text-center mt-4 name">
            One Street Food
        </div>
        <form class="p-3 mt-3" action="<?= base_url('auth/cek_login');  ?>" method="post">
        <?= $this->session->flashdata('message'); ?>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="email" id="email" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <button class="btn mt-3" type="submit">Login</button>
        </form>        
    </div>
</body>
</html>