 <!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-tabs">
          <li role="pembayaran" class="active"><a href="<?=base_url() . 'pembayaran';?>">Daftar</a></li>
          <li role="pembayaran"><a href="<?=base_url() . 'pembayaran/create';?>">Tambah</a></li>
        </ul>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
    <br/>
    <h3>
        <?=$title;?>
        <hr/>
    </h3>
    <br/>
    <table id="DaftarPembayaran">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>No. Faktur</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Customer</th>
                    <th>Total</th>
                    <th>Pembayaran</th>
                    <th>Angsuran ke</th>
                    <th>Detail</th>
                </tr>
            </thead>

        </table>
    </div>
</div>
<!-- /.row -->