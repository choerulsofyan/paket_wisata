<div class="container">
    <center>
    <h2  style="margin-top:3%;">INFORMASI CUSTOMER</h2>
    </center>
    <div class="row" style="margin-top:4%;">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Info Identitas</h3>
                </div>
                <div class="panel-body">
                    
                    <div class="">
                        
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <tbody>
                                    <tr>
                                        <th>Nama</th>
                                        <td><?=$customer['nama'];?></td>
                                        
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th>Tanggal lahir</th>
                                        <td><?=date("d F Y", strtotime($customer['tgl_lahir']));?></td>
                                        
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
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
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            
        </div>
        
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Info Pemesanan</h3>
                </div>
                <div class="panel-body">
                    
                    <table class="table table-hover table-striped">
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
                            <td><?=date("d F Y", strtotime($info_pemesanan['tgl_pemesanan']));?></td>
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
                    
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Info Pembayaran</h3>
                </div>
                <div class="panel-body">
                    
                    <table class="table table-hover table-striped"">
                        <tr>
                            <th>Total</th>
                            <td>Rp. <?=$info_pembayaran['total'];?></td>
                        </tr>
                        <tr>
                            <th>Total pembayaran</th>
                            <td>Rp. <?=$info_pembayaran['total_pembayaran'];?></td>
                        </tr>
                        <tr>
                            <th>Angsuran</th>
                            <td><?=$info_pembayaran['angsuran'];?>x</td>
                        </tr>
                        <tr>
                            <th>Sisa bayar</th>
                            <td>Rp. <?=$info_pembayaran['sisa_bayar'];?></td>
                        </tr>
                    </table>
                    
                </div>
            </div>
        </div>
        <?php if ($info_angsuran) : ?>
        
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"> Info Angsuran</h3>
                </div>
                <div class="panel-body">
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-hover table-striped">
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
                                        <td><?=date("d F Y", strtotime($row['tgl_pembayaran']));?></td>
                                        <td>Rp. <?=$row['pembayaran'];?></td>
                                        <td><?=$row['angsuran_ke'];?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        
        
        
        
        <!-- END OF INFO ANGSURAN -->
        <?php
        endif;
        ?>
    </div>
</div>