<?php
    foreach ($dataInbox as $inbox) {
      ?>
      <tr>
        <td class="text-center"><input type="checkbox" class="icheckbox" data-id="<?php echo $inbox->idPesan; ?>"></td>
        <td><?php echo $inbox->nama_pengirim; ?></td>
        <td><a href="#" class="lihat-pesanInbox" data-id="<?php echo $inbox->idPesan; ?>"><?php if(strlen($inbox->isi) > 50){ echo substr($inbox->isi, 0, 50)."..."; } else { echo $inbox->isi;} ?></a></td>
        <td><?php echo $inbox->tanggal; ?></td>
        <td class="text-center">
          <button class="btn btn-danger konfirmasiHapus-inbox" style="width: 40px; text-align: center;" data-id="<?php echo $inbox->idPesan; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="fa fa-trash"></i></button>
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