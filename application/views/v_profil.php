<div class="row">
  <div class="col-md-6">
    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body">
        <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" alt="User profile picture">

        <h3 class="profile-username text-center"><?php echo $dataDiri->nama; ?></h3>

        <p class="text-muted text-center"><?php echo $dataDiri->idGrup; ?> - <?php echo $jabatan->jabatan; ?></p>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>ID</b> <a class="pull-right"><?php echo $dataDiri->idUser; ?></a>
          </li>
          <li class="list-group-item">
            <b>NIK</b> <a class="pull-right"><?php echo $dataDiri->nik; ?></a>
          </li>
          <li class="list-group-item">
            <b>Alamat</b> <a class="pull-right"><?php echo $dataDiri->alamat; ?></a>
          </li>
          <li class="list-group-item">
            <b>Email</b> <a class="pull-right"><?php echo $dataDiri->email; ?></a>
          </li>
          <li class="list-group-item">
            <b>Telepon</b> <a class="pull-right"><?php echo $dataDiri->telepon; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#settings" data-toggle="tab">Pengaturan</a></li>
        <li><a href="#password" data-toggle="tab">Ubah Password</a></li>
      </ul>
      <div class="tab-content">
        <div class="active tab-pane" id="settings">
          <form class="form-horizontal" id="form-ubah-profil" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="inputID" class="col-sm-2 control-label">ID</label>
              <div class="col-sm-10">
                <input type="hidden" class="form-control" name="idUser" value="<?php echo $userdata->idUser; ?>">
                <input type="text" class="form-control" name="idUser" placeholder="ID" value="<?php echo $dataDiri->idUser; ?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label for="inputNama" class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-10">
                <?php if($userdata->idGrup != "JBT01"){?><input type="hidden" class="form-control" name="nama" value="<?php echo $userdata->nama; ?>"><?php }?>
                <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $dataDiri->nama; ?>" <?php if($userdata->idGrup != "JBT01"){?> disabled <?php }?>>
              </div>
            </div>
            <div class="form-group">
              <label for="inputFoto" class="col-sm-2 control-label">Foto</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" name="foto" placeholder="Foto">
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
        <div class="tab-pane" id="password">
          <form class="form-horizontal" id="form-ubah-password" method="POST">
            <div class="form-group">
              <label for="passLama" class="col-sm-2 control-label">Password Lama</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" placeholder="Password Lama" name="passLama">
              </div>
            </div>
            <div class="form-group">
              <label for="passBaru" class="col-sm-2 control-label">Password Baru</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" placeholder="Password Baru" name="passBaru">
              </div>
            </div>
            <div class="form-group">
              <label for="passKonf" class="col-sm-2 control-label">Konfirmasi Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" placeholder="Konfirmasi Password" name="passKonf">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="msg" style="display:none;">
      <?php echo $this->session->flashdata('msg'); ?>
    </div>
  </div>
</div>