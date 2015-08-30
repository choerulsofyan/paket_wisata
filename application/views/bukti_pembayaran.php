<!DOCTYPE html>
<html>
<head>
    <title>Bukti Pembayaran</title>
    <script type="text/javascript">
        window.onload = window.print();
    </script>
</head>
<body>
    <hr/>
    <center>
        <h3>Bukti Pembayaran</h3>
    </center>
    <div>
        <table>
             <tbody>
                <tr>
                    <td>No Faktur</td>
                    <td> : <?=$pembayaran['no_faktur'];?></td>
                    
                </tr>
            
           
                <tr>
                    <td>Nama Customer</td>
                    <td> : <?=$pembayaran['customer_nama'];?></td>
                    
                </tr>
                <tr>
                    <td>Total</td>
                    <td> : Rp. <?=$pembayaran['total'];?></td>
                   
                </tr>
                <tr>
                    <td>Angsuran ke</td>
                    <td> : <?=$pembayaran['angsuran_ke'];?></td>
                   
                </tr>
                <tr>
                    <td>Pembayaran</td>
                    <td> : Rp. <?=$pembayaran['pembayaran'];?></td>
                    
                </tr>
               
            </tbody>
        </table>
    <hr/>
</body>
</html>