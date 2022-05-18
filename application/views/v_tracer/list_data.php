<?php
$no = 1;
foreach ($dataTracer as $tr) {
?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $tr->id_user; ?></td>
    <td><?php echo $tr->aksi; ?></td>
    <td><?php echo $tr->tanggal; ?></td>
  </tr>
<?php
  $no++;
}
?>