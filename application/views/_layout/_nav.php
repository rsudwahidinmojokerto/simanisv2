<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages -->
      <li class="dropdown messages-menu">
          <a href="#" class="dropdown-toggle toggle-message" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-warning count-notif"></span>
          </a>
          <ul class="dropdown-menu menu-notif animated-dropdown-menu"></ul>
      </li>
      <!-- User Account Menu -->
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
    </ul>
  </div>
</nav>
<?php if($page == 'home'){ ?>
<nav class="navbar navbar-static-top marquee">
  <div class="text-marquee">Selamat datang <b><?php echo $userdata->nama; ?></b> di portal <b>Sistem Informasi Pembayaran BiogasKu</b>. 
  Bekerja sama dengan Pemerintahan Desa Claket, sistem ini dikembangkan untuk memudahkan pengguna biogas dalam melakukan proses pembayaran. 
  Diharapkan dengan sistem ini, akan meningkatkan minat dan partisipasi masyarakat Desa Claket dalam menggunakan biogas.&nbsp;&nbsp;&nbsp;&nbsp;Bersama BiogasKu bersama membangun negeri. BiogasKu, Biogas kita semua!</div>
</nav>
<?php
}
?>

<script type="text/javascript">
$(function () {
  $('.text-marquee').marquee({
      //speed in milliseconds of the marquee
      duration: 15000,
      //gap in pixels between the tickers
      gap: 50,
      //time in milliseconds before the marquee will start animating
      delayBeforeStart: 1000,
      //'left' or 'right'
      direction: 'left',
      //true or false - should the marquee be duplicated to show an effect of continues flow
      duplicated: false
  });
});
</script>