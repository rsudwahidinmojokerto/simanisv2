<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Ubah Status Bed</h3>
  <!-- <div class="form-msg-warning">
    <p class="box-msg">
    <div class="info-box alert-warning">
      <div class="info-box-icon">
        <i class="fa fa-warning"></i>
      </div>
      <div class="info-box-content" style="font-size:14px; ">Mohon untuk mentransfer uang ke <b>nomor rekening tujuan</b> yang tertera dan pastikan <b>jumlah transfer</b> sesuai dengan tagihan.</div>
    </div>
    </p>
  </div> -->
  <form id="form-status-bed" method="POST">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6" style="display: block; text-align: centerl">
        <input type="hidden" class="form-control" name="idBed" id="idBed" aria-describedby="sizing-addon2" value="<?php echo $dataBed->id_bed; ?>">
        <div class="form-group">
          <div class="form-check">
            <input type="radio" class="form-check-input" id="pilihKosong" name="statusBed" value="kosong" <?php if ($dataBed->status == 'kosong') { ?> checked <?php } ?>>
            <label class="form-check-label" for="pilihKosong">Kosong</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="pilihTerisi" name="statusBed" value="terisi" <?php if ($dataBed->status == 'terisi') { ?> checked <?php } ?>>
            <label class="form-check-label" for="pilihTerisi">Terisi</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="pilihPerbaikan" name="statusBed" value="perbaikan" <?php if ($dataBed->status == 'perbaikan') { ?> checked <?php } ?>>
            <label class="form-check-label" for="pilihPerbaikan">Perbaikan</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="pilihSiapKrs" name="statusBed" value="siapkrs" <?php if ($dataBed->status == 'siapkrs') { ?> checked <?php } ?>>
            <label class="form-check-label" for="pilihSiapKrs">Siap KRS</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="pilihPesan" name="statusBed" value="siapmrs" <?php if ($dataBed->status == 'siapmrs') { ?> checked <?php } ?>>
            <label class="form-check-label" for="pilihPesan">Siap MRS</label>
          </div>
        </div>
      </div>
      <div class="col-sm-3"></div>
      <div class="col-sm-12">
        <button type="submit" class="form-control btn btn-primary submitTransfer">Submit</button>
      </div>
    </div>
  </form>
</div>