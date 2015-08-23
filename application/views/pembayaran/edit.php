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

      <form class="form-horizontal" method="POST" action="<?=base_url();?>admin/pembayaran/save">
      <fieldset>

      <!-- Form Name -->
      <legend>Input Pembayaran Baru</legend>
      <input id="id" type="hidden" name="id" value="<?=$pembayaran['id'];?>">

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="no_faktur">Nomor Faktur</label>  
        <div class="col-md-6">
        <input id="no_faktur" name="no_faktur" type="text" placeholder="" class="form-control input-md"  value="<?=$pembayaran['no_faktur'];?>" readonly/>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="customer_nama">Nama Customer</label>  
        <div class="col-md-6">
        <input id="customer_nama" name="customer_nama" type="text" placeholder="" class="form-control input-md" value="<?=$pembayaran['customer_nama'];?>" readonly/>
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="total">Total</label>  
        <div class="col-md-6">
        <div class="input-group">
        <span class="input-group-addon">Rp.</span>
        <input id="total" name="total" type="text" placeholder="" class="form-control input-md" value="<?=$pembayaran['total'];?>" readonly/>
        </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="angsuran_ke">Angsuran ke</label>  
        <div class="col-md-6">
        <input id="angsuran_ke" name="angsuran_ke" type="number" placeholder="" class="form-control input-md" value="<?=$pembayaran['angsuran_ke'];?>" />
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="pembayaran">Pembayaran</label>  
        <div class="col-md-6">
        <div class="input-group">
        <span class="input-group-addon">Rp.</span>
        <input id="pembayaran" name="pembayaran" type="number" placeholder="" class="form-control input-md" value="<?=$pembayaran['pembayaran'];?>">
        </div>
        </div>
      </div>

      <!-- Button (Double) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-8">
          <button id="submit" name="submit" class="btn btn-primary">Submit</button>
          <a href="<?php echo base_url() . 'admin/pembayaran/view/' . $pembayaran['id']; ?>" id="cancel" name="cancel" class="btn btn-danger">Cancel</a>
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