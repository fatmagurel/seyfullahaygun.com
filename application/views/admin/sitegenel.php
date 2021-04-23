<div class="content">
        <div class="container-fluid">
           <div class="row">
            <div class="col-lg-12 col-md-12">
             <?php if($this->session->flashdata("mesaj")){?>
            <div class="alert alert-danger rounded text-center" role="alert"><?=$this->session->flashdata("mesaj")?></div>
            <?php }?>
              <div class="card">
			 
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Site Genel Ayarları</h4>
                  <p class="card-category">Site Güncelleme Alanı</p>
                </div>
					<div class="card mb-4">
					<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/Sitegenel/guncelle/<?=$site[0]->Id?>">
                    
					    <div class="card-body"> 
							
                                <div class="form-group has-float-label">
                                    <input class="form-control" name="siteBasligi" id="siteBasligi" value="<?=$site[0]->siteBasligi?>" required="">
                                    <span>Site Başlığı</span>
                                </div>
                                <div class="card-body">
								
								<span>Banner Yazısı</span>
								<script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>
								<textarea name="bannerYazisi" id="bannerYazisi" rows="10" cols="80">
									<?=$site[0]->bannerYazisi?>
								</textarea>
								<script>
									// Replace the <textarea id="editor1"> with a CKEditor 4
									// instance, using default configuration.
									CKEDITOR.replace( 'bannerYazisi' );
								</script>
								
                                </div>
								
								<div class="card-body">
								
								<span>Banner Yazısı 2</span>
								<script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>
								<textarea name="bannerYazisi2" id="bannerYazisi2" rows="10" cols="80">
									<?=$site[0]->bannerYazisi2?>
								</textarea>
								<script>
									// Replace the <textarea id="editor1"> with a CKEditor 4
									// instance, using default configuration.
									CKEDITOR.replace( 'bannerYazisi2' );
								</script>
								
                                </div>
								
								<div class="card-body">
								<span>Banner Fotoğrafı</span>
								<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4">
								<div class="card">
									<div class="position-relative">
										<a href=""><img class="card-img-top" src="<?=base_url()?>/uploads/banner/<?=$site[0]->bannerFotografi?>" id="bannerFotografi" name="bannerFotografi" alt="Card image cap"></a>
										<a type="button" href="<?=base_url()?>admin/Sitegenel/resim_yukle/<?=$site[0]->Id?>" class="btn btn-danger badge badge-pill badge-secondary position-absolute badge-top-right">DEĞİŞTİR</a> 
                        
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-10">
												<footer>
													<p class="text-muted text-small mb-0 font-weight-light">Yüklenme Tarihi ve Saati: <?=$site[0]->tarih?></p>
												</footer>
											</div>
										</div>
									</div>
								</div>	
							</div>
							
							</div>
							</div>
							<div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">GÜNCELLE</button>
                         </div>
                        </div>
						</form>
                        </div>
						
                    </div>
                    </div>
                    </div>
        
        </div>
      </div>