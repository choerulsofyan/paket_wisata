<!-- Page Heading -->

<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?=$title;?>
        </h1>
    </div>
</div>

<div class="col-md-12">
<div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">INFO CUSTOMER</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-12">
                        
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                
                                    
                                
                                <tbody>
								
									<tr>
                                        <th>Nama</th>
                                        <td> <?=$customer['nama'];?></td>
                                        
                                    </tr>
                                    <tr>
                                        <th>Tanggal lahir</th>
                                        <td><?=date("d F Y", strtotime($customer['tgl_lahir']));?></td>
                                        
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
                                    <tr>
                                        <th>Status</th>
                                        <td><?=$customer['status'];?></td>
                                      
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
					
					
					<div class="row">
    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-12">
        <a href="<?php echo base_url() . 'admin/customer/edit/' . $customer['id']; ?>" id="edit" class="btn btn-primary">Edit</a>
        <a href="<?php echo base_url() . 'admin/customer/delete/' . $customer['id']; ?>" id="delete" class="btn btn-danger">Delete</a>
        <a href="<?php echo base_url() . 'admin/customer'; ?>" id="cancel" class="btn btn-primary">Back</a>
      </div>
    </div>
</div>

                            </div>
                        </div>
						</div>
						
						<div class="col-md-12">
<div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">INFO PEMESANAN</h3>
                            </div>
                            <div class="panel-body">
                                <div class="panel-body">
                                
                        
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                
                                <tbody>
								
									<tr>
                                        <th>No Faktur</th>
                                        <td><?=$info_pemesanan['no_faktur'];?></td>
                                        
                                    </tr>
                                    <tr>
                                        <th>Judul Wisata</th>
                                        <td><?=$info_pemesanan['judul_wisata'];?></td>
                                        
                                    </tr>
                                    <tr>
                                        <th>Tanggal Pemesanan</th>
                                        <td><?=date("d F Y", strtotime($info_pemesanan['tgl_pemesanan']));?></td>
                                       
                                    </tr>
                                    <tr>
                                        <th>Jumlah Orang Dewasa</th>
                                        <td><?=$info_pemesanan['jumlah_orang_dewasa'];?> Orang</td>
                                        
                                    </tr>
                                    <tr>
                                        <th>Jumlah Orang Anak</th>
                                        <td><?=$info_pemesanan['jumlah_orang_anak'];?> Orang</td>
                                        
                                    </tr>
                                   
                                    
                                </tbody>
                            </table>
                        </div>
						<div class="form-group">
          <label class="col-md-4 control-label" for="submit"></label>
          <div class="col-md-12">
            <a href="<?php echo base_url() . 'admin/pemesanan/edit/' . $info_pemesanan['pemesanan_id']; ?>" id="edit" class="btn btn-primary">Edit</a>
            <a href="<?php echo base_url() . 'admin/pemesanan/delete/' . $info_pemesanan['pemesanan_id']; ?>" id="delete" class="btn btn-danger">Delete</a>
          </div>
        </div>
                    </div>
                            </div>
                            </div>
                        </div>
						
						
						<div class="col-md-12">
<div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">INFO PEMBAYARAN</h3>
                            </div>
                            <div class="panel-body">
                                   <!-- INFO PEMBAYARAN -->
   
    <div class="row">
        <div class="col-lg-2">
            Total Biaya
        </div>
        <div class="col-lg-5">
            Rp. <?=$info_pembayaran['total'];?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            Total Pembayaran
        </div>
        <div class="col-lg-5">
            Rp. <?=$info_pembayaran['total_pembayaran'];?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            Total Angsuran
        </div>
        <div class="col-lg-5">
            <?=$info_pembayaran['angsuran'];?>x
        </div>
    </div>
    <!-- END OF INFO PEMBAYARAN -->
                            </div>
                        </div>
						</div>
						</div>


<!-- /.row -->



<?php if ($info_pemesanan) : ?>



 

    <!-- INFO ANGSURAN -->
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
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($info_angsuran as $row) : ?>
                            <tr>
                                <td><?=$row['no'];?></td>
                                <td><?=$row['tgl_pembayaran'];?></td>
                                <td><?=$row['pembayaran'];?></td>
                                <td><?=$row['angsuran_ke'];?></td>
                                <td><?=$row['detail'];?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END OF INFO ANGSURAN -->
<?php 
    endif; 
endif; 
?>
<!-- /.row