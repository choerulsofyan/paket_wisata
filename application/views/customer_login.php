<!DOCTYPE html>
 <head>
     <meta charset="utf-8">
     <title>Silahkan Login</title>
     <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/form-login.css'); ?>">
 </head>
 

<body class="align">


 
    <div class="site__container">
        <center>
            <h1>CUSTOMER PAGE</h1>
            <h2>Please Sign In</h2>
        </center>
        <div class="grid__container">
            <form action="<?=base_url();?>customer/verifylogin" method="post" class="form form--login">
                <div class="form__field">
                    <label class="fontawesome-user" for="login__email"><span class="hidden">Email</span></label>
                    <input id="login__email" type="email" class="form__input" placeholder="Email" name="email" required>
                </div>
                <div class="form__field">
                    <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
                    <input id="login__password" type="password" class="form__input" placeholder="Password" name="password" required>
                </div>
                <div class="form__field">
                    <input type="submit" value="Sign In">
                </div>
            </form>
        </div>
    </div>
</body>