<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
			<?php if($this->session->flashdata("mesaj")){?>
            <div class="alert alert-danger rounded text-center" role="alert"><?=$this->session->flashdata("mesaj")?></div>
            <?php }?>
              <div class="card">
			  <div class="card-header card-header-primary">
                  <h4 class="card-title">Portfolyo Ayarları</h4>
                  <p class="card-category">Portfolyo Güncelleme Alanı</p>
                </div>
				<div class="col-lg-12 col-md-12 top-right-button-container">
                    <a type="button" href="<?=base_url()?>admin/Portfolyo/resim_yukle/" class="btn btn-primary btn-lg top-right-button mr-1">EKLE</a>    
                </div>
			</div>
			</div>
				
				<?php
					foreach($port as $load)
					{
				?>
				
		  <div class="col-4">
                <div class="card-body">
					<div class="">
					
                    <div class="card">
                        <div class="position-relative">
                            <a href=""><img class="card-img-top" src="<?=base_url()?>uploads/<?=$load->photo?>" alt="Card image cap"></a>
							<a type="button" href="<?=base_url()?>admin/portfolyo/sil/<?=$load->Id?>" 
							onclick="return confirm('Silmek istediğinizden emin misiniz?')" class="btn btn-danger badge badge-pill badge-secondary position-absolute badge-top-right">X</a> 
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <footer>
                                        <p class="text-muted text-small mb-0 font-weight-light">Yüklenme Tarihi: <?=$load->tarih?></p>
                                    </footer>
                                </div>
                            </div>
                        </div>
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