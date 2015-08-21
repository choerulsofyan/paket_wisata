<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?=$title;?>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="<?=base_url() . 'paket_wisata_detail';?>">Paket Wisata Detail</a>
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
        Judul Wisata
    </div>
    <div class="col-lg-5">
        <?=$paket_wisata_detail['judul_wisata'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Hari ke
    </div>
    <div class="col-lg-5">
        <?=$paket_wisata_detail['hari_ke'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Rute
    </div>
    <div class="col-lg-5">
        <?=$paket_wisata_detail['rute'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Deskripsi
    </div>
    <div class="col-lg-5">
        <?=$paket_wisata_detail['deskripsi'];?>
    </div>
</div>
<div class="row">
    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-12">
        <a href="<?php echo base_url() . 'paket_wisata_detail/edit/' . $paket_wisata_detail['id']; ?>" id="edit" class="btn btn-primary">Edit</a>
        <!-- <button name="delete" class="btn btn-danger" onclick="confirmDelete(<?=$paket_wisata_detail['id'];?>)">Delete</button> -->
        <a href="<?php echo base_url() . 'paket_wisata_detail/delete/' . $paket_wisata_detail['id']; ?>" id="delete" class="btn btn-danger">Delete</a>
        <a href="<?php echo (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : base_url() . 'paket_wisata'); ?>" id="cancel" class="btn btn-primary">Back</a>
      </div>
    </div>
</div>
<!-- /.row