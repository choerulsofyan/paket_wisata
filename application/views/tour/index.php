 <!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?=$title;?>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Forms
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

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