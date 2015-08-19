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

      <form class="form-horizontal" method="POST" action="<?=base_url();?>user/save">
      <fieldset>

      <!-- Form Name -->
      <legend>Edit Data User</legend>

      <input type="hidden" name="id" value="<?=$user['id'];?>">

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nama_lengkap">Nama lengkap</label>  
        <div class="col-md-6">
        <input id="nama_lengkap" name="nama_lengkap" type="text" placeholder="" class="form-control input-md" required="" value="<?=$user['nama_lengkap'];?>">
          
        </div>
      </div>

      <!-- Appended Input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="tgl_lahir">Tanggal lahir</label>
        <div class="col-md-6">
          <div class="input-group">
            <input id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="" type="text" required=""  value="<?=$user['tgl_lahir'];?>">
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
          </div>
          
        </div>
      </div>


      <!-- Multiple Radios -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="jenis_kelamin">Jenis kelamin</label>
        <div class="col-md-4">
        <div class="radio">
          <label for="jenis_kelamin-0">
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin-0" value="Pria" <?php echo ($user['jenis_kelamin'] == 'Pria' ? 'checked' : ''); ?>>
            Pria
          </label>
        </div>
        <div class="radio">
          <label for="jenis_kelamin-1">
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin-1" value="Wanita"  <?php echo ($user['jenis_kelamin'] == 'Wanita' ? 'checked' : ''); ?>>
            Wanita
          </label>
        </div>
        </div>
      </div>

      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="alamat">Alamat lengkap</label>
        <div class="col-md-4">                     
          <textarea class="form-control" id="alamat" name="alamat"><?=$user['alamat'];?></textarea>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="email">Email</label>  
        <div class="col-md-6">
        <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required=""  value="<?=$user['email'];?>">
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="username">Username</label>  
        <div class="col-md-6">
        <input id="username" name="username" type="text" placeholder="" class="form-control input-md" required=""  value="<?=$user['username'];?>">
          
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="grup_user">Grup User</label>
        <div class="col-md-6">
          <select id="grup_user" name="grup_user" class="form-control">
            <option value="Admin" <?php echo ($user['grup_user'] == 'ADMIN' ? 'selected' : ''); ?>>Admin</option>
            <option value="User" <?php echo ($user['grup_user'] == 'USER' ? 'selected' : ''); ?>>User</option>
          </select>
        </div>
      </div>

      <!-- Multiple Radios -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="status">Status</label>
        <div class="col-md-4">
        <div class="radio">
          <label for="status-0">
            <input type="radio" name="status" id="status-0" value="Aktif" <?php echo ($user['status'] == 'Aktif' ? 'checked' : ''); ?>>
            Aktif
          </label>
        </div>
        <div class="radio">
          <label for="status-1">
            <input type="radio" name="status" id="status-1" value="Non-aktif" <?php echo ($user['status'] == 'Non-aktif' ? 'checked' : ''); ?>>
            Non-aktif
          </label>
        </div>
        </div>
      </div>

      <!-- Button (Double) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-8">
          <button id="submit" name="submit" class="btn btn-primary">Submit</button>
          <a href="<?php echo base_url() . 'user/view/' . $user['id']; ?>" id="cancel" name="cancel" class="btn btn-danger">Cancel</a>
        </div>
      </div>

      </fieldset>
      </form>



    </div>

    <?php 
      for ($i=0; $i < 40; $i++) { 
        echo "<br/>";
      }
    ?>
</div>
<!-- /.row -->