<?php 
    foreach ($dataRiwayatGuna as $riwayatGuna) {
      ?>
      <tr>
        <td><?php echo $riwayatGuna->idBayar; ?></td>
        <td><?php echo $riwayatGuna->idUser; ?></td>
        <td><?php echo $riwayatGuna->daya; ?> m<sup>3</sup></td>
        <td><?php echo $riwayatGuna->tanggal; ?></td>
      </tr>
      <?php
    }
?>