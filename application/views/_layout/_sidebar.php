<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->nama; ?></p>
        <!-- Status -->
        <!-- <a><i class="fa fa-circle text-success"></i> Online</a> -->
        <a>ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $userdata->idUser; ?></a>
        <br>        
        <a>NIK&nbsp;&nbsp;:&nbsp;<?php echo $userdata->nik; ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">DAFTAR MENU</li>
      <!-- Optionally, you can add icons to the links -->

      <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('home'); ?>">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>
      
      <?php if ($userdata->idGrup == "JBT01"){ ?>
      <!-- Data Pengguna -->
      <li <?php if ($page == 'dt_admin' || $page == 'dt_kaurkeuangan' || $page == 'dt_penyuplai' || $page == 'dt_pelanggan') { echo 'class="treeview active"';} ?>>
          <a href="#">
              <i class="fa fa-id-card"></i> <span>Data Pengguna</span><i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
              <li <?php if ($page == 'dt_admin') {echo 'class="active"';} ?>><a href="<?php echo base_url('c_dtadmin') ?>"><i class="fa fa-angle-double-right"></i> Data Admin</a></li>
              <li <?php if ($page == 'dt_kaurkeuangan') {echo 'class="active"';} ?>><a href="<?php echo base_url('c_dtkaurkeuangan') ?>"><i class="fa fa-angle-double-right"></i> Data Kepala Urusan Keuangan</a></li>
              <li <?php if ($page == 'dt_penyuplai') {echo 'class="active"';} ?>><a href="<?php echo base_url('c_dtpenyuplai') ?>"><i class="fa fa-angle-double-right"></i> Data Penyuplai</a></li>
              <li <?php if ($page == 'dt_pelanggan') {echo 'class="active"';} ?>><a href="<?php echo base_url('c_dtpelanggan') ?>"><i class="fa fa-angle-double-right"></i> Data Pelanggan</a></li>
          </ul>
      </li>
      <?php 
      }
      ?>

      <?php if ($userdata->idGrup == "JBT02" || $userdata->idGrup == "JBT03"){ ?>
      <!-- Verifikasi Pembayaran -->
      <li <?php if ($page == 'dt_pelanggan') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('c_dtpelanggan'); ?>">
          <i class="fa fa-users"></i>
          <span>Data pelanggan</span>
        </a>
      </li>
      <?php
      }
      ?>

      <?php 
      if($userdata->status == "terbuka"){
        if ($userdata->idGrup == "JBT04" || $userdata->idGrup == "JBT01"){ ?>
        <!-- Pembayaran -->
        <li <?php if ($page == 'bayar_tunai' || $page == 'bayar_transfer') { echo 'class="treeview active"';} ?>>
            <a href="#">
                <i class="fa fa-money"></i> <span>Pembayaran</span><i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li <?php if ($page == 'bayar_tunai') {echo 'class="active"';} ?>><a href="<?php echo base_url('c_bayarTunai') ?>"><i class="fa fa-angle-double-right"></i> Bayar Tunai</a></li>
                <li <?php if ($page == 'bayar_transfer') {echo 'class="active"';} ?>><a href="<?php echo base_url('c_bayarTransfer') ?>"><i class="fa fa-angle-double-right"></i> Bayar Transfer</a></li>
            </ul>
        </li>
      <?php
        }
      }
      ?>

      <?php if ($userdata->idGrup == "JBT01" || $userdata->idGrup == "JBT02"){ ?>
      <!-- Verifikasi Pembayaran -->
      <li <?php if ($page == 'ubah_harga') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('c_ubahHarga'); ?>">
          <i class="fa fa-tag"></i>
          <span>Ubah Harga</span>
        </a>
      </li>
      <?php
      }
      ?>

      <?php if ($userdata->idGrup == "JBT01" || $userdata->idGrup == "JBT02"){ ?>
      <!-- Verifikasi Pembayaran -->
      <li <?php if ($page == 'verifikasi') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('c_verifikasi'); ?>">
          <i class="fa fa-check-square-o"></i>
          <span>Verifikasi Pembayaran</span>
        </a>
      </li>
      <?php
      }
      ?>

      <?php if ($userdata->idGrup == "JBT02" || $userdata->idGrup == "JBT04"){ ?>
      <!-- Riwayat Pembayaran -->
      <li <?php if ($page == 'riwayatBayar') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('c_riwayatBayar'); ?>">
          <i class="fa fa-history"></i>
          <span>Riwayat Pembayaran</span>
        </a>
      </li>
      <?php
      }
      ?>

      <?php if ($userdata->idGrup == "JBT03" || $userdata->idGrup == "JBT04"){ ?>
      <!-- Riwayat Penggunaan -->
      <li <?php if ($page == 'riwayatGuna') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('c_riwayatGuna'); ?>">
          <i class="fa fa-area-chart"></i>
          <span>Riwayat Penggunaan</span>
        </a>
      </li>
      <?php
      }
      ?>

      <!-- Perpesanan -->
      <li <?php if ($page == 'perpesanan') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('c_perpesanan'); ?>">
          <i class="fa fa-envelope"></i>
          <span>Perpesanan</span>
        </a>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>

<script type="text/javascript">
$(function () {
  $('.sidebar').slimScroll();
});
</script>