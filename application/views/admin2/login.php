<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Admin Paneli Giriş Sayfası</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?=base_url()?>/assets2/admin/font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/admin/font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="<?=base_url()?>/assets2/admin/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/admin/css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/admin/css/vendor/bootstrap-float-label.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/admin/css/dore.light.blue.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets2/admin/css/main.css" />
    <style>
        .langBtn{
            z-index: 99;
            position: absolute;
            right: 0;
            margin: 10px;
        }
    </style>
</head>

<body class="background show-spinner">
<div class="fixed-background"></div>
<main>
    <div class="container">
        <div class="row h-100">
            <div class="col-12 col-md-10 mx-auto my-auto">

                <div class="card auth-card">
					
                    <div class="position-relative image-side ">
                        <p class=" text-white h2">Seyfullah Photography Üye Girişi</p><br>
                        <p class="white mb-0">
                            Hoşgeldiniz
                        </p>
                    </div>
					
                        <div class="form-side">
						<?php if ($this->session->flashdata("mesaj"))
					{?>
						<div class="alert alert-primary rounded text-center" role="alert"><?=$this->session->flashdata("mesaj")?></div>
					<?php } ?>
                             <h6 class="mb-4">Kullanıcı Bilgileri</h6><br>
                            <form action="<?=base_url()?>admin2/login/login" method="post">
                                <div class="form-card">
                                    <label class="form-group has-float-label mb-4">
                                        <input class="form-control" name="kullaniciadi" autocomplete="off" required placeholder="Kullanıcı Adı" />
                                        <span>Kullanıcı Adı</span>
                                    </label>

                                    <label class="form-group has-float-label mb-4 flabel">
                                        <input class="form-control" type="password" name="sifre" required placeholder="Şifre" autocomplete="off" />
                                        <span>Şifre</span>
                                    </label>
                                </div>
								
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="btn btn-primary btn-lg btn-shadow" type="submit">Giriş</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="<?=base_url()?>/assets2/admin/js/vendor/jquery-3.3.1.min.js"></script>
<script src="<?=base_url()?>/assets2/admin/js/vendor/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>/assets2/admin/js/vendor/bootstrap-notify.min.js"></script>
<script src="<?=base_url()?>/assets2/admin/js/vendor/jquery.contextMenu.min.js"></script>
<script src="<?=base_url()?>/assets2/admin/js/dore.script.js"></script>
<script src="<?=base_url()?>/assets2/admin/js/scripts.single.theme.js"></script>


<?if($this->session->flashdata('alert')){
    $alert = $this->session->flashdata('alert');?>
    <script>
        $.notify(
            {
                title: "<?=$alert->title?>",
                message: "<?=$alert->text?>",
                target: "_blank"
            },
            {
                element: "body",
                position: null,
                type: "<?=$alert->type?>",
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: false,
                placement: {
                    from: 'top',
                    align: 'right'
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 4000,
                timer: 2000,
                url_target: "_blank",
                mouse_over: null,
                animate: {
                    enter: "animated zoomInDown",
                    exit: "animated zoomOutUp"
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: "class",
                template:
                    '<div data-notify="container" class="col-11 col-sm-3 alert  alert-{0} " role="alert" style="border-radius:10px">' +
                    '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">X</button>' +
                    '<span data-notify="icon"></span> ' +
                    '<span data-notify="title"><strong>{1}</strong></span> ' +
                    '<span data-notify="message">{2}</span>' +
                    '<div class="progress" data-notify="progressbar">' +
                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                    "</div>" +
                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                    "</div>"
            }
        );
    </script>
<?}?>

</body>
</html>