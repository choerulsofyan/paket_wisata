<!-- Page Content -->
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

  <?php if (count($wisata_domestik) > 0) : ?>

    <div class="row">
      <div class="col-lg-12">
        <div class="page-header center">
          <h2>Tour Domestik</h2>
        </div>
      </div>
    </div>
    
    <div class="row">
      <?php foreach ($wisata_domestik as $row) : ?>
        <div class="col-md-3">
          <div class="thumbnail">
            <img src="<?= base_url() . 'assets/images/tours/' . $row['gambar'];?>" alt="...">
            <div class="caption">
              <h4><?=$row['judul_wisata'];?></h4>
              <p>
                <b>
                  Jumlah hari : <?=$row['jumlah_hari'];?> hari
                  <br/>
                  Harga : IDR. <?=$row['harga'];?>
                </b>
              </p>
              <a href="#" class="btn btn-primary" role="button">Selengkapnya</a> 
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="page-header center">
          <a href="<?=base_url() . 'tour/category/1';?>" class="btn btn-primary btn-lg" role="button">Selengkapnya di Tour Domestik</a>
        </div>
      </div>
    </div>

  <?php endif; ?>

  <?php if (count($wisata_mancanegara) > 0) : ?>

    <div class="page-header center">
      <h2>Tour Mancanegara</h2>
    </div>
    
    <div class="row">
      <?php foreach ($wisata_mancanegara as $row) : ?>
        <div class="col-md-3">
          <div class="thumbnail">
            <img src="<?= base_url() . 'assets/images/tours/' . $row['gambar'];?>" alt="...">
            <div class="caption">
              <h4><?=$row['judul_wisata'];?></h4>
              <p>
                <b>
                  Jumlah hari : <?=$row['jumlah_hari'];?> hari
                  <br/>
                  Harga : IDR. <?=$row['harga'];?>
                </b>
              </p>
              <a href="#" class="btn btn-primary" role="button">Selengkapnya</a> 
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="page-header center">
          <a href="<?=base_url() . 'tour/category/2';?>" class="btn btn-primary btn-lg" role="button">Selengkapnya di Tour Mancanegara</a>
        </div>
      </div>
    </div>

  <?php endif; ?>

</div>
