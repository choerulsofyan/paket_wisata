<div class="row">
    <div class="col-lg-12">
        <?php
            foreach ($tours as $tour) :
        ?>

        <div><?=$tour['judul_wisata'];?></div>
        <div><?=$tour['jumlah_hari'];?> hari</div>
        <div>Rp. <?=$tour['harga'];?></div>
        <div><?=$tour['deskripsi'];?></div>
        <div><?=$tour['book_now'];?></div>
        <div><?=$tour['detail'];?></div>
        <br/><br/><br/><br/>

        <?php 
            endforeach; 
        ?>

    </div>
</div>
<!-- /.row -->