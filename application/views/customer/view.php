<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?=$title;?>
        </h1>
    </div>
</div>
<!-- /.row -->
<h3>Info Customer</h3>
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
        <a href="<?php echo base_url() . 'admin/customer/edit/' . $customer['id']; ?>" id="edit" class="btn btn-primary">Edit</a>
        <a href="<?php echo base_url() . 'admin/customer/delete/' . $customer['id']; ?>" id="delete" class="btn btn-danger">Delete</a>
        <a href="<?php echo base_url() . 'admin/customer'; ?>" id="cancel" class="btn btn-primary">Back</a>
      </div>
    </div>
</div>


<?php if ($info_pemesanan) : ?>

    <!-- INFO PEMESANAN -->
    <h3>Info Pemesanan</h3>
    <div class="row">
        <div class="col-lg-2">
            Nomor Faktur
        </div>
        <div class="col-lg-5">
            <?=$info_pemesanan['no_faktur'];?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            Judul Wisata
        </div>
        <div class="col-lg-5">
            <?=$info_pemesanan['judul_wisata'];?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            Tanggal Pemesanan
        </div>
        <div class="col-lg-5">
            <!-- <?=$info_pemesanan['tgl_pemesanan'];?> -->
            <?=date("d F Y", strtotime($info_pemesanan['tgl_pemesanan']));?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            Jumlah Orang Dewasa
        </div>
        <div class="col-lg-5">
            <?=$info_pemesanan['jumlah_orang_dewasa'];?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            Jumlah Orang Anak
        </div>
        <div class="col-lg-5">
            <?=$info_pemesanan['jumlah_orang_anak'];?>
        </div>
    </div>
    <div class="row">
        <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="submit"></label>
          <div class="col-md-12">
            <a href="<?php echo base_url() . 'admin/pemesanan/edit/' . $info_pemesanan['pemesanan_id']; ?>" id="edit" class="btn btn-primary">Edit</a>
            <a href="<?php echo base_url() . 'admin/pemesanan/delete/' . $info_pemesanan['pemesanan_id']; ?>" id="delete" class="btn btn-danger">Delete</a>
          </div>
        </div>
    </div>
    <!-- END OF INFO PEMESANAN -->

    <!-- INFO PEMBAYARAN -->
    <h3>Info Pembayaran</h3>
    <div class="row">
        <div class="col-lg-2">
            Total Biaya
        </div>
        <div class="col-lg-5">
            Rp. <?=$info_pembayaran['total'];?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            Total Pembayaran
        </div>
        <div class="col-lg-5">
            Rp. <?=$info_pembayaran['total_pembayaran'];?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            Total Angsuran
        </div>
        <div class="col-lg-5">
            <?=$info_pembayaran['angsuran'];?>x
        </div>
    </div>
    <!-- END OF INFO PEMBAYARAN -->

    <!-- INFO ANGSURAN -->
    <?php if ($info_angsuran) : ?>
        <h3>Info Pembayaran</h3>
        <div class="row">
            <div class="col-lg-12">
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Tanggal Pembayaran</th>
                            <th>Pembayaran</th>
                            <th>Angsuran Ke</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($info_angsuran as $row) : ?>
                            <tr>
                                <td><?=$row['no'];?></td>
                                <td><?=$row['tgl_pembayaran'];?></td>
                                <td><?=$row['pembayaran'];?></td>
                                <td><?=$row['angsuran_ke'];?></td>
                                <td><?=$row['detail'];?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END OF INFO ANGSURAN -->
<?php 
    endif; 
endif; 
?>
<!-- /.row