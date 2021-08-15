<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Bukti Transfer <b>#<?php echo $dataBukti->idTagihan; ?></b></h3>

  <div class="input-group form-group">
    <span class="input-group-addon trf">
      No. Rekening   
    </span>
    <input type="text" class="form-control" name="norek" aria-describedby="sizing-addon2"  value="<?php echo $dataBukti->norek; ?>" disabled>
  </div>
  <div class="input-group form-group">
    <span class="input-group-addon trf">
      Atas nama   
    </span>
    <input type="text" class="form-control" name="namarek" aria-describedby="sizing-addon2"  value="<?php echo $dataBukti->namarek; ?>"  disabled>
  </div>
  <div class="input-group form-group">
    <span class="input-group-addon trf">
      Jumlah transfer   
    </span>
    <input type="text" class="form-control jumlahTransfer" name="jmltrf" aria-describedby="sizing-addon2" data-a-sign="Rp. " data-a-dec="," data-a-sep="." value="<?php echo $dataBukti->jumlah_transfer; ?>" disabled>
  </div>
  <div class="input-group form-group">
    <span class="input-group-addon trf">
      Bukti transfer   
    </span>
    <button class="form-control btn btn-danger" onclick="downloadBukti('<?php echo $dataBukti->bukti; ?>');"><i class="glyphicon glyphicon-download-alt"></i> Download</button>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.jumlahTransfer').autoNumeric('init');
    });

    function downloadBukti(str) {
      window.location.href = "<?php echo base_url().'c_verifikasi/downloadBukti/'?>" + str;
    }
</script>