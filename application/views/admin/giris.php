<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
			
			<?php if($this->session->flashdata("mesaj")){?>
            <div class="alert alert-danger rounded text-center" role="alert"><?=$this->session->flashdata("mesaj")?></div>
            <?php }?>
                   <div class="card">
                <div class="card-body">
					<p>Yönetim Paneline Hoşgeldin &#128035; &#128512;</p>
                </div>
				<div class="card mb-4">
					<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/AdminAna/guncelleLogin/<?=$login[0]->Id?>">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title">Kullanıcı Bilgileri</h4>
                  <p class="card-category">Kullanıcı Bilgileri Güncelleme Alanı</p>
                </div>
					    <div class="card-body">
                                <div class="form-group has-float-label">
                                    <input class="form-control" name="kullaniciadi" id="kullaniciadi" value="<?=$login[0]->kullaniciadi?>">
                                    <span>Kullanıcı Adı</span>
                                </div>
								<div class="form-group has-float-label">
                                    <input class="form-control" type="password" name="sifre" id="sifre" value="<?=$login[0]->sifre?>">
                                    <span>Şifre</span>
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