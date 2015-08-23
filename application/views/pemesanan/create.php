 <!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
      <ul class="nav nav-tabs">
        <li role="pemesanan"><a href="<?=base_url() . 'admin/pemesanan';?>">Daftar</a></li>
        <li role="pemesanan" class="active"><a href="<?=base_url() . 'admin/pemesanan/create';?>">Buat Pemesanan</a></li>
      </ul>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-6">

      <br/><br/>

      <?php echo validation_errors(); ?>

      <form class="form-horizontal" method="POST" action="<?=base_url();?>admin/tour/save">
      <fieldset>

      <!-- Form Name -->
      <legend>Tujuan Wisata</legend>

      <!-- Multiple Radios -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="kategori_wisata">Kategori Wisata</label>
        <div class="col-md-4">
        <div class="radio">
          <label for="kategori_wisata-0">
            <input type="radio" name="kategori_wisata" id="kategori_wisata-0" value="1"> Domestik
          </label>
        </div>
        <div class="radio">
          <label for="kategori_wisata-1">
            <input type="radio" name="kategori_wisata" id="kategori_wisata-1" value="2"> Mancanegara
          </label>
        </div>
        </div>
      </div>


      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="wisata_id">Paket Wisata</label>
        <div class="col-md-6">
          <select id="wisata_id" name="wisata_id" class="form-control" disabled >
            <option selected>-PILIH KATEGORI WISATA-</option>
          </select>
        </div>
      </div>

      <legend>Info Customer</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>  
        <div class="col-md-6">
        <input id="nama" name="nama" type="text" placeholder="" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="tgl_lahir">Tanggal Lahir</label>  
        <div class="col-md-6">
        <input id="tgl_lahir" name="tgl_lahir" type="date" placeholder="" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Multiple Radios (inline) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="jenis_kelamin">Jenis Kelamin</label>
        <div class="col-md-4"> 
          <label class="radio-inline" for="jenis_kelamin-0">
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin-0" value="Pria" checked="checked">
            Pria
          </label> 
          <label class="radio-inline" for="jenis_kelamin-1">
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin-1" value="Wanita">
            Wanita
          </label>
        </div>
      </div>

      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="alamat">Alamat</label>
        <div class="col-md-4">                     
          <textarea class="form-control" id="alamat" name="alamat"></textarea>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="no_telp">Nomor Telepon</label>  
        <div class="col-md-6">
        <input id="no_telp" name="no_telp" type="number" placeholder="" class="form-control input-md">
          
        </div>
      </div>

      <legend>Email dan Password</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="email">Email</label>  
        <div class="col-md-6">
        <input id="email" name="email" type="email" placeholder="" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Password input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="password">Password</label>
        <div class="col-md-6">
          <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
          
        </div>
      </div>

      <legend>Jumlah orang</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="jumlah_orang_anak_dewasa">Dewasa</label>  
        <div class="col-md-6">
        <input id="jumlah_orang_anak_dewasa" name="jumlah_orang_dewasa" type="number" placeholder="" class="form-control input-md" required="">
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="jumlah_orang_anak">Anak-anak</label>  
        <div class="col-md-6">
        <input id="jumlah_orang_anak" name="jumlah_orang_anak" type="number" placeholder="" class="form-control input-md" required="">
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