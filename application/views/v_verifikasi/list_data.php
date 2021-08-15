<?php 
    foreach ($dataVerifikasi as $verifikasi) {
      ?>
      <tr>
        <td><?php echo $verifikasi->idTagihan; ?></td>
        <td><?php echo $verifikasi->idUser; ?></td>
        <td><?php echo $verifikasi->nama; ?></td>
        <td class="tagihan" data-a-sign="Rp. " data-a-dec="," data-a-sep="."><?php echo $verifikasi->tagihan; ?></td>
        <td><?php echo $verifikasi->metode; ?></td>
        <td class="text-center">
          <?php if($verifikasi->metode == "transfer"){ ?>
            <button class="btn btn-primary bukti-verifikasi" style="width: 100px; text-align: center;" data-id="<?php echo $verifikasi->idTagihan; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="fa fa-info-circle"></i> Bukti</button>
          <?php 
          }
          ?>
          <button class="btn btn-success konfirmasi-verifikasi" style="width: 100px; text-align: center;" data-id="<?php echo $verifikasi->idUser; ?>" data-toggle="modal" data-target="#konfirmasiVerifikasi"><i class="fa fa-check-circle"></i> Verifikasi</button>
        </td>
      </tr>
      <?php
    }
?>

<script type="text/javascript">
    $(document).ready(function(){
        $('.tagihan').autoNumeric('init');
    });
</script>