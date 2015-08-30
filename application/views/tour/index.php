<div class="arriv">
    <div class="container">
        
        <div class="arriv-top">
            <div class="jumbotron">
                <h2>Selamat datang di Anugrah Tour!</h2>
                <p style="color:black;">
                    Anugrah tour adalah perusahaan di bidang penyediaan layanan tour dan travel yang telah terbentuk selama 15 tahun.
                    Kami menyediakan tour dan paket wisata dalam negri maupun internasional. Dengan harga yang lebih murah dan dengan proses
                    pendaftaran yang mudah. Pembayaran dapat diangsur sebanyak 3x angsuran dengan proses pembayaran yang mudah. Ayo segera pesan paket wisata anda.
                </p>
            </div>
        </div>

        <?php if (isset($tours)) : ?>
            <div class="arriv-las">
                <div class="row">
                    <div class="col-md-12 center">
                        <br/>
                        <h2>Daftar Destinasi Wisata</h2>
                        <br/>
                    </div>
                </div>
            </div>

            <?php 
                $counter = 0;
                foreach ($tours as $row) : 
                    $b = ((++$counter % 4 == 0) ? true : false);
                    if ($b) {
                        echo "<div class='row'>";
                    }
            ?>
                <div class="col-md-3">
                    <div class="thumbnail">
                      <img src="<?= base_url() . 'assets/images/tours/' . $row['gambar'];?>" class="img-responsive" style="min-height: 200px;">
                      <div class="caption">
                        <h4><?=$row['judul_wisata'];?></h4>
                        <p>
                            <b style="color:black;">IDR. <?=$row['harga'];?></b> <br/>
                            <a href="<?php echo base_url() . 'tour/detail/'  . $row['id'];?>">Selengkapnya</a>
                        </p>
                      </div>
                    </div>                    
                </div>
            <?php 
                        if ($b) {
                            echo "</div>";
                        }
                    endforeach; 
                endif;
            ?>
    </div>
</div>