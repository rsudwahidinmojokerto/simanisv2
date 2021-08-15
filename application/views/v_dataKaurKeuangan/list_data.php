<?php 
    foreach ($dataKaurKeuangan as $kaurkeuangan) {
      ?>
      <tr>
        <td><?php echo $kaurkeuangan->idUser; ?></td>
        <td><?php echo $kaurkeuangan->nik; ?></td>
        <td><?php echo $kaurkeuangan->nama; ?></td>
        <td><?php echo $kaurkeuangan->alamat; ?></td>
        <td><?php echo $kaurkeuangan->jenis_kelamin; ?></td>
        <td><?php echo $kaurkeuangan->email; ?></td>
        <td><?php echo $kaurkeuangan->telepon; ?></td>
        <td class="text-center">
          <button class="btn btn-warning update-dataKaurKeuangan" style="width: 40px; text-align: center;" data-id="<?php echo $kaurkeuangan->idUser; ?>"><i class="fa fa-edit"></i></button>
          <button class="btn btn-danger konfirmasiHapus-kaurkeuangan" style="width: 40px; text-align: center;" data-id="<?php echo $kaurkeuangan->idUser; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="fa fa-trash-o"></i></button>
        </td>
      </tr>
      <?php
    }
?>