<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
			<?php if($this->session->flashdata("mesaj")){?>
            <div class="alert alert-danger rounded text-center" role="alert"><?=$this->session->flashdata("mesaj")?></div>
            <?php }?>
              <div class="card">
			  <div class="card-header card-header-primary">
                  <h4 class="card-title">Kullanıcı Mesajı Ayarları</h4>
                  <p class="card-category">Kullanıcı Mesajları Görüntüleme Alanı</p>
                </div>
			</div>
			</div>
				<?php
						foreach($veri as $rs)
						{
						?>
						
						 <div class="col-4">
						 
                <div class="card-body card card-profile">
				
					<div class="">
					   
                    <div class="card">
					
                        <div class="position-relative">
                            <div class="card-avatar">
							  <a href="javascript:;">
								 <i class="material-icons">&#128248;</i>
							  </a>
							  
							</div>
							
							 </div>
                        <div class="card-body">
                            <h6 class="card-category text-gray">Kullanıcı Mesajı</h6>
							  <h4 class="card-title"><?=$rs->adsoy?></h4>
							  <h5 class="card-title"><?=$rs->numara?></h5>
							  <p class="card-description">
								<?=$rs->mesaj?>
							  </p>
							  <p class="card-description">
								<?=$rs->tarih?>
							  </p>
							  
                        </div>
					<a href="<?=base_url()?>admin/IletisimFormu/sil/<?=$rs->Id?>"onclick="return confirm('Silmek istediğinizden emin misiniz?')"
					class="btn btn-danger badge badge-pill badge-secondary position-absolute badge-top-right">SİL</a>
                    </div>
					
                </div>
                </div>
                </div>
					<?php 
						}
						?>
						
                
        </div>
    </div>
</div>