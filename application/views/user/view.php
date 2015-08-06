<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?=$title;?>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="<?=base_url() . 'user';?>">User</a>
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
        Nama lengkap
    </div>
    <div class="col-lg-5">
        <?=$user['nama_lengkap'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Tanggal lahir
    </div>
    <div class="col-lg-5">
        <?=$user['tgl_lahir'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Jenis kelamin
    </div>
    <div class="col-lg-5">
        <?=$user['jenis_kelamin'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Alamat
    </div>
    <div class="col-lg-5">
        <?=$user['alamat'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Email
    </div>
    <div class="col-lg-5">
        <?=$user['email'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Username
    </div>
    <div class="col-lg-5">
        <?=$user['username'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
            Hak akses
    </div>
    <div class="col-lg-5">
        <?=$user['hak_akses'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Status
    </div>
    <div class="col-lg-5">
        <?=$user['status'];?>
    </div>
</div>
<div class="row">
    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-12">
        <a href="<?php echo base_url() . 'user/edit/' . $user['id']; ?>" id="edit" class="btn btn-primary">Edit</a>
        <!-- <button name="delete" class="btn btn-danger" onclick="confirmDelete(<?=$user['id'];?>)">Delete</button> -->
        <a href="<?php echo base_url() . 'user/delete/' . $user['id']; ?>" id="delete" class="btn btn-danger">Delete</a>
        <a href="<?php echo base_url() . 'user'; ?>" id="cancel" class="btn btn-primary">Back</a>
      </div>
    </div>
</div>
<!-- /.row