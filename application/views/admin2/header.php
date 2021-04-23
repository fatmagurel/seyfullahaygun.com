<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>/assets/admin/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?=base_url()?>/assets/admin/img/favicon.png">
    <title>Admin Paneli</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?=base_url()?>/assets2/font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/font/simple-line-icons/css/simple-line-icons.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/dropzone.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">

    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/jquery.contextMenu.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/fullcalendar.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/datatables.responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/select2.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/bootstrap-stars.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/component-custom-switch.min.css" />
	  <link rel="stylesheet" href="<?=base_url()?>/assets2/css/dore.light.blue.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/bootstrap-float-label.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/slim.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/styles.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/vendor/smart_wizard.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/sweetalert2.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets2/css/main.css" />
</head>

<body id="app-container" class="menu-default show-spinner">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>

        </div>


        <a class="navbar-logo" href="<?=base_url()?>admin2/AdminAna">
            <span class="logo d-none d-xs-block"></span>
            <span class="logo-mobile d-block d-xs-none"></span>
        </a>

        <div class="navbar-right">
            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">Seyfullah Aygün Photography</span>
                    <span>
                        <img alt="Profile Picture" src="<?=base_url()?>assets/images/seyfullah.jpg" />
                    </span>
					  
                </button>
				<a type="button" class="btn btn-danger" href="<?=base_url()?>admin/login/login_cik">ÇIKIŞ</a>
            </div>
        </div>
    </nav>