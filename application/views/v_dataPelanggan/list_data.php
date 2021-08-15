<?php 
    foreach ($dataPelanggan as $pelanggan) {
      ?>
      <tr>
        <td><?php echo $pelanggan->idUser; ?></td>
        <td><?php echo $pelanggan->nik; ?></td>
        <td><?php echo $pelanggan->nama; ?></td>
        <td><?php echo $pelanggan->alamat; ?></td>
        <td><?php echo $pelanggan->jenis_kelamin; ?></td>
        <td><?php echo $pelanggan->email; ?></td>
        <td><?php echo $pelanggan->telepon; ?></td>
        <?php if($userdata->idGrup == 'JBT01'){?>
        <td class="text-center">
          <button class="btn btn-warning update-dataPelanggan" style="width: 40px; text-align: center;" data-id="<?php echo $pelanggan->idUser; ?>"><i class="fa fa-edit"></i></button>
          <button class="btn btn-danger konfirmasiHapus-pelanggan" style="width: 40px; text-align: center;" data-id="<?php echo $pelanggan->idUser; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="fa fa-trash-o"></i></button>
        </td>
        <?php }?>
      </tr>
      <?php
    }
?>