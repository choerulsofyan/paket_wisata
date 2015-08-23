<div class="row">
    <div class="col-lg-6">
      <br/>
      <h3>
          <?=$title;?>
          <hr/>
      </h3>
      <br/>

      <?php echo validation_errors(); ?>

      <form class="form-horizontal" method="POST" action="<?=base_url();?>admin/paket_wisata_detail/save">
      <fieldset>

      <!-- Form Name -->
      <!-- <legend>Form Name</legend> -->

      <input type="hidden" id="wisata_id" name="wisata_id" value="<?=$paket_wisata_id;?>">

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="rute">Rute</label>  
        <div class="col-md-6">
        <input id="rute" name="rute" type="text" placeholder="" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="hari_ke">Hari ke</label>  
        <div class="col-md-6">
        <input id="hari_ke" name="hari_ke" type="number" placeholder="" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="deskripsi">Deskripsi</label>
        <div class="col-md-4">                     
          <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
        </div>
      </div>

      <!-- Button (Double) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-8">
          <button id="submit" name="submit" class="btn btn-primary">Submit</button>
          <a href="<?php echo base_url() . 'admin/paket_wisata_detail'; ?>" id="cancel" name="cancel" class="btn btn-danger">Cancel</a>
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
<!-- /.row