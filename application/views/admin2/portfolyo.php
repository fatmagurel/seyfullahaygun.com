
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Portfolyo Ayarları</h1>
						<div class="card mb-4">
                        <div class="card-body">
						<?php if($this->session->flashdata("mesaj")){?>
            <div class="alert alert-danger rounded text-center" role="alert"><?=$this->session->flashdata("mesaj")?></div>
            <?php }?>
                            <h5 class="mb-4">Portfolyo Güncelleme Alanı</h5>
								<div class="col-lg-12 col-md-12 top-right-button-container">
                    <a type="button" href="<?=base_url()?>admin2/Portfolyo/resim_yukle/" class="btn btn-primary btn-lg top-right-button mr-1">EKLE</a>    
                </div>
                          
                        </div>
                    </div>
                    <div class="separator mb-5"></div>
                </div>
				<?php
					foreach($port as $load)
					{
				?>
				
				
				<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4">
                    <div class="card">
                        <div class="position-relative">
                            <a href=""><img class="card-img-top" src="<?=base_url()?>uploads/<?=$load->photo?>" alt="Card image cap"></a>
                            
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox pl-1">
                                        <label class="custom-control custom-checkbox  mb-0">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <a type="button" href="<?=base_url()?>admin2/portfolyo/sil/<?=$load->Id?>" 
							onclick="return confirm('Silmek istediğinizden emin misiniz?')" class="btn btn-danger badge badge-pill badge-secondary position-absolute badge-top-right">X</a>
                                    <footer>
                                         <p class="text-muted text-small mb-0 font-weight-light">Yüklenme Tarihi: <?=$load->tarih?></p>
                                    </footer>
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
    </main>

