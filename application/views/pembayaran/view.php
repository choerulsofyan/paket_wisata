<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?=$title;?>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="<?=base_url() . 'pembayaran';?>">Paket Wisata Detail</a>
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
        Nomor Faktur
    </div>
    <div class="col-lg-5">
        <?=$pembayaran['no_faktur'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Customer
    </div>
    <div class="col-lg-5">
        <?=$pembayaran['customer_nama'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Total
    </div>
    <div class="col-lg-5">
        Rp. <?=$pembayaran['total'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Angsuran ke
    </div>
    <div class="col-lg-5">
        <?=$pembayaran['angsuran_ke'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Pembayaran
    </div>
    <div class="col-lg-5">
        Rp. <?=$pembayaran['pembayaran'];?>
    </div>
</div>
<div class="row">
    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-12">
        <a href="<?php echo base_url() . 'pembayaran/edit/' . $pembayaran['id']; ?>" id="edit" class="btn btn-primary">Edit</a>
        <!-- <button name="delete" class="btn btn-danger" onclick="confirmDelete(<?=$pembayaran['id'];?>)">Delete</button> -->
        <a href="<?php echo base_url() . 'pembayaran/delete/' . $pembayaran['id']; ?>" id="delete" class="btn btn-danger">Delete</a>
        <a href="<?php echo base_url() . 'pembayaran'; ?>" id="cancel" class="btn btn-primary">Back</a>
      </div>
    </div>
</div>
<!-- /.row