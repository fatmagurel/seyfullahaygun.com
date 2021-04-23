
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Kullanıcı Mesajı Ayarları</h1>
						<div class="card mb-4">
                        <div class="card-body">
						<?php if($this->session->flashdata("mesaj")){?>
            <div class="alert alert-danger rounded text-center" role="alert"><?=$this->session->flashdata("mesaj")?></div>
            <?php }?>
                            <h5 class="mb-4">Kullanıcı Mesajları Görüntüleme Alanı</h5>

                          
                        </div>
                    </div>
                    <div class="separator mb-5"></div>
                </div>
				 <?php
						foreach($veri as $rs)
						{
						?>
						
				
				<div class="col-md-6 col-sm-6 col-lg-4 col-12 mb-4">
                            <div class="card ">
                                <div class="card-body">
                                    <div class="text-center">
                                       <i alt="Profile" class="img-thumbnail border-0 rounded-circle mb-4 list-thumbnail">&#128248;</i>
										<p class="list-item-heading mb-1"><?=$rs->adsoy?></p>
										<p class="list-item-heading mb-1"><?=$rs->numara?></p>
                                        <p class="mb-4 text-muted text-big"><?=$rs->mesaj?></p>
										<p class="mb-4 text-muted text-big"><?=$rs->tarih?></p>
                                        <a href="<?=base_url()?>admin2/IletisimFormu/sil/<?=$rs->Id?>"onclick="return confirm('Silmek istediğinizden emin misiniz?')"
					class="btn btn-sm btn-outline-primary ">SİL</a>
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

