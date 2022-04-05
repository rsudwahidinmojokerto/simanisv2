<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataMasterUser', 'Hapus data ruang yang dipilih?', 'Ya, Hapus Data Ini'); ?>

<div class="box">
  <?php if ($userdata->id_akses == 'LV001') { ?>
    <div class="box-header">
      <div class="col-md-2" style="padding: 0;">
        <button class="form-control btn btn-success" data-toggle="modal" data-target="#tambah-masterUser"><i class="glyphicon glyphicon-plus-sign"></i> Tambah User</button>
      </div>
    </div>
  <?php } ?>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped masterUser" style="width:100%">
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal Buat</th>
          <th>ID User</th>
          <th>ID Ruang</th>
          <th>Nama Ruang</th>
          <th>ID Akses</th>
          <th>Username</th>
          <th style="width: 100px">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-masterUser">

      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_masterUser; ?>

<div id="tempat-modal"></div>