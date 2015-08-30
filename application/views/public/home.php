<div class="arriv">

  <section  class="text-center">     
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="item active"> 
              <div class="carousel-caption" style="margin-bottom: 400px; margin-left: -350px;">
                <h1 >DISCOVER BEAUTIFUL PLACES OVER THE WORLD</h1>
                <h4 style="margin-left:-370px;">We provide our best for you to get experiences overseas journey</h4>
              </div>
              <img src="<?=base_url() . 'assets/images/carousel/1.jpg';?>" alt="" />                  
          </div>
          <div class="item">
              <div class="carousel-caption" style="margin-bottom: 400px; margin-left: -350px;">
                <h1 >DISCOVER BEAUTIFUL PLACES OVER THE WORLD</h1>
                <h4 style="margin-left:-370px;">We provide our best for you to get experiences overseas journey</h4>
              </div>
              <img src="<?=base_url() . 'assets/images/carousel/2.jpg';?>" alt="" />
          </div>
          <div class="item">
              <div class="carousel-caption" style="margin-bottom: 400px; margin-left: -350px;">
                <h1 >DISCOVER BEAUTIFUL PLACES OVER THE WORLD</h1>
                <h4 style="margin-left:-370px;">We provide our best for you to get experiences overseas journey</h4>
              </div>
              <img src="<?=base_url() . 'assets/images/carousel/3.jpg';?>" alt="" />
          </div>
          <div class="item">
              <div class="carousel-caption" style="margin-bottom: 400px; margin-left: -350px;">
                <h1 >DISCOVER BEAUTIFUL PLACES OVER THE WORLD</h1>
                <h4 style="margin-left:-370px;">We provide our best for you to get experiences overseas journey</h4>
              </div>
            <img src="<?=base_url() . 'assets/images/carousel/bg.jpg';?>" alt="" />
          </div>
        </div>

        <ol class="carousel-indicators">
            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example" data-slide-to="1"></li>
            <li data-target="#carousel-example" data-slide-to="2"></li>
            <li data-target="#carousel-example" data-slide-to="3"></li>
        </ol>
    </div>
  </section>

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
            
            <div class="col-md-6 arriv-left">
                <img src="http://localhost/anugrah_tour/assets/images/front/1.jpg" class="img-responsive" alt="">
                <div class="arriv-info">
                    <h3>PROMO</h3>
                    <p>Lihat Tour mana saja yang sedang dalam promo.</p>
                    <div class="crt-btn">
                        <a href="<?php echo base_url() . 'tour/detail/1';?>">SELENGKAPNYA</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 arriv-right">
                <img src="http://localhost/anugrah_tour/assets/images/front/2.jpg" class="img-responsive" alt="">
                <div class="arriv-info">
                    <h3>DISKON</h3>
                    <p>Dapatkan potongan harga spesial pada destinasi wisata anda.</p>
                    <div class="crt-btn">
                        <a href="<?php echo base_url() . 'tour/detail/2';?>">SELENGKAPNYA</a>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="arriv-bottm">
            <div class="col-md-8 arriv-left1">
                <img src="http://localhost/anugrah_tour/assets/images/front/3.jpg" class="img-responsive" alt="">
                <div class="arriv-info1">
                    <h3>TOP TOUR</h3>
                    <p>Lihat tujuan tour terbaik yang cocok untuk destinasi liburan anda.</p>
                    <div class="crt-btn">
                        <a href="<?php echo base_url() . 'tour/detail/3';?>">LIHAT TOUR TERBAIK</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 arriv-right1">
                <img src="http://localhost/anugrah_tour/assets/images/front/4.jpg" class="img-responsive" alt="">
                <div class="arriv-info2" style="color:white;">
                    <!-- <a href="details.html"><h3>Trekking Shoes<i class="ars"></i></h3></a> -->
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <!-- <i class="ars"></i> -->
                </div>
            </div>
            
            <div class="clearfix"> </div>
        </div>

  <?php if (count($wisata_domestik) > 0) : ?>

    <div class="page-header center">
      <h2>Tour Domestik</h2>
    </div>
    
    <div class="row">
        <?php 
            $counter = 0;
            foreach ($wisata_domestik as $row) : 
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
                    <b style="color:black;">Lama : <?=$row['jumlah_hari'];?> hari </b> | <b style="color:black;">IDR. <?=$row['harga'];?></b> <br/>
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
      ?>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="center">
          <a href="<?=base_url() . 'tour/category/1';?>" role="button"><h3>Selengkapnya di Tour Domestik  &raquo;</h3></a>
        </div>
      </div>
    </div>

  <?php endif; ?>



  <?php if (count($wisata_mancanegara) > 0) : ?>

    <div class="page-header center">
      <h2>Tour Mancanegara</h2>
    </div>
    
    <div class="row">
        <?php 
            $counter = 0;
            foreach ($wisata_mancanegara as $row) : 
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
                    <b style="color:black;"><?=$row['jumlah_hari'];?> Hari </b> | <b style="color:black;">IDR. <?=$row['harga'];?></b> <br/>
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
      ?>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="center">
          <a href="<?=base_url() . 'tour/category/2';?>" role="button"><h3>Selengkapnya di Tour Mancanegara  &raquo;</h3></a>
        </div>
      </div>
    </div>

  <?php endif; ?>

</div>
</div>
