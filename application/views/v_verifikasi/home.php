<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box box-success">
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped" style="width:100%">
      <thead>
        <tr>
          <th>ID Tagihan</th>
          <th>ID Pelanggan</th>
          <th>Nama</th>
          <th>Besar Tagihan</th>
          <th>Metode</th>
          <th style="width: 200px; text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-verifikasi">

      </tbody>
    </table>
  </div>
</div>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiVerifikasi', 'verifikasi-bayar', 'Apakah anda ingin melanjutkan verifikasi?'); ?>