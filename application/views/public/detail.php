<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:3%; margin-bottom:1%;">
            <h2><?=$paket_wisata['judul_wisata'];?></h2>
        </div>
        
        
        <div class="col-md-8">
            
            <img src="<?= base_url() . 'assets/images/tours/' . $paket_wisata['gambar'];?>" class="img-responsive thumbnail" style="max-height:350px;">
        </div>
        
        <div class="col-md-4"">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Ringkasan Tour</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <tbody>

                                <tr>
                                    <th>Lama Tour</th>
                                    <td><?=$paket_wisata['jumlah_hari'];?> hari</td>
                                </tr>
                                <tr>
                                    <th>Tgl Keberangkatan</th>
                                    <td><?=$paket_wisata['tgl_keberangkatan'];?></td>
                                    
                                </tr>
                                <tr>
                                    <th>Tgl kembali</th>
                                    <td><?=$paket_wisata['tgl_kembali'];?></td>
                                    
                                </tr>
                                <tr>
                                    <th>Harga</th>
                                    <td>Rp.<?=$paket_wisata['harga'];?></td>
                                    
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            
        </div>
        
        
    </div>
    <div class="row">
        <div class="col-md-12">
            
            <p style="text-align:justify;">
                <?=$paket_wisata['deskripsi'];?>
            </p>
            <br/><br/>
        </div>
    </div>
    <?php if (isset($rute)) : ?>
        <div class="row">
            <div class="col-md-12">
                <h3> Rute Perjalanan : </h3>
                <br/>
            </div>
        </div>
        
        <?php foreach ($rute as $item): ?>

            <div class="row">
                <div class="col-md-12">
                    <h3>Hari ke <?=$item['hari_ke'];?> <small><?=$item['rute'];?></small></h3>
                    <p style="text-align:justify; margin-bottom:1%;">
                        <?=$item['deskripsi'];?>
                    </p>
                </div>
            </div>
    <?php 
            endforeach; 
        endif;
    ?>

    <a href="<?php echo base_url() . 'tour/book/' . $paket_wisata['id']; ?>" class="btn btn-primary" style="margin-top:2%;margin-bottom:1%; float:right;">Pesan sekarang</a>
    
    
</div>