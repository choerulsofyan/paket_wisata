<h3>Info Customer</h3>
<table class="table table-striped">
    <tr>
        <th>Nama</th>
        <td><?=$customer['nama'];?></td>
    </tr>
    <tr>
        <th>Tanggal lahir</th>
        <td><?=$customer['tgl_lahir'];?></td>
    </tr>
    <tr>
        <th>Jenis kelamin</th>
        <td><?=$customer['jenis_kelamin'];?></td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td><?=$customer['alamat'];?></td>
    </tr>
    <tr>
        <th>No. Telepon</th>
        <td><?=$customer['no_telp'];?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?=$customer['email'];?></td>
    </tr>
</table>

<h3>Info Pemesanan</h3>
<table class="table table-striped">
    <tr>
        <th>No. Faktur</th>
        <td><?=$info_pemesanan['no_faktur'];?></td>
    </tr>
    <tr>
        <th>Judul wisata</th>
        <td><?=$info_pemesanan['judul_wisata'];?></td>
    </tr>
    <tr>
        <th>Tanggal pemesanan</th>
        <td><?=$info_pemesanan['tgl_pemesanan'];?></td>
    </tr>
    <tr>
        <th>Jumlah orang dewasa</th>
        <td><?=$info_pemesanan['jumlah_orang_dewasa'];?></td>
    </tr>
    <tr>
        <th>Jumlah anak-anak</th>
        <td><?=$info_pemesanan['jumlah_orang_anak'];?></td>
    </tr>
</table>

<h3>Info Pembayaran</h3>
<table class="table table-striped">
    <tr>
        <th>Total</th>
        <td><?=$info_pembayaran['total'];?></td>
    </tr>
    <tr>
        <th>Total pembayaran</th>
        <td><?=$info_pembayaran['total_pembayaran'];?></td>
    </tr>
    <tr>
        <th>Angsuran</th>
        <td><?=$info_pembayaran['angsuran'];?></td>
    </tr>
    <tr>
        <th>Sisa bayar</th>
        <td><?=$info_pembayaran['sisa_bayar'];?></td>
    </tr>
</table>


    <?php if ($info_angsuran) : ?>
        <h3>Info Angsuran</h3>
        <div class="row">
            <div class="col-lg-12">
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Tanggal Pembayaran</th>
                            <th>Pembayaran</th>
                            <th>Angsuran Ke</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($info_angsuran as $row) : ?>
                            <tr>
                                <td><?=$row['no'];?></td>
                                <td><?=$row['tgl_pembayaran'];?></td>
                                <td><?=$row['pembayaran'];?></td>
                                <td><?=$row['angsuran_ke'];?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END OF INFO ANGSURAN -->
<?php 
    endif; 
?>