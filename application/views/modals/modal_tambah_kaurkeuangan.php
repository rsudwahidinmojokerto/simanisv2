<!-- configuration address -->
<?php 
  $jalan = array("Mawar", "Dahlia", "Kamboja", "Cempaka"); // daftar dusun
  $RT = 25; // jumlah RT Desa Claket
  $RW = 8; // jumlah RW Desa Claket
  $dusun = array("Claket", "Mligi", "Sembung"); // daftar dusun
?>
<!-- //////// -->
<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="modal-header">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Tambah Data Kepala Urusan Keuangan</h3>
  </div>

  <form id="form-tambah-kaurkeuangan" method="POST">
  <div class="modal-body">
    <div class="input-group form-group">
      <span class="input-group-addon">
        <i class="fa fa-address-card-o"></i>
      </span>
      <input type="text" class="form-control" placeholder="Masukkan NIK" name="nik" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon">
        <i class="fa fa-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Masukkan nama lengkap" name="nama" aria-describedby="sizing-addon2">
    </div>
    <div class="form-inline">
      <div class="input-group form-group">
        <span class="input-group-addon">
          <i class="fa fa-home"></i>
        </span>
        <span class="input-group-addon">Jalan:
        </span>
        <select name="jalan" class="form-control select2" aria-describedby="sizing-addon2" style="width: auto">
          <?php
          for ($i=0; $i < count($jalan); $i++) {
            ?>
            <option value=<?php echo $jalan[$i]; ?>>
              <?php echo $jalan[$i]; ?>
            </option>
            <?php
          }
          ?>
        </select>
        <span class="input-group-addon">RT:
        </span>
        <select name="rt" class="form-control select2" aria-describedby="sizing-addon2" style="width: auto">
          <?php
          for ($i=1; $i <= $RT; $i++) {
            ?>
            <option value=<?php echo $i; ?>>
              <?php echo $i; ?>
            </option>
            <?php
          }
          ?>
        </select>
        <span class="input-group-addon">RW:
        </span>
        <select name="rw" class="form-control select2" aria-describedby="sizing-addon2" style="width: auto">
          <?php
          for ($i=1; $i <= $RW; $i++) {
            ?>
            <option value=<?php echo $i; ?>>
              <?php echo $i; ?>
            </option>
            <?php
          }
          ?>
        </select>
        <span class="input-group-addon">Dusun:
        </span>
        <select name="dusun" class="form-control select2" aria-describedby="sizing-addon2" style="width: auto">
          <?php
          for ($i=0; $i < count($dusun); $i++) {
            ?>
            <option value="<?php echo $dusun[$i]; ?>">
              <?php echo $dusun[$i]; ?>
            </option>
            <?php
          }
          ?>
        </select>
      </div>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon">
        <i class="fa fa-transgender"></i>
      </span>
      <select name="jk" class="form-control select2" aria-describedby="sizing-addon2" style="width: auto">
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i>@</i>
      </span>
      <input type="text" class="form-control" placeholder="Masukkan e-mail" name="email" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-mobile-phone"></i>
      </span>
      <input type="text" class="form-control" placeholder="Masukkan nomor telepon" name="telepon" aria-describedby="sizing-addon2">
    </div>
  </div>
  <div class="modal-footer">
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
      </div>
    </div>
  </div>
  </form>
</div>


<script type="text/javascript">
$(function () {
    $(".select2").select2();
});
</script>