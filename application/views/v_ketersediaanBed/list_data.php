<?php
$no = 1;
foreach ($dataKetersedianBed as $ketersediaanBed) {
?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $ketersediaanBed->update_terakhir; ?></td>
    <td><?php echo $ketersediaanBed->id_ruang; ?></td>
    <td><?php echo $ketersediaanBed->nama_ruang; ?></td>
    <td><?php echo $ketersediaanBed->id_kelas; ?></td>
    <td><?php echo $ketersediaanBed->nama_kelas; ?></td>
    <?php if ($userdata->id_ruang == 'RU999') { ?>
      <td><input type="text" id="kapasitas" name="kapasitas-<?= $no; ?>" value="<?php echo $ketersediaanBed->kapasitas; ?>" kapasitas="<?php echo $ketersediaanBed->kapasitas; ?>"></td>
    <?php } else { ?>
      <td><input type="hidden" id="kapasitas" name="kapasitas-<?= $no; ?>" value="<?php echo $ketersediaanBed->kapasitas; ?>" kapasitas="<?php echo $ketersediaanBed->kapasitas; ?>"><?php echo $ketersediaanBed->kapasitas; ?></td>
    <?php } ?>
    <td><input type="text" id="tersedia" name="tersedia-<?= $no; ?>" value="<?php echo $ketersediaanBed->tersedia; ?>"></td>
    <td class="text-center">
      <button class="btn btn-success update-dataKetersediaanBed" data-id="<?php echo $ketersediaanBed->id_ruang . "_" . $ketersediaanBed->id_kelas; ?>"><i class="fa fa-send-o"></i> Update</button>
      <?php if ($userdata->id_ruang == 'RU999') { ?>
        <!-- <button class="btn btn-warning update-dataKetersediaanBed" style="width: 40px; text-align: center;" data-id="<?php echo $ketersediaanBed->id_ruang; ?>"><i class="fa fa-edit"></i></button> -->
        <button class="btn btn-danger konfirmasiHapus-ketersediaanBed" style="width: 40px; text-align: center;" data-id="<?php echo $ketersediaanBed->id_ruang . "_" . $ketersediaanBed->id_kelas; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="fa fa-trash-o"></i></button>
      <?php } ?>
    </td>
  </tr>
<?php
  $no++;
}
?>