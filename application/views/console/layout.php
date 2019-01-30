<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?=$title;?></title>
    <!-- Favicon-->
    <link rel="icon" href="../assets/ico.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="../assets/fonts/fonts/fonts.css" rel="stylesheet" type="text/css">
    <link href="../assets/fonts/fonts/fonts2.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="../admin/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <?php
      if(isset($menu)){
        if($menu == "offer" || $menu == "card" || $menu == "member" || $menu == "staff") {
    ?>
    <!-- Colorpicker Css -->
    <link href="../admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="../admin/plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="../admin/plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="../admin/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="../admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="../admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="../admin/plugins/nouislider/nouislider.min.css" rel="stylesheet" />
    <?php } ?>
    <!-- JQuery DataTable Css -->
    <link href="../admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <?php } ?>
    <!-- Morris Chart Css-->
    <link href="../admin/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../admin/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../admin/css/themes/all-themes.css" rel="stylesheet" />

    <!-- Jquery Core Js -->
    <script src="../admin/plugins/jquery/jquery.min.js"></script>
</head>

<body class="theme-black"><!-- 如果要改顏色可重這裡改, theme-black -->

  <?php include 'header.php'; ?>
  <?php include 'menu.php'; ?>
  <?php include $page; ?>

    <!-- Bootstrap Core Js -->
    <script src="../admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <?php
      if(isset($menu)){
    ?>
    <!-- Jquery DataTable Plugin Js -->
    <script src="../admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <script src="../admin/js/pages/tables/jquery-datatable.js"></script>

    <?php if($menu == "offer" || $menu == "card" || $menu == "member" || $menu == "staff"){ ?>
    <!-- Jquery Validation Plugin Css -->
    <script src="../admin/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../admin/plugins/jquery-steps/jquery.steps.js"></script>

    <script src="../admin/js/pages/forms/form-validation.js"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="../admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="../admin/plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="../admin/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="../admin/plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="../admin/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="../admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="../admin/plugins/nouislider/nouislider.js"></script>
    <?php } // $menu == "offer"?>
    <?php } // isset($menu) ?>
    <!-- Waves Effect Plugin Js -->
    <script src="../admin/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="../admin/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="../admin/plugins/raphael/raphael.min.js"></script>
    <script src="../admin/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="../admin/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <?php
      if(isset($menu)){
        if($menu == "index"){
    ?>
    <script src="../admin/plugins/flot-charts/jquery.flot.js"></script>
    <script src="../admin/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="../admin/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="../admin/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="../admin/plugins/flot-charts/jquery.flot.time.js"></script>
    <script src="../admin/js/pages/index.js"></script>

  <?php } // $menu == "index" ?>
  <!-- Sparkline Chart Plugin Js -->
  <script src="../admin/plugins/jquery-sparkline/jquery.sparkline.js"></script>

  <!-- Custom Js -->
  <script src="../admin/js/admin.js"></script>
  <script src="../admin/js/pages/ui/dialogs.js"></script>

  <!-- Sweet Alert Plugin Js -->
  <script src="../admin/plugins/sweetalert/sweetalert.min.js"></script>

  <script src="../admin/js/pages/ui/modals.js"></script>
    <?php if($menu == "offer" || $menu == "card" || $menu == "member" || $menu == "staff"){ ?>

    <script src="../admin/js/pages/forms/advanced-form-elements.js"></script>
    <?php } ?>
  <?php } // isset($menu) ?>

  <!-- Demo Js -->
  <script src="../admin/js/demo.js"></script>
  <script type="text/javascript">
  // 防止重新整理
  $(this).keydown(function(e) {

    if (e.ctrlKey && e.which == 82 || e.which == 116) {
      // 82 = r
      // 116 = F5
      if (e.preventDefault) {
        e.preventDefault();
        if ("<?=$menu;?>" == "offer") {
          document.location.href = "<?=base_url().'console/'.$menu;?>";
        }
      }else {
        return false;
      }
    }
  });
  // menu被點擊字體變紅色
  $(".active .icon-name").css('color', 'red');

  <?php

  if(isset($code)){

    if ($code == 200) {
      ?>
      swal({
        title: '成功!',
        text: "<?=$msg;?>",
        type: 'success'
      }, function (isConfirm) {
        if (isConfirm) {
          document.location.href = "<?=base_url().'console/'.$menu;?>";
        }
      });
      <?php
      }else if($code == 404){
      ?>
      swal({
        title: '有錯誤哦!',
        text: "<?=$msg;?>",
        type: 'error'
      }, function (isConfirm) {
        if (isConfirm) {
          document.location.href = "<?=base_url().'console/'.$menu;?>";
        }
      });
      <?php
    } //404
  } // isset($code)

  ?>

  </script>
</body>

</html>
