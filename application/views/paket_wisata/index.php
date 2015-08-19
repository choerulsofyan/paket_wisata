 <!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-tabs">
          <li role="paket_wisata" class="active"><a href="<?=base_url() . 'paket_wisata';?>">Daftar</a></li>
          <li role="paket_wisata"><a href="<?=base_url() . 'paket_wisata/create';?>">Tambah</a></li>
        </ul>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
    <br/>
    <h3>
        <?=$title;?>
    </h3>
    <br/>
    
    <table id="DaftarPaketWisata">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Judul Wisata</th>
                    <th>Kategori</th>
                    <th>Jumlah Hari</th>
                    <th>Harga</th>
                    <th>Detail</th>
                </tr>
            </thead>

        </table>
    </div>
</div>
<!-- /.row -->