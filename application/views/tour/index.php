<?php
//     echo "<pre>";
//         print_r($tours);
// echo "</pre>";
?>
<div class="arriv">
    <div class="container">
        
        <div class="arriv-top">
            <div class="jumbotron">
                <h2>Say hello to the world!</h2>
                <p style="color:black;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    <a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a>
                </p>
            </div>
            
            <div class="col-md-6 arriv-left">
                <img src="http://localhost/anugrah_tour/assets/images/front/1.jpg" class="img-responsive" alt="">
                <div class="arriv-info">
                    <h3>PROMO</h3>
                    <p>Lihat Tour mana saja yang sedang dalam promo.</p>
                    <div class="crt-btn">
                        <a href="details.html">SELENGKAPNYA</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 arriv-right">
                <img src="http://localhost/anugrah_tour/assets/images/front/2.jpg" class="img-responsive" alt="">
                <div class="arriv-info">
                    <h3>DISKON</h3>
                    <p>Dapatkan potongan harga spesial pada destinasi wisata anda.</p>
                    <div class="crt-btn">
                        <a href="details.html">SELENGKAPNYA</a>
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
                        <a href="details.html">LIHAT TOUR TERBAIK</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 arriv-right1">
                <img src="http://localhost/anugrah_tour/assets/images/front/4.jpg" class="img-responsive" alt="">
                <div class="arriv-info2" style="color:white;">
                    <!-- <a href="details.html"><h3>Trekking Shoes<i class="ars"></i></h3></a> -->
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <!-- <i class="ars"></i> -->
                </div>
            </div>
            
            <div class="clearfix"> </div>
        </div>
        <div class="arriv-las">
            <div class="row">
                <div class="col-md-12">
                    <hr/>
                    <h2>Tujuan Lainnya</h2>
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
            ?>
    </div>