<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?=$title;?>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="<?=base_url() . 'customer';?>">Paket Wisata Detail</a>
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
        Nama
    </div>
    <div class="col-lg-5">
        <?=$customer['nama'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Tanggal lahir
    </div>
    <div class="col-lg-5">
        <?=date("d F Y", strtotime($customer['tgl_lahir']));?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Jenis kelamin
    </div>
    <div class="col-lg-5">
        <?=$customer['jenis_kelamin'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Alamat
    </div>
    <div class="col-lg-5">
        <?=$customer['alamat'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        No. Telepon
    </div>
    <div class="col-lg-5">
        <?=$customer['no_telp'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Email
    </div>
    <div class="col-lg-5">
        <?=$customer['email'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Status
    </div>
    <div class="col-lg-5">
        <?=$customer['status'];?>
    </div>
</div>
<div class="row">
    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-12">
        <a href="<?php echo base_url() . 'customer/edit/' . $customer['id']; ?>" id="edit" class="btn btn-primary">Edit</a>
        <!-- <button name="delete" class="btn btn-danger" onclick="confirmDelete(<?=$customer['id'];?>)">Delete</button> -->
        <a href="<?php echo base_url() . 'customer/delete/' . $customer['id']; ?>" id="delete" class="btn btn-danger">Delete</a>
        <a href="<?php echo base_url() . 'customer'; ?>" id="cancel" class="btn btn-primary">Back</a>
      </div>
    </div>
</div>
<!-- /.row