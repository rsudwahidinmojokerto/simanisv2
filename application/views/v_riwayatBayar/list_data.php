<?php 
    foreach ($dataRiwayatBayar as $riwayatBayar) {
      ?>
      <tr>
        <td><?php echo $riwayatBayar->idBayar; ?></td>
        <td><?php echo $riwayatBayar->idUser; ?></td>
        <td class="tagihan" data-a-sign="Rp. " data-a-dec="," data-a-sep="."><?php echo $riwayatBayar->jumlah_bayar; ?></td>
        <td><?php echo $riwayatBayar->tanggal; ?></td>
      </tr>
      <?php
    }
?>

<script type="text/javascript">
    $(document).ready(function(){
        $('.tagihan').autoNumeric('init');
    });
</script>