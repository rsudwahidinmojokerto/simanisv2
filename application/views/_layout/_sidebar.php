<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <?php if ($userdata->id_ruang != '' && $userdata->id_ruang != null) { ?>
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $userdata->nama_ruang; ?></p>
          <!-- Status -->
          <!-- <a><i class="fa fa-circle text-success"></i> Online</a> -->
          <a>ID RUANG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $userdata->id_ruang; ?></a>
          <br>
          <a>KODE RUANG&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $userdata->kode_ruang; ?></a>
        </div>
      </div>
    <?php } else { ?>
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/img/default.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>SEMUA RUANG</p>
          <!-- Status -->
          <!-- <a><i class="fa fa-circle text-success"></i> Online</a> -->
          <a>ID RUANG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;SEMUA RUANG</a>
          <br>
          <a>KODE RUANG&nbsp;&nbsp;&nbsp;:&nbsp;SEMUA RUANG</a>
        </div>
      </div>
    <?php } ?>

    <?php if ($userdata->id_ruang != '' && $userdata->id_ruang != null) { ?>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">DAFTAR MENU</li>
        <!-- Optionally, you can add icons to the links -->

        <li <?php if ($page == 'home') {
              echo 'class="active"';
            } ?>>
          <a href="<?php echo base_url('home'); ?>">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li <?php if ($page == 'ketersediaan_bed') {
              echo 'class="active"';
            } ?>>
          <a href="<?php echo base_url('ketersediaanBed'); ?>">
            <i class="fa fa-bed"></i>
            <span>Manajemen Bed</span>
          </a>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    <?php } ?>
  </section>
  <!-- /.sidebar -->
</aside>

<script type="text/javascript">
  $(function() {
    $('.sidebar').slimScroll();
  });
</script>