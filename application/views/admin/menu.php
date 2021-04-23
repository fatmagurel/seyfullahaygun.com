<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>/assets/admin/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?=base_url()?>/assets/admin/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Paneli
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?=base_url()?>/assets/admin/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?=base_url()?>/assets/admin/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?=base_url()?>/assets/admin/font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/bootstrap-float-label.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/select2.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/main.css" />
	
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/jquery.contextMenu.min.css" />
	<link rel="stylesheet" href="<?=base_url()?>/assets/admin/font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/font/simple-line-icons/css/simple-line-icons.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/jquery.contextMenu.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/main.css" />
	
	<link rel="stylesheet" href="<?=base_url()?>/assets/admin/font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/quill.snow.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/quill.bubble.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/main.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/admin/css/sweetalert2.min.css" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?=base_url()?>/assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="" class="simple-text logo-normal">
          MENU
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
		<li class="nav-item active  ">
            <a class="nav-link" href="<?=base_url()?>admin/AdminAna">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link" href="<?=base_url()?>admin/Sitegenel">
              <i class="material-icons">&#128736;</i>
              <p>Site Genel Ayarlar</p>
            </a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link" href="<?=base_url()?>admin/Portfolyo">
              <i class="material-icons">&#128248;</i>
              <p>Portfolyo</p>
            </a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link" href="<?=base_url()?>admin/Hakkimda">
              <i class="material-icons">&#128373;</i>
              <p>Hakkımda</p>
            </a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link" href="<?=base_url()?>admin/Iletisim">
              <i class="material-icons">&#128222;</i>
              <p>İletişim</p>
            </a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link" href="<?=base_url()?>admin/IletisimFormu">
              <i class="material-icons">&#128221;</i>
              <p>Kullanıcı Mesajları</p>
            </a>
          </li>
        </ul>
      </div>
    </div>