<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tulis Pesan</h3>

  <form id="form-tulis-pesan" method="POST">
    <div class="input-group form-group">
      <span class="input-group-addon" style="min-width: 100px;">Kepada</span>
        <select name="idPenerima" class="form-control select2-tujuan" aria-describedby="sizing-addon2" style="width: 100%">
        <option></option>
          <?php
          foreach ($dataAdmin as $admin) {
            ?>
            <option value="<?php echo $admin->idUser; ?>">
              <?php echo $admin->idUser.' ('.$admin->nama.')'; ?>
            </option>
            <?php
          }
          ?>
          <?php
          foreach ($dataKaurKeuangan as $kaurKeuangan) {
            ?>
            <option value="<?php echo $kaurKeuangan->idUser; ?>">
              <?php echo $kaurKeuangan->idUser.' ('.$kaurKeuangan->nama.')'; ?>
            </option>
            <?php
          }
          ?>
          <?php
          foreach ($dataPenyuplai as $penyuplai) {
            ?>
            <option value="<?php echo $penyuplai->idUser; ?>">
              <?php echo $penyuplai->idUser.' ('.$penyuplai->nama.')'; ?>
            </option>
            <?php
          }
          ?>
          <?php
          foreach ($dataPelanggan as $pelanggan) {
            ?>
            <option value="<?php echo $pelanggan->idUser; ?>">
              <?php echo $pelanggan->idUser.' ('.$pelanggan->nama.')'; ?>
            </option>
            <?php
          }
          ?>
        </select>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" style="min-width: 100px;">Subjek</span>
      <input name="subjek" class="form-control">
    </div>
    <div class="form-group">
        <textarea name="pesan" class="form-control pesan" placeholder="Tulis pesan" style="resize: vertical; height: 120px;"></textarea>
    </div>
    <div class="modal-footer clearfix">
        <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-paper-plane"></i> Kirim</button>
    </div>
  </form>
</div>


<script type="text/javascript">
$(function () {
    $(".select2-tujuan").select2({
      placeholder: 'Pilih tujuan'
    });
    $(".pesan").maxlength({
      max: 250
    });
});
</script>