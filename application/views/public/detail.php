<div class="container">
    <div class="row">
        <div class="col-md-9">
            <img src="<?= base_url() . 'assets/images/tours/' . $paket_wisata['gambar'];?>" class="img-responsive thumbnail">
        </div>
        <div class="col-md-3">
            <a href="<?php echo base_url() . 'tour/book/' . $paket_wisata['id']; ?>">Pesan sekarang</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3><?=$paket_wisata['judul_wisata'];?></h3>
            <p>
                <?=$paket_wisata['deskripsi'];?>
            </p>
            <br/><br/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3> Rute Perjalanan : </h3>
            <br/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Hari ke 1 <small>Berangkat dari Bandara Soekarno Hatta</small></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Hari ke 2 <small>Menginap di Hotel</small></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>