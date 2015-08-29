<!DOCTYPE html>
<html>
<head>
    <title>Bukti Pemesanan</title>
    <script type="text/javascript">
        window.onload = window.print();
    </script>
</head>
<body>
    <hr/>
    <center>
        <h3>Bukti Pemesanan</h3>
    </center>
    <table>
        <tr>
            <td>No. Faktur</td>
            <td> : <?=$pemesanan['no_faktur'];?></td>
        </tr>
        <tr>
            <td>Nama Customer</td>
            <td> : <?=$pemesanan['customer_nama'];?></td>
        </tr>
        <tr>
            <td>Tujuan Wisata</td>
            <td> : <?=$pemesanan['judul_wisata'];?></td>
        </tr>
        <tr>
            <td>Tanggal Pemesanan</td>
            <td> : <?=$pemesanan['tgl_pemesanan'];?></td>
        </tr>
        <tr>
            <td>Jumlah Orang</td>
            <td>
                : <?=$pemesanan['jumlah_orang_dewasa'] + $pemesanan['jumlah_orang_anak'];?> orang
            </td>
        </tr>
        <tr>
            <td>Total</td>
            <td>
                : Rp. <?=$pemesanan['total'];?>
            </td>
        </tr>
    </table>
    <hr/>
</body>
</html>