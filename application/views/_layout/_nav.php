<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages -->
      <!-- <li class="dropdown messages-menu">
        <a href="#" class="dropdown-toggle toggle-message" data-toggle="dropdown">
          <i class="fa fa-envelope-o"></i>
          <span class="label label-warning count-notif"></span>
        </a>
        <ul class="dropdown-menu menu-notif animated-dropdown-menu"></ul>
      </li> -->
      <!-- User Account Menu -->
      <?php if ($userdata->id_ruang != '' && $userdata->id_ruang != null) { ?>
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            <!-- <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="user-image" alt="User Image"> -->
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span>Menu Akun&nbsp;&nbsp;<i class="fa fa-sort-desc"></i></span>
            <!-- <span class="hidden-xs"><?php echo $userdata->nama; ?></span> -->
          </a>
          <ul class="dropdown-menu animated-dropdown-menu">
            <!-- The user image in the menu -->
            <!-- <li class="user-header">
            <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">

            <p>
              <?php echo $userdata->nama; ?> - Web Developer
              <small>FILKOM UB x BIOGASKU, <?php echo date("Y"); ?></small>
            </p>
          </li> -->
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="<?php echo base_url('c_profil'); ?>" class="btn btn-default btn-flat"><i class="fa fa-gear"></i> Pengaturan</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo base_url('auth/logout'); ?>" class="btn btn-default btn-flat"><i class="fa fa-power-off"></i> Logout</a>
              </div>
            </li>
          </ul>
        </li>
      <?php } else { ?>
        <li>
          <!-- <a href="#" class="dropdown-toggle toggle-message" data-toggle="dropdown">
            <i class="fa fa-envelope-o"></i>
            <span class="label label-warning count-notif"></span>
          </a>
          <ul class="dropdown-menu menu-notif animated-dropdown-menu"></ul> -->
          <a href="<?php echo base_url('auth/login'); ?>"><i class="fa fa-sign-in"></i> Login</a>
        </li>
      <?php } ?>
    </ul>
  </div>
</nav>
<?php if ($page == 'home' || $page == 'home2') {
  if ($userdata->id_ruang == "") { ?>
    <nav class="navbar navbar-static-top marquee">
      <div class="text-marquee" style="font-size: 14pt;">Selamat datang di portal <b>Sistem Informasi Managemen Akomodasi Pasien Versi 2 (SIMANIS V2) RSUD dr. Wahidin Sudiro Husodo Kota Mojokerto</b>. Berikut merupakan informasi mengenai ketersediaan tempat tidur yang berada di rumah sakit kami. <b>DISCLAIMER: INFORMASI INI TIDAK MENJAMIN KETERSEDIAAN SECARA AKURAT, DIKARENAKAN LAMA PROSES PENANGANAN MASUK RUMAH SAKIT (MRS) DAN KELUAR RUMAH SAKIT (KRS).&nbsp;&nbsp;&nbsp;&nbsp;<b>TETAP PATUHI PROTOKOL KESEHATAN DIMANAPUN ANDA BERADA. KEPUASAN PASIEN TUJUAN KAMI</b>.</div>
    </nav>
<?php
  }
}
?>

<script type="text/javascript">
  $(function() {
    $('.text-marquee').marquee({
      //speed in milliseconds of the marquee
      duration: 35000,
      //gap in pixels between the tickers
      gap: 0,
      //time in milliseconds before the marquee will start animating
      delayBeforeStart: 1000,
      //'left' or 'right'
      direction: 'left',
      //true or false - should the marquee be duplicated to show an effect of continues flow
      duplicated: false
    });
  });
</script>