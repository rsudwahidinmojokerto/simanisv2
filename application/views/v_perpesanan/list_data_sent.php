<?php 
    foreach ($dataSent as $sent) {
      ?>
      <tr>
        <td class="text-center"><input type="checkbox" class="icheckbox" data-id="<?php echo $sent->idPesan; ?>"></td>
        <td><?php echo $sent->nama_penerima; ?></td>
        <td><a href="#" class="lihat-pesanSent" data-id="<?php echo $sent->idPesan; ?>"><?php if(strlen($sent->isi) > 50){ echo substr($sent->isi, 0, 50)."..."; } else { echo $sent->isi;} ?></a></td>
        <td><?php echo $sent->tanggal; ?></td>
        <td class="text-center">
          <button class="btn btn-danger konfirmasiHapus-sent" style="width: 40px; text-align: center;" data-id="<?php echo $sent->idPesan; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
      <?php
    }
?>

<script type="text/javascript">
$(function(){
    $(".icheckbox").iCheck({
        checkboxClass: 'icheckbox_flat-blue'
    });

    var boxes = $('.icheckbox').on('ifChanged', function() {
        var flag = boxes.filter(':checked').length > 0;
        $('.hapus-sebagianInbox').toggle(flag);
    });
});
</script>