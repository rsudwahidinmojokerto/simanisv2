<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="modal-header">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Tambah Data Bed Ruangan</h3>
  </div>

  <form id="form-tambah-kelasRuang" method="POST">
    <div class="modal-body">
      <div class="input-group form-group">
        <span class="input-group-addon">
          <i class="fa fa-hospital-o"></i>
        </span>
        <select name="idRuang" class="form-control select2" aria-describedby="sizing-addon2" style="width: 100%" required>
          <option selected disabled>-- Pilih Ruang --</option>
          <?php
          foreach ($dataRuang as $ruang) {
            if ($ruang->id_ruang != 'RU999' && $ruang->id_ruang != 'RU998') {
          ?>
              <option value="<?php echo $ruang->id_ruang; ?>">
                <?php echo $ruang->id_ruang . ' (' . $ruang->nama_ruang . ')'; ?>
              </option>
          <?php
            }
          }
          ?>
        </select>
      </div>
      <div class="input-group form-group">
        <span class="input-group-addon">
          <i class="fa fa-star"></i>
        </span>
        <select name="idKelas" class="form-control select2" aria-describedby="sizing-addon2" style="width: 100%" required>
          <option selected disabled>-- Pilih Kelas --</option>
          <?php
          foreach ($dataKelas as $kelas) {
          ?>
            <option value="<?php echo $kelas->id_kelas; ?>">
              <?php echo $kelas->id_kelas . ' (' . $kelas->nama_kelas . ')'; ?>
            </option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="input-group form-group">
        <span class="input-group-addon">
          <i class="fa fa-users"></i>
        </span>
        <select name="idKetKelas" class="form-control select2" aria-describedby="sizing-addon2" style="width: 100%">
          <option value="" selected>-- Pilih Keterangan Kelas (Diisi jika diperlukan pembedaan) --</option>
          <?php
          foreach ($dataKeteranganKelas as $ketkelas) {
          ?>
            <option value="<?php echo $ketkelas->id_ket_kelas; ?>">
              <?php echo $ketkelas->id_ket_kelas . ' (' . $ketkelas->keterangan . ')'; ?>
            </option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="input-group form-group">
        <span class="input-group-addon">
          <i class="fa fa-bed"></i>
        </span>
        <input type="text" class="form-control" placeholder="Kapasitas bed" name="kapasitas" aria-describedby="sizing-addon2">
      </div>
      <div class="input-group form-group">
        <span class="input-group-addon">
          <i class="fa fa-check-square-o"></i>
        </span>
        <input type="text" class="form-control" placeholder="Tersedia" name="tersedia" aria-describedby="sizing-addon2">
      </div>
      <div class="modal-footer">
        <div class="form-group">
          <div class="col-md-12">
            <button type="submit" class="form-control btn btn-success"> <i class="glyphicon glyphicon-ok"></i> Tambah Bed</button>
          </div>
        </div>
      </div>
  </form>
</div>

<script type="text/javascript">
  $(function() {
    $(".select2").select2();
  });
</script>