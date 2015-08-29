<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?=$title;?>
        </h1>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-2">
        Nama Customer
    </div>
    <div class="col-lg-5">
        <?=$pemesanan['customer_nama'];?>
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
        <?=$pemesanan['tgl_pemesanan'];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        Jumlah Orang Dewasa
    </div>
    <div class="col-lg-5">
        <?=$pemesanan['jumlah_orang_dewasa'];?>
    </div>
</div>

<div class="row">
    <div class="col-lg-2">
        Jumlah Orang Anak
    </div>
    <div class="col-lg-5">
        <?=$pemesanan['jumlah_orang_anak'];?>
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
        <a href="<?php echo base_url() . 'admin/pemesanan/edit/' . $pemesanan['id']; ?>" id="edit" class="btn btn-primary">Edit</a>
        <a href="<?php echo base_url() . 'admin/pemesanan/delete/' . $pemesanan['id']; ?>" id="delete" class="btn btn-danger">Delete</a>
        <a href="<?php echo base_url() . 'admin/pemesanan'; ?>" id="cancel" class="btn btn-primary">Back</a>
        <a href="<?php echo base_url() . 'admin/pemesanan/print_pemesanan/' . $pemesanan['id']; ?>" id="print" class="btn btn-primary" target="_blank">Print</a>
      </div>
    </div>
</div>
<!-- /.row