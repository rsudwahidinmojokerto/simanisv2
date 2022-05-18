<!DOCTYPE html>
<html>

<head>
  <title>SIMANIS V2</title>
  <link rel="icon" href="<?php base_url(); ?>assets/icons/lg_btn.png">
  <!-- favicon -->
  <?php echo @$_favicon; ?>

  <!-- meta -->
  <?php echo @$_meta; ?>

  <!-- css -->
  <?php echo @$_css; ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/splide/dist/css/splide.min.css">

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.5.1.min.js"></script> -->

  <script src="<?php echo base_url(); ?>assets/plugins/splide/dist/js/splide.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/splide-autoscroll/dist/js/splide-extension-auto-scroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/countUp.js/countUp.js"></script>
</head>

<body class="hold-transition skin-green sidebar-mini sidebar-collapse fixed">
  <!-- header -->
  <?php echo @$_header; ?>
  <!-- nav -->

  <!-- sidebar -->
  <?php echo @$_sidebar; ?>

  <!-- content -->
  <?php echo @$_content; ?>
  <!-- headerContent -->
  <!-- mainContent -->

  <!-- footer -->
  <?php echo @$_footer; ?>

  <div class="control-sidebar-bg"></div>

  <!-- js -->
  <?php echo @$_js; ?>
</body>

</html>