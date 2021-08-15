<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <!-- <div class="box-header">
    <div class="col-md-2" style="padding: 0;">
      <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-pelanggan"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>
  </div> -->
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped" style="width:100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>NIK</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>E-mail</th>
          <th>Telepon</th>
          <th style="width: 100px">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-admin">

      </tbody>
    </table>
  </div>
</div>

<!-- <?php echo $modal_tambah_pelanggan; ?> -->

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataPelanggan', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>