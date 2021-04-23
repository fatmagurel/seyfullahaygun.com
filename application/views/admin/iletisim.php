<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
			<?php if($this->session->flashdata("mesaj")){?>
            <div class="alert alert-danger rounded text-center" role="alert"><?=$this->session->flashdata("mesaj")?></div>
            <?php }?>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">İletişim Ayarları</h4>
                  <p class="card-category">İletişim Güncelleme Alanı</p>
                </div>
					<div class="card mb-4">
					<form class="form-horizontal" method="post" action="<?=base_url()?>admin/Iletisim/guncelle/<?=$veriler[0]->Id?>">
                    
                        <div class="card-body">

                            
                                <div class="form-group has-float-label">
                                    <input class="form-control" name="adres" value="<?=$veriler[0]->adres?>" required="">
                                    <span>Adres</span>
                                </div>
                                <div class="form-group has-float-label">
                                    <input class="form-control" type="text" name="telefon" value="<?=$veriler[0]->telefon?>" required="">
                                    <span>Telefon</span>
                                </div>
                                <div class="form-group has-float-label">
                                    <input class="form-control datepicker" required="" value="<?=$veriler[0]->email?>" name="email">
                                    <span>Email</span>
                                </div>
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
                                <button class="btn btn-primary" type="submit">GÜNCELLE</button>
                            
                        </div>
						</form>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>