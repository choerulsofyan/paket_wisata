<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?=$title;?>
        </h1>
    </div>
</div>
<!-- /.row -->

<div class="col-sm-12">

	<div class="col-sm-12">
                        <div class="panel panel-primary">
						
                            <div class="panel-heading"<h2>INVOICE</h2>
                            </div>
							
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                
								 
                               
                                <tbody>
								
									<tr>
                                        <th>No Faktur</th>
                                        <td><?=$pemesanan['no_faktur'];?></td>
                                        
                                    </tr>
                                    <tr>
                                        <th>Nama Customer</th>
                                        <td> <?=$pemesanan['customer_nama'];?></td>
                                        
                                    </tr>
                                    <tr>
                                        <th>Judul Wisata</th>
                                        <td><?=$pemesanan['judul_wisata'];?></td>
                                        
                                    </tr>
                                   
                                    <tr>
                                        <th>Tanggal Pemesanan</th>
                                        <td> <?=$pemesanan['tgl_pemesanan'];?></td>
                                        
                                    </tr>
                                    <tr>
                                        <th>Jumlah Orang Dewasa</th>
                                        <td><?=$pemesanan['jumlah_orang_dewasa'];?> orang</td>
                                        
                                    </tr>
                                    <tr>
                                        <th>Jumlah Orang Anak</th>
                                        <td><?=$pemesanan['jumlah_orang_anak'];?> orang</td>
                                       
                                    </tr>
                                    <tr>
                                        <th> Total</th>
                                        <td>Rp.<?=$pemesanan['total'];?></td>
                                        
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
						
					
						
                    </div>
                
                            
							
								<div class="row">
    <!-- Button (Double) -->
    <div class="form-group">
      <label  for="submit"></label>
      <div class="col-md-12" style=""margin-left>
        <a href="<?php echo base_url() . 'admin/pemesanan/edit/' . $pemesanan['id']; ?>" id="edit" class="btn btn-primary">Edit</a>
        <a href="<?php echo base_url() . 'admin/pemesanan/delete/' . $pemesanan['id']; ?>" id="delete" class="btn btn-danger">Delete</a>
        <a href="<?php echo base_url() . 'admin/pemesanan'; ?>" id="cancel" class="btn btn-primary">Back</a>
        <a href="<?php echo base_url() . 'admin/pemesanan/print_pemesanan/' . $pemesanan['id']; ?>" id="print" class="btn btn-primary" target="_blank">Print</a>
      </div>
    </div>
</div>
         
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
		 
		  
</div> 




<!-- /.row