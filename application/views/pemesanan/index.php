 <!-- Page Heading -->
<div class="row">
    <div class="col-md-12">
      <ul class="nav nav-tabs">
        <li role="pemesanan" class="active"><a href="<?=base_url() . 'admin/pemesanan';?>">Daftar</a></li>
        <li role="pemesanan"><a href="<?=base_url() . 'admin/pemesanan/create';?>">Buat Pemesanan</a></li>
      </ul>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-md-12">
    <br/>
    <h3>
        <?=$title;?>
    </h3>
    <br/>
    <div class="table-responsive">
    <table id="DaftarPemesanan" class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nama Customer</th>
                    <th>Tujuan Wisata</th>
                    <th>No. Faktur</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Jumlah Orang Dewasa</th>
                    <th>Jumlah Orang Anak</th>
                    <th>Total</th>
                    <th>Detail</th>
                </tr>
            </thead>

        </table>
    </div>
</div>
<!-- /.row -->