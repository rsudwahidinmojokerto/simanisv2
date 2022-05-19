<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="modal-header">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Update Akses Ruang</h3>
  </div>

  <form id="form-update-aksesRuang" method="POST">
    <input type="hidden" class="form-control idAplicare" aria-describedby="sizing-addon2" value="<?php echo $idKamar; ?>" disabled>
    <div class="modal-body">
      <?php
      foreach ($user as $u) {
      ?>
        <div class="input-group form-group">
          <span class="input-group-addon">
            <input type="checkbox" class="checkboxAksesRuang" value="<?= $u->id_user; ?>" <?php foreach ($idUser as $id) {
                                                                                            $i = 0;
                                                                                            if ($id == $u->id_user) {
                                                                                              echo " checked";
                                                                                              if ($id == "US001") {
                                                                                                echo " disabled";
                                                                                              }
                                                                                            }
                                                                                            $i++;
                                                                                          } ?>>
          </span>
          <input type="text" class="form-control" aria-describedby="sizing-addon2" value="<?php echo '(' . $u->id_user . ' - ' . $u->nama_ruang . ') Username: ' . $u->username; ?>" disabled>
        </div>
      <?php
      }
      ?>
      <div class="modal-footer">
        <div class="form-group">
          <div class="col-md-12">
            <button type="submit" class="form-control btn btn-success"> <i class="glyphicon glyphicon-ok"></i> Simpan</button>
          </div>
        </div>
      </div>
  </form>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-green',
      radioClass: 'iradio_square-green',
      increaseArea: '20%' // optional
    });
  });
</script>