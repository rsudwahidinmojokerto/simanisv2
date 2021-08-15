<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box box-primary">
  <?php if($userdata->idGrup == 'JBT02'){?>
  <div class="box-header">
    <div class="col-md-2" style="padding: 0;">
        <button class="form-control btn btn-danger" data-toggle="modal" data-target="#cetak-rekap"><i class="fa fa-file-pdf-o"></i> Cetak Rekap</button>
    </div>
  </div>
  <?php
    }
  ?>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped" style="width:100%">
      <thead>
        <tr>
          <th>ID Pembayaran</th>
          <th>ID Pelanggan</th>
          <th>Besar Pembayaran</th>
          <th>Tanggal</th>
        </tr>
      </thead>
      <tbody id="data-riwayatBayar">

      </tbody>
    </table>
  </div>
</div>

<div id="tempat-modal"></div>

<?php echo $modal_cetak_rekap; ?>