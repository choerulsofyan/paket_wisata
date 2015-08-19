 <!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
      <ul class="nav nav-tabs">
        <li role="pembayaran"><a href="<?=base_url() . 'pembayaran';?>">Daftar</a></li>
        <li role="pembayaran" class="active"><a href="<?=base_url() . 'pembayaran/create';?>">Tambah</a></li>
      </ul>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-6">
      <br/>
      <h3>
          <?=$title;?>
          <hr/>
      </h3>
      <br/>
      
      <?php echo validation_errors(); ?>

      <form class="form-horizontal" method="POST" action="<?=base_url();?>pembayaran/save">
      <fieldset>

      <!-- Form Name -->
      <!-- <legend>Input Pembayaran Baru</legend> -->

      <input id="pemesanan_id" type="hidden" name="pemesanan_id">
      <input id="customer_id" type="hidden" name="customer_id">

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="no_faktur">Nomor Faktur</label>  
        <div class="col-md-6">
        <input id="no_faktur" name="no_faktur" type="text" placeholder="" class="form-control input-md" required="">
        <span class="help-block">Masukan nomor faktur dan tekan enter.</span>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="customer_nama">Nama Customer</label>  
        <div class="col-md-6">
        <input id="customer_nama" name="customer_nama" type="text" placeholder="" class="form-control input-md" readonly/>
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="total">Total</label>  
        <div class="col-md-6">
        <div class="input-group">
        <span class="input-group-addon">Rp.</span>
        <input id="total" name="total" type="text" placeholder="" class="form-control input-md" readonly/>
        </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="angsuran_ke">Angsuran ke</label>  
        <div class="col-md-6">
        <input id="angsuran_ke" name="angsuran_ke" type="text" placeholder="" class="form-control input-md" readonly/>
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="sisa_bayar">Sisa bayar</label>  
        <div class="col-md-6">
        <input id="sisa_bayar" name="sisa_bayar" type="text" placeholder="" class="form-control input-md" readonly/>
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="pembayaran">Pembayaran</label>  
        <div class="col-md-6">
        <div class="input-group">
        <span class="input-group-addon">Rp.</span>
        <input id="pembayaran" name="pembayaran" type="text" placeholder="" class="form-control input-md"  required="">
        </div>
        </div>
      </div>

      <!-- Button (Double) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-8">
          <button id="submit" name="submit" class="btn btn-primary">Submit</button>
          <a href="<?php echo base_url() . 'pembayaran'; ?>" id="cancel" name="cancel" class="btn btn-danger">Cancel</a>
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