<!-- <div class="col-md-offset-1 col-md-10 col-md-offset-1 well"> -->
<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="modal-header">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Resume Ruang</h3>
  </div>

  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped resumeRuang">
      <thead>
        <tr>
          <th>Nama Kelas</th>
          <th>Tersedia</th>
        </tr>
      </thead>
      <tbody id="data-resumeRuang">
        <?php
        for ($i = 0; $i < $jumlahKelas; $i++) {
        ?>
          <tr>
            <td style="font-size: 20pt;"><?php echo $namaKelas[$i]; ?></td>
            <td style="font-size: 20pt;"><?php echo $tersedia[$i]; ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

<script type="text/javascript">
  $(function() {
    $(".select2").select2();
  });
</script>