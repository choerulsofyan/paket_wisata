<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <!-- <h1 class="page-header">
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

      <form class="form-horizontal" method="POST" action="<?=base_url();?>paket_wisata/save">
      <fieldset>

      <!-- Form Name -->
      <legend><?=$title;?></legend>

      <input type="hidden" name="id" value="<?=$paket_wisata['id'];?>">

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="judul_wisata">Judul wisata</label>  
        <div class="col-md-6">
        <input id="judul_wisata" name="judul_wisata" type="text" placeholder="" class="form-control input-md" required="" value="<?=$paket_wisata['judul_wisata'];?>">
          
        </div>
      </div>

      <!-- Multiple Radios -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="kategori">Kategori Wisata</label>
        <div class="col-md-4">
        <div class="radio">
          <label for="kategori-0">
            <input type="radio" name="kategori" id="kategori-0" value="1" <?php echo ($paket_wisata['kategori_id'] == '1' ? 'checked' : ''); ?>>
            Lokal
          </label>
        </div>
        <div class="radio">
          <label for="kategori-1">
            <input type="radio" name="kategori" id="kategori-1" value="2" <?php echo ($paket_wisata['kategori_id'] == '2' ? 'checked' : ''); ?>>
            Luar Negri
          </label>
        </div>
        </div>
      </div>

      <!-- Appended Input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="jumlah_hari">Jumlah hari</label>
        <div class="col-md-6">
          <div class="input-group">
            <input id="jumlah_hari" name="jumlah_hari" class="form-control" placeholder="" type="text" required="" value="<?=$paket_wisata['jumlah_hari'];?>">
            <span class="input-group-addon">hari</span>
          </div>
          
        </div>
      </div>
      <!-- Prepended text-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="harga">Harga</label>
        <div class="col-md-6">
          <div class="input-group">
            <span class="input-group-addon">Rp.</span>
            <input id="harga" name="harga" class="form-control" placeholder="" type="text" required="" value="<?=$paket_wisata['harga'];?>">
          </div>
          
        </div>
      </div>

      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="deskripsi">Deskripsi</label>
        <div class="col-md-4">                     
          <textarea class="form-control" id="deskripsi" name="deskripsi"><?=$paket_wisata['deskripsi'];?></textarea>
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