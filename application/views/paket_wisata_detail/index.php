 <!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-tabs">
          <li role="paket_wisata_detail" class="active"><a href="<?=base_url() . 'paket_wisata_detail';?>">Daftar</a></li>
          <li role="paket_wisata_detail"><a href="<?=base_url() . 'paket_wisata_detail/create';?>">Tambah</a></li>
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
    <table id="DaftarPaketWisataDetail">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Judul Wisata</th>
                    <th>Hari Ke</th>
                    <th>Rute</th>
                    <th>Detail</th>
                </tr>
            </thead>

        </table>
    </div>
</div>
<!-- /.row -->