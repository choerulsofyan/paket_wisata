<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
<!--         <h1 class="page-header">
            <?=$title;?>
        </h1> -->
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Forms
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-6">

      <?php echo validation_errors(); ?>

      <form class="form-horizontal" method="POST" action="<?=base_url();?>customer/save">
      <fieldset>

      <!-- Form Name -->
      <legend>Info Customer</legend>
      
      <input type="hidden" name="id" value="<?=$customer['id'];?>">

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>  
        <div class="col-md-6">
        <input id="nama" name="nama" type="text" placeholder="" class="form-control input-md" required="" value="<?=$customer['nama'];?>">
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="tgl_lahir">Tanggal Lahir</label>  
        <div class="col-md-6">
        <input id="tgl_lahir" name="tgl_lahir" type="text" placeholder="" class="form-control input-md" required=""  value="<?=$customer['tgl_lahir'];?>">
          
        </div>
      </div>

      <!-- Multiple Radios (inline) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="jenis_kelamin">Jenis Kelamin</label>
        <div class="col-md-4"> 
          <label class="radio-inline" for="jenis_kelamin-0">
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin-0" value="Pria" <?php echo ($customer['jenis_kelamin'] == 'Pria' ? 'checked' : ''); ?>>
            Pria
          </label> 
          <label class="radio-inline" for="jenis_kelamin-1">
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin-1" value="Wanita" <?php echo ($customer['jenis_kelamin'] == 'Wanita' ? 'checked' : ''); ?>>
            Wanita
          </label>
        </div>
      </div>

      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="alamat">Alamat</label>
        <div class="col-md-4">                     
          <textarea class="form-control" id="alamat" name="alamat"><?=$customer['alamat'];?></textarea>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="no_telp">Nomor Telepon</label>  
        <div class="col-md-6">
        <input id="no_telp" name="no_telp" type="text" placeholder="" class="form-control input-md"  value="<?=$customer['no_telp'];?>">
          
        </div>
      </div>

      <!-- Multiple Radios (inline) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="status">Status</label>
        <div class="col-md-4"> 
          <label class="radio-inline" for="status-0">
            <input type="radio" name="status" id="status-0" value="AKTIF" <?php echo ($customer['status'] == 'AKTIF' ? 'checked' : ''); ?>>
            AKTIF
          </label> 
          <label class="radio-inline" for="status-1">
            <input type="radio" name="status" id="status-1" value="NON-AKTIF" <?php echo ($customer['status'] == 'NON-AKTIF' ? 'checked' : ''); ?>>
            NON-AKTIF
          </label>
        </div>
      </div>

      <legend>Email dan Password</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="email">Email</label>  
        <div class="col-md-6">
        <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required=""   value="<?=$customer['email'];?>">
          
        </div>
      </div>

      <!-- Password input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="password">Ubah Password</label>
        <div class="col-md-6">
          <input id="password" name="password" type="password" placeholder="" class="form-control input-md">
          
        </div>
      </div>

      <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="submit"></label>
          <div class="col-md-8">
            <button id="submit" name="submit" class="btn btn-primary">Submit</button>
            <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
          </div>
        </div>

      </fieldset>
      </form>


    </div>

    <?php 
      for ($i=0; $i < 30; $i++) { 
        echo "<br/>";
      }
    ?>
</div>
<!-- /.row -->