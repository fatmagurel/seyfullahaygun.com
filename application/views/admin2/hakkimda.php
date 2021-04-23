
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Hakkımda Ayarları</h1>
						<div class="card mb-4">
                        <div class="card-body">
						<?php if($this->session->flashdata("mesaj")){?>
            <div class="alert alert-danger rounded text-center" role="alert"><?=$this->session->flashdata("mesaj")?></div>
            <?php }?>
                            <h5 class="mb-4">Hakkımda Güncelleme Alanı</h5>

                            <div class="card-body">
					<div class="col-12">

                    <div class="card mb-4">
                        <div class="card-body ">
						    <form class="form-horizontal" method="post" action="<?=base_url()?>admin2/Hakkimda/guncelle/<?=$veriler[0]->Id?>">
							<div class="form-group has-float-label">
                                    <input class="form-control" name="facebook" id="facebook" value="<?=$veriler[0]->facebook?>" required="">
                                    <span>Facebook Adresi</span>
                                </div>
								
								<div class="form-group has-float-label">
                                    <input class="form-control" name="instagram" id="instagram" value="<?=$veriler[0]->instagram?>" required="">
                                    <span>Insragram Adresi</span>
                                </div>
								
								<div class="form-group has-float-label">
                                    <input class="form-control" name="twitter" id="twitter" value="<?=$veriler[0]->twitter?>" required="">
                                    <span>Twitter Adresi</span>
                                </div>
							<script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>
								<textarea name="hakkimda" id="hakkimda" rows="10" cols="80">
									<?=$veriler[0]->hakkimda?>
								</textarea>
								<script>
									// Replace the <textarea id="editor1"> with a CKEditor 4
									// instance, using default configuration.
									CKEDITOR.replace( 'hakkimda' );
								</script>
								
								<div class="card-body">
								<span>Hakkımda Fotoğrafı</span>
								<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4">
								<div class="card">
									<div class="position-relative">
										<a href=""><img class="card-img-top" src="<?=base_url()?>/uploads/hakkimda/<?=$veriler[0]->photo?>" id="photo" name="photo" alt="Card image cap"></a>
										<a type="button" href="<?=base_url()?>admin2/Hakkimda/resim_yukle/<?=$veriler[0]->Id?>" class="btn btn-danger badge badge-pill badge-secondary position-absolute badge-top-right">DEĞİŞTİR</a> 
                        
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
                    <div class="separator mb-5"></div>
                </div>
            </div>
        </div>
    </main>

