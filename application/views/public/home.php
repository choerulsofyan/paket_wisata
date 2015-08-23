<!-- Page Content -->
<div class="jumbotron jumbotron-header">
   <div class="container">
      <h1>Selamat Datang!</h1>
      <p>
        Selamat datang di Anugrah Tour! Pesan tiket tour kapan saja dan kemana saja. Anugrah tour menyediakan berbagai macam
        destinasi tour dalam negri maupun internasional.
      </p>
   </div>
</div>

<div class="container">
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
          <div class="panel panel-default">
            <div class="panel-heading center">
              <h4>
                <?=$row['judul_wisata'];?>
              </h4>
            </div>
            <div class="panel-body">
              <p>
                <b>
                  Jumlah hari : <?=$row['jumlah_hari'];?> hari
                  <br/>
                  Harga : IDR. <?=$row['harga'];?>
                </b>
                <br/><br/>
                <?=$row['deskripsi'];?>
              </p>
              
              <?=$row['detail'];?>
               
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

  <div class="page-header center">
    <h2>Tour Mancanegara</h2>
  </div>
    
    <div class="row">

    <?php foreach ($wisata_mancanegara as $row) : ?>

      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-heading center">
            <h4>
              <?=$row['judul_wisata'];?>
            </h4>
          </div>
          <div class="panel-body">
            <p>
              <b>
                Jumlah hari : <?=$row['jumlah_hari'];?> hari
                <br/>
                Harga : IDR. <?=$row['harga'];?>
              </b>
              <br/><br/>
              <?=$row['deskripsi'];?>
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

</div>
