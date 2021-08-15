<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box box-primary">
  <div class="box-header">
    <h3 style="text-align: center;">Ubah Harga</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row" style="text-align: center;">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <input type="text" class="form-control harga" placeholder="Masukkan Harga Baru" name="harga" id="idHarga" data-a-sign="Rp. " data-a-dec="," data-a-sep="." data-v-max="500000">
      </div>
      <div class="col-md-3"></div>
    </div>
    <div class="row" style="text-align: center;">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <h5>Harga biogas saat ini (per m<sup>3</sup>): <b class="hargaTerakhir" data-a-sign="Rp. " data-a-dec="," data-a-sep="."><?php echo $hargaTerakhir ?></b></h5>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
  <div class="box-footer">
    <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-2">
        <button class="form-control btn btn-primary konfirmasiUbahHarga" data-id="<?php echo $userdata->idUser; ?>" data-toggle="modal" data-target="#konfirmasiUbah">Ubah</button>
      </div>
      <div class="col-md-5"></div>
    </div>
  </div>
</div>

<div class="box box-solid">
  <div class="box-header">
    <h3 style="text-align: center;">Riwayat Ubah Harga</h3>
  </div>
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped" style="width:100%">
      <thead>
        <tr>
          <th>#</th>
          <th>Harga</th>
          <th>Diubah tanggal</th>
          <th>Diubah oleh (ID)</th>
        </tr>
      </thead>
      <tbody id="data-harga">

      </tbody>
    </table>
  </div>
</div>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiUbah', 'ubah-harga', 'Apakah anda yakin ingin melanjutkan?', 'Ya'); ?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#idHarga').autoNumeric('init');
        $('.hargaTerakhir').autoNumeric('init');
    });
</script>