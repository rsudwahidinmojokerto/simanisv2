<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box box-primary">
  <!-- <div class="box-header">
    <div class="col-md-2" style="padding: 0;">
      <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-penyuplai"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>
  </div> -->
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped" style="width:100%">
      <thead>
        <tr>
          <th>ID Pembayaran</th>
          <th>ID Pelanggan</th>
          <th>Besar Penggunaan</th>
          <th>Tanggal</th>
        </tr>
      </thead>
      <tbody id="data-riwayatGuna">

      </tbody>
    </table>
  </div>
</div>

<div id="tempat-modal"></div>