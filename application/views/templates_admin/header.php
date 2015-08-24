<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/sb-admin.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/jquery.dataTables.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/datepicker.css'); ?>">
        <script src="<?php echo asset_url('js/jquery-2.1.4.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset_url('js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset_url('js/jquery.dataTables.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset_url('js/bootstrap-datepicker.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset_url('js/script.js'); ?>" type="text/javascript"></script>
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=base_url();?>">Anugrah Tour</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i> 
                                <?php
                                    $user = $this->session->userdata("logged_in");
                                    $nama = $user['nama'];
                                    $nama = explode(' ', $nama);
                                    $nama = $nama[0];
                                    echo $nama;
                                ?> 
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?=base_url();?>admin/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="<?=base_url();?>admin/dashboard"><i class="fa fa-fw fa-bar-chart-o"></i> Dashboard</a>
                        </li>
                        
                        <?php if ($this->auth->check_privileges('paket_wisata.view')) : ?>
                        <li>
                            <a href="<?=base_url();?>admin/paket_wisata"><i class="fa fa-fw fa-plane"></i> Paket Wisata</a>
                        </li>
                        <?php endif; ?>                        

                        <?php if ($this->auth->check_privileges('pemesanan.view') || $this->auth->check_privileges('pembayaran.view')) : ?>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-euro"></i> Transaksi <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                
                                <?php if ($this->auth->check_privileges('pemesanan.view')) : ?>
                                <li>
                                    <a href="<?=base_url();?>admin/pemesanan"><i class="fa fa-fw fa-book"></i> Pemesanan</a>
                                </li>
                                <?php endif; ?>

                                <?php if ($this->auth->check_privileges('pembayaran.view')) : ?>
                                <li>
                                    <a href="<?=base_url();?>admin/pembayaran"><i class="fa fa-fw fa-euro"></i> Pembayaran</a>
                                </li>
                                <?php endif; ?>

                            </ul>
                        </li>
                        <?php endif; ?>

                        <?php if ($this->auth->check_privileges('customer.view')) : ?>
                        <li>
                            <a href="<?=base_url();?>admin/customer"><i class="fa fa-fw fa-users"></i> Customer</a>
                        </li>
                        <?php endif; ?>

                        <?php if ($this->auth->check_privileges('user.view')) : ?>
                        <li>
                            <a href="<?=base_url();?>admin/user"><i class="fa fa-fw fa-user"></i> User</a>
                        </li>
                        <?php endif; ?>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">

                <div class="container-fluid">

