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
      <legend>Input User Baru</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nama_lengkap">Nama lengkap</label>  
        <div class="col-md-6">
        <input id="nama_lengkap" name="nama_lengkap" type="text" placeholder="" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Text input-->
      <!-- <div class="form-group">
        <label class="col-md-4 control-label" for="tgl_lahir">Tanggal lahir</label>  
        <div class="col-md-6">
          <input id="tgl_lahir" name="tgl_lahir" type="text" placeholder="" class="form-control input-md" required="">
          <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
          </span>
        </div>
      </div> -->

      <!-- Appended Input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="tgl_lahir">Tanggal lahir</label>
        <div class="col-md-6">
          <div class="input-group">
            <input id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="" type="text" required="">
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
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin-0" value="Pria" checked="checked">
            Pria
          </label>
        </div>
        <div class="radio">
          <label for="jenis_kelamin-1">
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin-1" value="Wanita">
            Wanita
          </label>
        </div>
        </div>
      </div>

      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="alamat">Alamat lengkap</label>
        <div class="col-md-4">                     
          <textarea class="form-control" id="alamat" name="alamat"></textarea>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="email">Email</label>  
        <div class="col-md-6">
        <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="username">Username</label>  
        <div class="col-md-6">
        <input id="username" name="username" type="text" placeholder="" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Password input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="password">Password</label>
        <div class="col-md-6">
          <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Password input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="password_confirm">Confirm password</label>
        <div class="col-md-6">
          <input id="password_confirm" name="password_confirm" type="password" placeholder="" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="hak_akses">Hak akses</label>
        <div class="col-md-6">
          <select id="hak_akses" name="hak_akses" class="form-control">
            <option value="Admin">Admin</option>
            <option value="User">User</option>
          </select>
        </div>
      </div>

      <!-- Multiple Radios -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="status">Status</label>
        <div class="col-md-4">
        <div class="radio">
          <label for="status-0">
            <input type="radio" name="status" id="status-0" value="Aktif" checked="checked">
            Aktif
          </label>
        </div>
        <div class="radio">
          <label for="status-1">
            <input type="radio" name="status" id="status-1" value="Non-aktif">
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
          <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
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