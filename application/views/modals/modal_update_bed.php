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
      <div class="col-md-3"></div>
      <div class="col-md-6" style="display: block; text-align: centerl">
        <input type="hidden" class="form-control" name="id_bed" id="id_bed" aria-describedby="sizing-addon2">
        <div class="form-group">
          <div class="form-check">
            <input type="radio" class="form-check-input" id="pilihKosong" name="pilihStatusBed" checked>
            <label class="form-check-label" for="pilihKosong">Kosong</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="pilihTerisi" name="pilihStatusBed">
            <label class="form-check-label" for="pilihTerisi">Terisi</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="pilihPerbaikan" name="pilihStatusBed">
            <label class="form-check-label" for="pilihPerbaikan">Perbaikan</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="pilihSiapKrs" name="pilihStatusBed">
            <label class="form-check-label" for="pilihSiapKrs">Siap KRS</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="pilihPesan" name="pilihStatusBed">
            <label class="form-check-label" for="pilihPesan">Dipesan</label>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
      <div class="col-md-12">
        <button type="submit" class="form-control btn btn-primary submitTransfer">Submit</button>
      </div>
    </div>
  </form>

  <!-- <form id="form-bayar-transfer" method="POST" enctype="multipart/form-data">
    <input type="hidden" class="form-control" name="idUser" id="idUser" aria-describedby="sizing-addon2">
    <input type="hidden" class="form-control" name="tagihan" id="tagihan" aria-describedby="sizing-addon2">
    <input type="hidden" class="form-control" name="daya" id="daya" aria-describedby="sizing-addon2">
    <div class="input-group form-group">
      <span class="input-group-addon trf">
        No. Rekening
      </span>
      <input type="text" class="form-control" placeholder="Nomor rekening anda" name="norek" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon trf">
        Pemilik Rekening
      </span>
      <input type="text" class="form-control" placeholder="Nama pada rekening" name="namarek" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon trf">
        Jumlah transfer
      </span>
      <input type="text" class="form-control jumlahTransferBukti" placeholder="Jumlah yang di transfer" name="jmltrf" data-a-sign="Rp. " data-a-dec="," data-a-sep="." aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon trf">
        Bukti transfer
      </span>
      <input type="file" class="form-control" name="buktitrf" aria-describedby="sizing-addon2">
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <button type="submit" class="form-control btn btn-primary submitTransfer">Kirim</button>
      </div>
    </div>
  </form> -->
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('.jumlahTransferBukti').autoNumeric('init');
  });
</script>