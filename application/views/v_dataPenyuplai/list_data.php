<?php 
    foreach ($dataPenyuplai as $penyuplai) {
      ?>
      <tr>
        <td><?php echo $penyuplai->idUser; ?></td>
        <td><?php echo $penyuplai->nik; ?></td>
        <td><?php echo $penyuplai->nama; ?></td>
        <td><?php echo $penyuplai->alamat; ?></td>
        <td><?php echo $penyuplai->jenis_kelamin; ?></td>
        <td><?php echo $penyuplai->email; ?></td>
        <td><?php echo $penyuplai->telepon; ?></td>
        <td class="text-center">
          <button class="btn btn-warning update-dataPenyuplai" style="width: 40px; text-align: center;" data-id="<?php echo $penyuplai->idUser; ?>"><i class="fa fa-edit"></i></button>
          <button class="btn btn-danger konfirmasiHapus-penyuplai" style="width: 40px; text-align: center;" data-id="<?php echo $penyuplai->idUser; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="fa fa-trash-o"></i></button>
        </td>
      </tr>
      <?php
    }
?>