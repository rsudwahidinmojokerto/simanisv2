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

        <?php if ($userdata->id_ruang == "RU999") { ?>
          <!-- Data Pengguna -->
          <li <?php if ($page == 'dt_admin' || $page == 'dt_kaurkeuangan' || $page == 'dt_penyuplai' || $page == 'dt_pelanggan') {
                echo 'class="treeview active"';
              } ?>>
            <a href="#">
              <i class="fa fa-id-card"></i> <span>Data Pengguna</span><i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li <?php if ($page == 'dt_admin') {
                    echo 'class="active"';
                  } ?>><a href="<?php echo base_url('c_dtadmin') ?>"><i class="fa fa-angle-double-right"></i> Data Admin</a></li>
              <li <?php if ($page == 'dt_kaurkeuangan') {
                    echo 'class="active"';
                  } ?>><a href="<?php echo base_url('c_dtkaurkeuangan') ?>"><i class="fa fa-angle-double-right"></i> Data Kepala Urusan Keuangan</a></li>
              <li <?php if ($page == 'dt_penyuplai') {
                    echo 'class="active"';
                  } ?>><a href="<?php echo base_url('c_dtpenyuplai') ?>"><i class="fa fa-angle-double-right"></i> Data Penyuplai</a></li>
              <li <?php if ($page == 'dt_pelanggan') {
                    echo 'class="active"';
                  } ?>><a href="<?php echo base_url('c_dtpelanggan') ?>"><i class="fa fa-angle-double-right"></i> Data Pelanggan</a></li>
            </ul>
          </li>
        <?php
        }
        ?>

        <?php if ($userdata->id_ruang == "RU999" || $userdata->id_ruang == "JBT03") { ?>
          <!-- Verifikasi Pembayaran -->
          <li <?php if ($page == 'dt_pelanggan') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('c_dtpelanggan'); ?>">
              <i class="fa fa-users"></i>
              <span>Data pelanggan</span>
            </a>
          </li>
        <?php
        }
        ?>

        <?php
        //if ($userdata->status == "terbuka") {
        if ($userdata->id_ruang == "RU999" || $userdata->id_ruang == "RU998") { ?>
          <!-- Pembayaran -->
          <li <?php if ($page == 'bayar_tunai' || $page == 'bayar_transfer') {
                echo 'class="treeview active"';
              } ?>>
            <a href="#">
              <i class="fa fa-money"></i> <span>Pembayaran</span><i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li <?php if ($page == 'bayar_tunai') {
                    echo 'class="active"';
                  } ?>><a href="<?php echo base_url('c_bayarTunai') ?>"><i class="fa fa-angle-double-right"></i> Bayar Tunai</a></li>
              <li <?php if ($page == 'bayar_transfer') {
                    echo 'class="active"';
                  } ?>><a href="<?php echo base_url('c_bayarTransfer') ?>"><i class="fa fa-angle-double-right"></i> Bayar Transfer</a></li>
            </ul>
          </li>
        <?php
        }
        //}
        ?>

        <?php if ($userdata->id_ruang == "RU999" || $userdata->id_ruang == "JBT02") { ?>
          <!-- Verifikasi Pembayaran -->
          <li <?php if ($page == 'ubah_harga') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('c_ubahHarga'); ?>">
              <i class="fa fa-tag"></i>
              <span>Ubah Harga</span>
            </a>
          </li>
        <?php
        }
        ?>

        <?php if ($userdata->id_ruang == "RU999" || $userdata->id_ruang == "JBT02") { ?>
          <!-- Verifikasi Pembayaran -->
          <li <?php if ($page == 'verifikasi') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('c_verifikasi'); ?>">
              <i class="fa fa-check-square-o"></i>
              <span>Verifikasi Pembayaran</span>
            </a>
          </li>
        <?php
        }
        ?>

        <?php if ($userdata->id_ruang == "RU999" || $userdata->id_ruang == "JBT04") { ?>
          <!-- Riwayat Pembayaran -->
          <li <?php if ($page == 'riwayatBayar') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('c_riwayatBayar'); ?>">
              <i class="fa fa-history"></i>
              <span>Riwayat Pembayaran</span>
            </a>
          </li>
        <?php
        }
        ?>

        <?php if ($userdata->id_ruang == "RU999" || $userdata->id_ruang == "JBT04") { ?>
          <!-- Riwayat Penggunaan -->
          <li <?php if ($page == 'riwayatGuna') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('c_riwayatGuna'); ?>">
              <i class="fa fa-area-chart"></i>
              <span>Riwayat Penggunaan</span>
            </a>
          </li>
        <?php
        }
        ?>

        <!-- Perpesanan -->
        <li <?php if ($page == 'perpesanan') {
              echo 'class="active"';
            } ?>>
          <a href="<?php echo base_url('c_perpesanan'); ?>">
            <i class="fa fa-envelope"></i>
            <span>Perpesanan</span>
          </a>
        </li>

        <!-- SIMANIS -->
        <?php if ($userdata->id_ruang == "RU999") { ?>
          <!-- Data Pengguna -->
          <li <?php if ($page == 'data_kelas' || $page == 'data_ruangan' || $page == 'data_bed' || $page == 'data_user') {
                echo 'class="treeview active"';
              } ?>>
            <a href="#">
              <i class="fa fa-archive"></i> <span>Master Data</span><i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li <?php if ($page == 'data_kelas') {
                    echo 'class="active"';
                  } ?>><a href="<?php echo base_url('masterKelas') ?>"><i class="fa fa-angle-double-right"></i> Master Kelas</a></li>
              <li <?php if ($page == 'data_ruangan') {
                    echo 'class="active"';
                  } ?>><a href="<?php echo base_url('masterRuangan') ?>"><i class="fa fa-angle-double-right"></i> Master Ruangan</a></li>
              <li <?php if ($page == 'data_bed') {
                    echo 'class="active"';
                  } ?>><a href="<?php echo base_url('masterBed') ?>"><i class="fa fa-angle-double-right"></i> Master Tempat Tidur</a></li>
              <li <?php if ($page == 'data_user') {
                    echo 'class="active"';
                  } ?>><a href="<?php echo base_url('masterUser') ?>"><i class="fa fa-angle-double-right"></i> Master User</a></li>
            </ul>
          </li>
        <?php
        }
        ?>

        <?php if ($userdata->id_ruang == "RU999") { ?>
          <!-- Verifikasi Pembayaran -->
          <li <?php if ($page == 'verifikasi') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('c_verifikasi'); ?>">
              <i class="fa fa-bed"></i>
              <span>Data Tempat Tidur</span>
            </a>
          </li>
        <?php
        }
        ?>

        <?php if ($userdata->id_ruang == "RU999") { ?>
          <!-- Verifikasi Pembayaran -->
          <li <?php if ($page == 'verifikasi') {
                echo 'class="active"';
              } ?>>
            <a href="<?php echo base_url('c_verifikasi'); ?>">
              <i class="fa fa-check-square-o"></i>
              <span>Laporan</span>
            </a>
          </li>
        <?php
        }
        ?>
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