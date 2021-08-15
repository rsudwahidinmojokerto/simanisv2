<?php 
    foreach ($dataHarga as $harga) {
      ?>
      <tr>
        <td><?php echo $harga->idHarga; ?></td>
        <td class="harga" data-a-sign="Rp. " data-a-dec="," data-a-sep="."><?php echo $harga->harga; ?></td>
        <td><?php echo $harga->tanggal; ?></td>
        <td><?php echo $harga->idUser; ?></td>
      </tr>
      <?php
    }
?>

<script type="text/javascript">
    $(document).ready(function(){
        $('.harga').autoNumeric('init');
    });
</script>