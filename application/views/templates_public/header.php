<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/modern-business.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/style.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/jquery.dataTables.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/datepicker.css'); ?>">
        <script src="<?php echo asset_url('js/jquery-2.1.4.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset_url('js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset_url('js/jquery.dataTables.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset_url('js/bootstrap-datepicker.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset_url('js/script.js'); ?>" type="text/javascript"></script>
    </head>
    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Anugrah Tour</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                        <a href="<?=base_url();?>home">Beranda</a>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tour <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?=base_url();?>tour/kategori/1">Domestik</a>
                                </li>
                                <li>
                                    <a href="<?=base_url();?>tour/kategori/2">Mancanegara</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=base_url();?>contact">Contact Us</a>
                        </li>
                        <li>
                            <a href="about.html">Register</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- End of Navigation -->
    
        <!-- Page Content -->
        <div class="container">
