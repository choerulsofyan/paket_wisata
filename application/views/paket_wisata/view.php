<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3>
            <?=$title;?>
            <hr/>
        </h3>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <input type="hidden" id="paket_wisata_detail_id" name="paket_wisata_detail_id" value="<?=$paket_wisata['id'];?>">
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
        <!-- <button name="delete" class="btn btn-danger" onclick="confirmDelete(<?=$paket_wisata['id'];?>)">Delete</button> -->
        <a href="<?php echo base_url() . 'paket_wisata/delete/' . $paket_wisata['id']; ?>" id="delete" class="btn btn-danger">Delete</a>
        <a href="<?php echo base_url() . 'paket_wisata'; ?>" id="cancel" class="btn btn-primary">Back</a>
      </div>
    </div>
</div>
<br/>
<div class="row">
    <div class="form-group">
        <div class="col-md-12">
            <a href="<?php echo base_url() . 'paket_wisata_detail/create/' . $paket_wisata['id']; ?>" id="add" class="btn btn-primary">Add Paket Wisata Detail</a>
        </div>
    </div>
    <br/>
    <br/>
</div>
<div class="row">
    <div class="col-md-12">
        <table id="DaftarRute">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Rute</th>
                    <th>Hari Ke</th>
                    <th>Detail</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<!-- /.row