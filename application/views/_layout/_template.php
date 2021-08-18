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

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
</head>

<body class="hold-transition skin-green sidebar-mini sidebar-collapse fixed">
  <div class="wrapper">
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
  </div>

  <!-- js -->
  <?php echo @$_js; ?>
</body>

</html>