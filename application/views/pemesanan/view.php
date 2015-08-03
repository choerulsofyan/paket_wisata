<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?=$title;?>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="<?=base_url() . 'pemesanan';?>">Paket Pemesanan</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> View Detail
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-2">
        Nama Customer
    </div>
    <div class="col-lg-5">
        <?=$pemesanan['nama'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Judul Wisata
    </div>
    <div class="col-lg-5">
        <?=$pemesanan['judul_wisata'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        No Faktur
    </div>
    <div class="col-lg-5">
        <?=$pemesanan['no_faktur'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Tanggal Pemesanan
    </div>
    <div class="col-lg-5">
        <?=$pemesanan['jumlah_orang'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Total
    </div>
    <div class="col-lg-5">
        <?=$pemesanan['total'];?>
    </div>
</div>
<div class="row">
    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-12">
        <a href="<?php echo base_url() . 'pemesanan/edit/' . $pemesanan['id']; ?>" id="edit" class="btn btn-primary">Edit</a>
        <!-- <button name="delete" class="btn btn-danger" onclick="confirmDelete(<?=$paket_wisata_detail['id'];?>)">Delete</button> -->
        <a href="<?php echo base_url() . 'pemesanan/delete/' . $pemesanan['id']; ?>" id="delete" class="btn btn-danger">Delete</a>
        <a href="<?php echo base_url() . 'pemesanan'; ?>" id="cancel" class="btn btn-primary">Back</a>
      </div>
    </div>
</div>
<!-- /.row