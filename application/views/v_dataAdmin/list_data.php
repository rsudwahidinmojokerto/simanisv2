<?php 
    foreach ($dataAdmin as $admin) {
      ?>
      <tr>
        <td><?php echo $admin->idUser; ?></td>
        <td><?php echo $admin->nik; ?></td>
        <td><?php echo $admin->nama; ?></td>
        <td><?php echo $admin->alamat; ?></td>
        <td><?php echo $admin->jenis_kelamin; ?></td>
        <td><?php echo $admin->email; ?></td>
        <td><?php echo $admin->telepon; ?></td>
        <td class="text-center">
          <button class="btn btn-warning update-dataAdmin" style="width: 40px; text-align: center;" data-id="<?php echo $admin->idUser; ?>"><i class="fa fa-edit"></i></button>
        </td>
      </tr>
      <?php
    }
?>