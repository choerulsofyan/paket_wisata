<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?=$title;?>
        </h1>
    </div>
</div>
<!-- /.row -->

<div class="col-lg-6">
                        
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <tbody>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td><?=$user['nama_lengkap'];?></td>
                                        
                                    </tr>
                                
                                
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td><?=date("d F Y", strtotime($user['tgl_lahir']));?></td>
                                        
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td><?=$user['jenis_kelamin'];?></td>
                                        
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td><?=$user['alamat'];?></td>
                                       
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?=$user['email'];?></td>
                                        
                                    </tr>
                                    <tr>
                                        <th>User Name</th>
                                        <td><?=$user['username'];?></td>
                                        
                                    </tr>
                                    <tr>
                                        <th>Grup User</th>
                                        <td><?=$user['grup_user'];?></td>
                                        
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td><?=$user['status'];?></td>
                                        
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
        <a href="<?php echo base_url() . 'admin/user/edit/' . $user['id']; ?>" id="edit" class="btn btn-primary">Edit</a>
        <!-- <button name="delete" class="btn btn-danger" onclick="confirmDelete(<?=$user['id'];?>)">Delete</button> -->
        <a href="<?php echo base_url() . 'admin/user/delete/' . $user['id']; ?>" id="delete" class="btn btn-danger">Delete</a>
        <a href="<?php echo base_url() . 'admin/user'; ?>" id="cancel" class="btn btn-primary">Back</a>
		<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	
      </div>
    </div>
	
</div>
<!-- /.row