<?php
$no = 1;
foreach ($dataUser as $u) {
?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $u->tanggal_buat; ?></td>
    <td><?php echo $u->id_user; ?></td>
    <td><?php echo $u->id_ruang; ?></td>
    <td><?php echo $u->nama_ruang; ?></td>
    <td><?php echo $u->id_akses; ?></td>
    <td><?php echo $u->username; ?></td>
    <td>
      <center>
        <?php if ($userdata->id_akses == 'LV001') { ?>
          <button class="btn btn-success lihat-data" style="width: 40px; text-align: center;" data-id="<?php echo $u->id_user; ?>"><i class="fa fa-search"></i></button>
          <button class="btn btn-warning update-dataKetersediaanBed" style="width: 40px; text-align: center;" data-id="<?php echo $u->id_user; ?>"><i class="fa fa-edit"></i></button>
          <button class="btn btn-danger konfirmasiHapus-ketersediaanBed" style="width: 40px; text-align: center;" data-id="<?php echo $u->id_user; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="fa fa-trash-o"></i></button>
        <?php } ?>
      </center>
    </td>
  </tr>
<?php
  $no++;
}
?>