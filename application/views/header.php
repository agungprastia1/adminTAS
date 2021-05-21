<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?></title>

  <link rel="icon" type="image/png" href="<?= base_url('asset/login/images/icons/favicon.ico') ?>" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?php echo base_url() . "asset/bootstrap/css/bootstrap.min.css" ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . "asset/dist/css/AdminLTE.min.css" ?>">

  <link rel="stylesheet" href="<?php echo base_url() . "asset/dist/css/skins/_all-skins.min.css" ?>">



  <!--jquery-->
  <script src="<?php echo base_url() . "asset/plugins/jQuery/jQuery-2.1.4.min.js" ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url() . "asset/bootstrap/css/style.css" ?>">
  <link rel="stylesheet" href="<?php echo base_url() . "asset/dist/css/summernote.css" ?>">
  <script src="<?php echo base_url() . "asset/dist/js/summernote.js" ?>"></script>

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo site_url() ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>DM</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Administrator</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="glyphicon glyphicon-menu-hamburger"></span>
        </a>
      </nav>
    </header>