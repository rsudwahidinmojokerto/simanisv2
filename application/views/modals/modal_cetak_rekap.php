<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Cetak Rekapitulasi Pembayaran</h3>

  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active tabTanggal"><a href="#cetak-tanggal" data-toggle="tab">Berdasarkan tanggal</a></li>
      <li class="tabPelanggan"><a href="#cetak-pelanggan" data-toggle="tab">Berdasarkan pelanggan</a></li>
    </ul>
    <div class="tab-content">
      <div class="active tab-pane" id="cetak-tanggal">
        <form action="<?php echo base_url('c_riwayatBayar/printpdf'); ?>" method="POST" target="_blank">
          <div class="input-group form-group date">
            <span class="input-group-addon"><i class="fa fa-date"></i>
              <i class="fa fa-calendar"></i> Tanggal Awal   
            </span>
            <input type="text" class="form-control datepicker" placeholder="Masukkan tanggal awal" name="tgl_awal" id="tgl_awal" aria-describedby="sizing-addon2" autocomplete="off" required>
          </div>
          <div class="input-group form-group date">
            <span class="input-group-addon">
              <i class="fa fa-calendar"></i> Tanggal Akhir  
            </span>
            <input type="text" class="form-control datepicker" placeholder="Masukkan tanggal akhir" name="tgl_akhir" id="tgl_akhir" aria-describedby="sizing-addon2" autocomplete="off" required>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <button type="submit" class="form-control btn btn-danger cetakByRange">Cetak</button>
              <!-- <a href="<?php echo base_url('c_riwayatBayar/printpdf'); ?>" class="form-control btn btn-danger">Cetak</a> -->
            </div>
          </div>
        </form>
      </div>

      <div class="tab-pane" id="cetak-pelanggan">
        <form action="<?php echo base_url('c_riwayatBayar/printpdf'); ?>" method="POST" target="_blank">
          <div class="input-group form-group">
            <span class="input-group-addon">
              <i class="fa fa-user"></i>  
            </span>
            <input type="text" class="form-control" placeholder="Masukkan ID pelanggan" name="idPelanggan" id="idPelanggan" aria-describedby="sizing-addon2" autocomplete="off" required>
          </div>
          <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="form-control btn btn-danger cetakById">Cetak</button>
                <!-- <a href="<?php echo base_url('c_riwayatBayar/printpdf'); ?>" class="form-control btn btn-danger">Cetak</a> -->
            </div>
          </div>
        </form>
      </div>
    </div>
</div>

<script type="text/javascript">
   $(function(){
    $(".datepicker").datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true
    });
    $("#tgl_awal").on('changeDate', function(selected) {
        var startDate = new Date(selected.date.valueOf());
        $("#tgl_akhir").datepicker('setStartDate', startDate);
    });

  });
</script>