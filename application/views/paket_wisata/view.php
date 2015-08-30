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
    
    <div class="col-md-6">
        
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <tbody>
                    <tr>
                        <th>Judul Wisata</th>
                        <td><?=$paket_wisata['judul_wisata'];?></td>                        
                    </tr>
                    
                    <tr>
                        <th> Kategori</th>
                        <td><?=$paket_wisata['nama_kategori'];?></td>
                    </tr>
                    <tr>
                        <th>Jumlah hari</th>
                        <td><?=$paket_wisata['jumlah_hari'];?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Keberangkatan</th>
                        <td><?=$paket_wisata['tgl_keberangkatan'];?></td>
                        
                    </tr>
                    <tr>
                        <th>Tanggal kembali</th>
                        <td><?=$paket_wisata['tgl_kembali'];?></td>
                        
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td>Rp.<?=$paket_wisata['harga'];?></td>
                        
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td><?=$paket_wisata['deskripsi'];?></td>
                        
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?=$paket_wisata['status'];?></td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="form-group">
            <label class="col-md-12 control-label" for="submit"></label>
            <div class="col-md-6">
                <a href="<?php echo base_url() . 'admin/paket_wisata/edit/' . $paket_wisata['id']; ?>" id="edit" class="btn btn-primary">Edit</a>
                <!-- <button name="delete" class="btn btn-danger" onclick="confirmDelete(<?=$paket_wisata['id'];?>)">Delete</button> -->
                <a href="<?php echo base_url() . 'admin/paket_wisata/delete/' . $paket_wisata['id']; ?>" id="delete" class="btn btn-danger">Delete</a>
                <a href="<?php echo base_url() . 'admin/paket_wisata'; ?>" id="cancel" class="btn btn-primary">Back</a>
            </div>
        </div>
        
        
        <div class="row">
            <div class="form-group">
                <div class="col-md-6">
                    <a href="<?php echo base_url() . 'admin/paket_wisata_detail/create/' . $paket_wisata['id']; ?>" id="add" class="btn btn-primary" style=" margin-top: -10px">Add Paket Wisata Detail</a>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="col-md-6">
        <img src="<?= base_url() . 'assets/images/tours/' . $paket_wisata['gambar'];?>" class="img-responsive" style="min-height: 200px;width:100%;">
    </div>
</div>
<div class="row">
    <!-- Button (Double) -->
    
</div>
<br/>
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