<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <?php if ($userdata->id_ruang == 'RU999') { ?>
    <div class="box-header">
      <div class="col-md-2" style="padding: 0;">
        <button class="form-control btn btn-success" data-toggle="modal" data-target="#tambah-ketersediaanBed"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
      </div>
    </div>
  <?php } ?>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped ketersediaanBed" style="width:100%">
      <thead>
        <tr>
          <th>No</th>
          <th>Update Terakhir</th>
          <th>Kode Ruang</th>
          <th>Nama Ruang</th>
          <th>Kode Kelas</th>
          <th>Nama Kelas</th>
          <th>Kapasitas</th>
          <th>Tersedia</th>
          <th style="width: 100px">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-ketersediaanBed">

      </tbody>
    </table>
  </div>
</div>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataKetersediaanBed', 'Hapus data ruang yang dipilih?', 'Ya, Hapus Data Ini'); ?>

<?php echo $modal_tambah_ketersediaanBed; ?>