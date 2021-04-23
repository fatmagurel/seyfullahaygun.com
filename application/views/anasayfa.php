
<!doctype html>

<html lang="tr">

  <head>
    <title>&#128248; <?=$veriler[0]->siteBasligi?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="http://fonts.googleapis.com/css?family=Muli:400,700|Hepta+Slab:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/aos.css">
	
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="<?=base_url()?>anasayfa" class="font-weight-bold">MENU</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="<?=base_url()?>anasayfa" class="nav-link">ANASAYFA</a></li>
				  <li><a href="<?=base_url()?>anasayfa/#portfolyo" class="nav-link">PORTFOLYO</a></li>
                  <li><a href="<?=base_url()?>anasayfa/#hakkimda" class="nav-link">HAKKIMDA</a></li>
                  <li><a href="<?=base_url()?>anasayfa/#iletisim" class="nav-link">İLETİŞİM</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>
	  
	  <div class="ftco-blocks-cover-1">
	  <div class="site-section-cover overlay" 
	  style=" background-image: url('<?=base_url()?>uploads/banner/<?=$veriler[0]->bannerFotografi?>')">
     
      <div class="site-section-cover overlay" 
	  style="width: %100; height: %100; background-size: contain; background-image: url('<?=base_url()?>uploads/banner/<?=$veriler[0]->bannerFotografi?>')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <?=$veriler[0]->bannerYazisi?>
			  <h1 class="mb-3 text-primary">DÜĞÜN FOTOĞRAFÇISI</h1>
				<?=$veriler[0]->bannerYazisi2?>
              <p><a href="#iletisim" class="btn btn-primary">BENİMLE İLETİŞİME GEÇ</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
	
	    <div class="site-section" id="portfolyo">
      <div class="container">

        <div class="row mb-5 ">
          <div class="col-md-7 text-center mx-auto">
            <span class="subtitle-39293">İŞLERİM</span>
            <h2 class="serif">PORTFOLYO</h2>
          </div>
        </div>
       
        <div id="posts" class="row no-gutter">
		<?php
			foreach($port as $load)
			{
		?>
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?=base_url()?>uploads/<?=$load->photo?>" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?=base_url()?>uploads/<?=$load->photo?>">
            </a>
          </div>
        <?php 
		}
		?>  
        </div>
      </div>
    </div> <!-- END .site-section -->
    
	   <div class="site-section bg-black about-me" id="hakkimda">
     <div class="container">
       <div class="row align-items-center">
         <div class="col-md-6 mb-5 mb-md-0">
           <img src="<?=base_url()?>uploads/hakkimda/<?=$hakkimda[0]->photo?>" alt="Image" class="img-fluid">
         </div>
         <div class="col-md-5 ml-auto">
           <h3 class="text-white mb-5">HAKKIMDA</h3>
           <blockquote class="quote-29281">
            <?=$hakkimda[0]->hakkimda?>
           </blockquote>

           <div class="social_29128 white mt-5">
            <a href="<?=$hakkimda[0]->facebook?>" target="_blank"><span class="icon-facebook"></span></a>  
            <a href="<?=$hakkimda[0]->instagram?>" target="_blank"><span class="icon-instagram"></span></a>  
            <a href="<?=$hakkimda[0]->twitter?>" target="_blank"><span class="icon-twitter"></span></a>  
           </div>
         </div>
       </div>
     </div>
   </div>
   
	<footer class="site-footer" id="iletisim" >
      <div class="container">
        <div class="row">
		
          <div class="border-top pt-5 col-lg-6 text-center">
            <h5><span class="subtitle-39293">İletişim</span></h5><br>
			<ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="subtitle-39293">Adres: </span>
                  <span><?=$iletisim[0]->adres?></span></li>
                <li class="d-block mb-3"><span class="subtitle-39293">Telefon: </span><span><?=$iletisim[0]->telefon?></span></li>
                <li class="d-block mb-3"><span class="subtitle-39293">Email: </span><span><?=$iletisim[0]->email?></span></li>
				<div class="social_29128 white mt-5">
            <a href="<?=$iletisim[0]->facebook?>" target="_blank" ><span class="icon-facebook"></span></a>  
            <a href="<?=$iletisim[0]->instagram?>" target="_blank"><span class="icon-instagram"></span></a>  
            <a href="<?=$iletisim[0]->twitter?>" target="_blank"><span class="icon-twitter"></span></a>  
           </div>
              </ul>
          </div>
		  
		  <div class="border-top pt-5 col-lg-6 center">
                <h2 class="footer-heading mb-4">İletişim Formu</h2>
                <form class="form-horizontal" method="post" action="<?=base_url()?>Anasayfa/form">
				<ul class="list-unstyled footer-link">
                  <input type="text" name="adsoy" required class="form-control mr-3 d-block mb-3" placeholder="Ad Soyad"/>
                  <input type="text" required onChange="isNumeric(this)" name="numara" maxlength="11" class="form-control mr-3 d-block mb-3" placeholder="İrtibat Numarası"/>
				 
				  <textarea type="text" name="mesaj" required rows="5" class="form-control mr-3 d-block mb-3" placeholder="Bilgi Almak İçin Bize Yazın..."></textarea>
					
					<input type="submit" onClick="iletisim();" value="GÖNDER" class="btn btn-primary">                 
				 </ul>
				  
                </form>
				
              </div>
        </div>
        <div class="row pt-1 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
             &copy;<script>document.write(new Date().getFullYear());</script>
				<a href="http://fatmagurel.com.tr.ht/" target="_blank">Fatma GÜREL</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="<?=base_url()?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery-migrate-3.0.0.js"></script>
    <script src="<?=base_url()?>assets/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.sticky.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.animateNumber.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.fancybox.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.stellar.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.easing.1.3.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap-datepicker.min.js"></script>
    <script src="<?=base_url()?>assets/js/isotope.pkgd.min.js"></script>
    <script src="<?=base_url()?>assets/js/aos.js"></script>
	<script src="<?=base_url()?>assets/admin/js/sweetalert2.min.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script>
	
	function isNumeric(v) {
	var isNum = /^[0-9-'.']*$/;
	if (!isNum.test(v.value)) {
		sweetAlert('Lütfen irtibat numaranızı kontrol ediniz!');
		v.value = v.value.replace(/[^0-9-'.']/g,"");
	}
}
	</script>
	
	<script>
		function iletisim() {
			swal({
			  title: "Teşekkürler. Mesajınız gönderilmiştir. ",
			  text: "En kısa sürede sizinle iletişime geçilecektir.!",
			  icon: "success",
			  button: "TAMAM",
		});
		}
	</script>
  </body>

</html>
