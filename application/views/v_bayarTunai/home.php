<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box box-primary">
  <div class="box-header">
    <h3 style="text-align: center;"><b>Petunjuk Pembayaran</b></h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <img src="<?php echo base_url(); ?>assets/img/flow-payment/alur_tunai.png" class="img-responsive img-alur" alt="Alur pembayaran tunai">
      </div>
      <div class="col-md-1"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-xs-12"></div>
      <div class="col-md-6 col-xs-12">
        <img src="<?php echo base_url(); ?>assets/img/flow-payment/alur_tunai@media.png" class="img-responsive img-alur-media" style="visibility: hidden;" alt="Alur pembayaran tunai">
      </div>
      <div class="col-md-3 col-xs-12"></div>
    </div>
  </div>
  <div class="box box-solid">
    <div class="box-body">
      <div class="row">
        <div class="col-md-12" style="text-align: center;"><h3>Total Tagihan</h3></div>
      </div>
      <div class="row">
        <div class="col-md-12" style="text-align: center;">
        <?php ?>
          <h2>
          <b class="tagihan" data-a-sign="Rp. " data-a-dec="," data-a-sep="."><?php echo $tagihan; ?></b>
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12" style="text-align: center;">
        <h5>Dengan daya pakai sebesar: <b class="daya"><?php echo $daya; ?></b> m<sup>3</sup></h5>
        </div>
      </div>
    </div>
    <div class="box-footer">
      <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-2">
          <button class="form-control btn btn-primary konfirmasiBayarTunai" data-id="<?php echo $userdata->idUser; ?>" data-toggle="modal" data-target="#konfirmasiBayar">Bayar</button>
        </div>
        <div class="col-md-5"></div>
      </div>
    </div>
  </div>
</div>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiBayar', 'bayar-tunai', 'Apakah anda yakin ingin melanjutkan?', 'Ya'); ?>

<script type="text/javascript">
    $(document).ready(function(){
        $('.tagihan').autoNumeric('init');
    });
</script>