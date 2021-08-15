<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Isi Pesan</h3>

  <div class="input-group form-group">
    <span class="input-group-addon" style="min-width: 100px;">Dari</span>
    <input name="idPenerima" class="form-control" value="<?php echo $dataPesanInbox->idPengirim.' ('.$dataPesanInbox->nama_pengirim.')'; ?>" disabled>
  </div>
  <div class="input-group form-group">
    <span class="input-group-addon" style="min-width: 100px;">Subjek</span>
    <input name="subjek" class="form-control" value="<?php echo $dataPesanInbox->subjek; ?>" disabled>
  </div>
  <div class="form-group">
      <textarea name="pesan" class="form-control pesan" style="resize: vertical; height: 120px;" disabled><?php echo $dataPesanInbox->isi; ?></textarea>
  </div>
</div>