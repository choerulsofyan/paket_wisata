<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?=$title;?>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="<?=base_url() . 'paket_wisata';?>">Paket Wisata</a>
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
        <?=$paket_wisata['judul_wisata'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Kategori
    </div>
    <div class="col-lg-5">
        <?=$paket_wisata['nama_kategori'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
            Jumlah hari
    </div>
    <div class="col-lg-5">
        <?=$paket_wisata['jumlah_hari'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Harga
    </div>
    <div class="col-lg-5">
        <?=$paket_wisata['harga'];?>
    </div>
</div>

<div class="row">
    <div class="col-lg-2">
        Deskripsi
    </div>
    <div class="col-lg-5">
        <?=$paket_wisata['deskripsi'];?>
    </div>
</div>
<div class="row">
    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-12">
        <a href="<?php echo base_url() . 'paket_wisata/edit/' . $paket_wisata['id']; ?>" id="edit" class="btn btn-primary">Edit</a>
        <a href="<?php echo base_url() . 'paket_wisata'; ?>" id="cancel" class="btn btn-primary">Back</a>
      </div>
    </div>
</div>
<!-- /.row