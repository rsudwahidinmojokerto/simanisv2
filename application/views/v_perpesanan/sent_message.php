<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="mailbox row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="box-header">
                            <!-- <i class="fa fa-inbox"></i>
                            <h3 class="box-title">INBOX</h3> -->
                        </div>
                        <!-- compose message btn -->
                        <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#tulis-pesan"><i class="fa fa-pencil"></i> Tulis pesan</button>
                        <!-- Navigation - folders-->
                        <div style="margin-top: 15px;">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="header">MENU</li>
                                <li><a href="<?php echo base_url('c_perpesanan'); ?>"><i class="fa fa-inbox"></i> Kotak masuk</a></li>
                                <li class="active"><a href="<?php echo base_url('c_perpesanan/sentMessage'); ?>"><i class="fa fa-mail-forward"></i> Terkirim</a></li>
                            </ul>
                        </div>
                    </div><!-- /.col (LEFT) -->
                    <div class="col-md-9 col-sm-8">
                        <div class="row pad">
                            <div class="col-sm-6">
                                <div class="btn-group">
                                  <button class="btn btn-default btn-sm btn-danger konfirmasiHapus-allSent" style="color: #ffffff;" data-id="<?php echo $userdata->idUser; ?>" data-toggle="modal" data-target="#konfirmasiHapusSemua"><i class="fa fa-trash"></i> Hapus semua pesan</button>
                                </div>
                                <div class="btn-group hapus-sebagianInbox" style="display: none;">
                                  <button class="btn btn-default btn-sm btn-danger konfirmasiHapus-someSent" style="color: #ffffff;" data-toggle="modal" data-target="#konfirmasiHapusSebagian"><i class="fa fa-trash"></i> Hapus pesan terpilih</button>
                                </div>
                            </div>
                        </div>

                        <!-- THE MESSAGES -->
                        <div class="box-body">
                        <table id="list-data" class="table table-bordered table-striped" style="width:100%">
                          <thead>
                            <tr>
                              <th style="width: 10px">#</th>
                              <th style="width: 150px">Ke</th>
                              <th>Pesan</th>
                              <th style="width: 80px">Waktu</th>
                              <th style="width: 20px">Aksi</th>
                            </tr>
                          </thead>
                          <tbody id="data-kotakKeluar">

                          </tbody>                                                  
                        </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $modal_tulis_pesan; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-sent', 'Hapus pesan ini?'); ?>
<?php show_my_confirm('konfirmasiHapusSebagian', 'hapus-someSent', 'Anda yakin ingin menghapus pesan yang dipilih?'); ?>
<?php show_my_confirm('konfirmasiHapusSemua', 'hapus-allSent', 'Anda yakin ingin menghapus semua pesan?'); ?>