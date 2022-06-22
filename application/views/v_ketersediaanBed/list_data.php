<?php
$no = 1;
foreach ($dataKetersedianBed as $ketersediaanBed) {
?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php
        $tgl_update = new DateTime($ketersediaanBed->update_terakhir);
        $tgl_sekarang = new DateTime(date("Y-m-d H:i:s"));
        $selisih = $tgl_sekarang->diff($tgl_update);
        if ($selisih->days >= 1) {
          echo $ketersediaanBed->update_terakhir . '<b style="color: red;"> (Data bed belum update >24 jam)</b>';
        } else {
          echo $ketersediaanBed->update_terakhir;
        }
        ?></td>
    <td><?php echo $ketersediaanBed->id_ruang; ?></td>
    <td><?php echo $ketersediaanBed->nama_ruang;
        if ($ketersediaanBed->keterangan != null || $ketersediaanBed->keterangan != '') {
          echo ' (' . $ketersediaanBed->keterangan . ')';
        } ?></td>
    <td><?php echo $ketersediaanBed->id_kelas; ?></td>
    <td><?php echo $ketersediaanBed->nama_kelas; ?></td>
    <?php if ($userdata->id_akses == 'LV001' || $userdata->id_akses == 'LV002') { ?>
      <td><input type="number" class="number" id="kapasitas" name="kapasitas-<?= $no; ?>" value="<?php echo $ketersediaanBed->kapasitas; ?>" kapasitas="<?php echo $ketersediaanBed->kapasitas; ?>"></td>
    <?php } else { ?>
      <td><input type="hidden" id="kapasitas" name="kapasitas-<?= $no; ?>" value="<?php echo $ketersediaanBed->kapasitas; ?>" kapasitas="<?php echo $ketersediaanBed->kapasitas; ?>"><?php echo $ketersediaanBed->kapasitas; ?></td>
    <?php } ?>
    <?php if ($userdata->id_akses == 'LV001' || $userdata->id_akses == 'LV003') { ?>
      <td><input type="number" class="number" id="tersedia" name="tersedia-<?= $no; ?>" value="<?php echo $ketersediaanBed->tersedia; ?>"></td>
    <?php } else { ?>
      <td><input type="hidden" class="number" id="tersedia" name="tersedia-<?= $no; ?>" value="<?php echo $ketersediaanBed->tersedia; ?>"><?php echo $ketersediaanBed->tersedia; ?></td>
    <?php } ?>
    <?php if ($userdata->id_akses == 'LV001' || $userdata->id_akses == 'LV002' || $userdata->id_akses == 'LV003') { ?>
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
    <?php } ?>
  </tr>
<?php
  $no++;
}
?>

<script type="text/javascript">
  $(function() {
    $(".number").autoNumeric('init', {
      vMin: 0,
      vMax: 999
    });
  });
</script>