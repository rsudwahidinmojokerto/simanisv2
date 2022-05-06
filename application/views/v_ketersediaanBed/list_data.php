<?php
$no = 1;
foreach ($dataKetersedianBed as $ketersediaanBed) {
?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $ketersediaanBed->update_terakhir; ?></td>
    <td><?php echo $ketersediaanBed->id_ruang; ?></td>
    <td><?php echo $ketersediaanBed->nama_ruang;
        if ($ketersediaanBed->keterangan != null || $ketersediaanBed->keterangan != '') {
          echo ' (' . $ketersediaanBed->keterangan . ')';
        } ?></td>
    <td><?php echo $ketersediaanBed->id_kelas; ?></td>
    <td><?php echo $ketersediaanBed->nama_kelas; ?></td>
    <?php if ($userdata->id_akses == 'LV001' || $userdata->id_akses == 'LV002') { ?>
      <td><input type="number" id="kapasitas" name="kapasitas-<?= $no; ?>" value="<?php echo $ketersediaanBed->kapasitas; ?>" kapasitas="<?php echo $ketersediaanBed->kapasitas; ?>"></td>
    <?php } else { ?>
      <td><input type="hidden" id="kapasitas" name="kapasitas-<?= $no; ?>" value="<?php echo $ketersediaanBed->kapasitas; ?>" kapasitas="<?php echo $ketersediaanBed->kapasitas; ?>"><?php echo $ketersediaanBed->kapasitas; ?></td>
    <?php } ?>
    <td><input type="number" id="tersedia" name="tersedia-<?= $no; ?>" value="<?php echo $ketersediaanBed->tersedia; ?>"></td>
    <td class="text-center">
      <button class="btn btn-success update-dataKetersediaanBed" data-id="<?php echo $ketersediaanBed->id_ruang . "_" . $ketersediaanBed->id_kelas;
                                                                          if ($ketersediaanBed->id_ket_kelas != null || $ketersediaanBed->id_ket_kelas != '') {
                                                                            echo '_' . $ketersediaanBed->id_ket_kelas;
                                                                          } ?>"><i class="fa fa-send-o"></i> Update</button>
      <?php if ($userdata->id_akses == 'LV001') { ?>
        <button class="btn btn-warning konfigurasi-akses" style="width: 40px; text-align: center;" data-id="<?php echo $ketersediaanBed->id_aplicare; ?>"><i class="fa fa-gears"></i></button>
        <button class="btn btn-danger konfirmasiHapus-ketersediaanBed" style="width: 40px; text-align: center;" data-id="<?php echo $ketersediaanBed->id_ruang . "_" . $ketersediaanBed->id_kelas; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="fa fa-trash-o"></i></button>
      <?php } ?>
    </td>
  </tr>
<?php
  $no++;
}
?>