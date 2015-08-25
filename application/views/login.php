<!DOCTYPE html>
 <head>
     <meta charset="utf-8">
     <title>Silahkan Login</title>
     <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/form-login.css'); ?>">
     <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
     <script type="text/javascript" src="<?php echo asset_url('js/modernizr-latest.js'); ?>"></script>
     <script type="text/javascript" src="<?php echo asset_url('js/placeholder.js'); ?>"></script>
 </head>
 <body>
      <?php echo validation_errors(); ?>
       <form id="slick-login" action="<?=base_url();?>admin/login/verifylogin" method="POST">
         <label for="username">username</label>
         <input type="text" id="username" name="username"  class="placeholder" placeholder="username"/>
         <label for="password">password</label>
         <input type="password" id="password" name="password"  class="placeholder" placeholder="password"/>
         <input type="submit" value="Log In">
     </form>
 </body>
 </html>