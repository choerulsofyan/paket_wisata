<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/modern-business.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/style.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/style-category.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/jquery.dataTables.min.css'); ?>">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
        <script src="<?php echo asset_url('js/jquery-2.1.4.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset_url('js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset_url('js/jquery.dataTables.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset_url('js/script.js'); ?>" type="text/javascript"></script>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top nav-custom" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=base_url() . 'tour';?>">Anugrah Tour</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <?php echo ($this->uri->uri_string() == "tour" ? "<li class='active'>" : '<li>'); ?>
                            <a href="<?=base_url() . 'tour';?>">Beranda</a>
                        </li>
                        <?php echo ($this->uri->uri_string() == "tour/category/1" ? "<li class='active'>" : '<li>'); ?>
                            <a href="<?=base_url() . 'tour/category/1';?>">Tour Domestik</a>
                        </li>
                        <?php echo ($this->uri->uri_string() == "tour/category/2" ? "<li class='active'>" : '<li>'); ?>
                            <a href="<?=base_url() . 'tour/category/2';?>">Tour Mancanegara</a>
                        </li>
                        <?php echo ($this->uri->uri_string() == "tour/payment" ? "<li class='active'>" : '<li>'); ?>
                            <a href="<?=base_url() . 'tour/payment';?>">Cara Pembayaran</a>
                        </li>
                        <?php echo ($this->uri->uri_string() == "tour/contact" ? "<li class='active'>" : '<li>'); ?>
                            <a href="<?=base_url() . 'tour/contact';?>">Kontak</a>
                        </li>
                        <?php echo ($this->uri->uri_string() == "tour/about" ? "<li class='active'>" : '<li>'); ?>
                            <a href="<?=base_url() . 'tour/about';?>">Tentang</a>
                        </li>
                        <?php

                            $session = $this->session->userdata("customer_logged_in");
                            if ($session == TRUE) :
                        ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-user"></i>
                                    <?php
                                        $nama = $session['nama'];
                                        $nama = explode(' ', $nama);
                                        $nama = $nama[0];
                                        echo $nama;
                                    ?>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?=base_url() . 'customer';?>"><i class="fa fa-fw fa-user"></i> Pemesanan Saya</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="<?=base_url() . 'customer/logout';?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="<?=base_url() . 'customer/login';?>">Login</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- End of Navigation -->