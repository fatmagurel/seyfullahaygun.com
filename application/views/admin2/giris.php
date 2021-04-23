
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Yönetim Paneline Hoşgeldin &#128035; &#128512;</h1>
						<div class="card mb-4">
                        <div class="card-body">
						<?php if($this->session->flashdata("mesaj")){?>
            <div class="alert alert-danger rounded text-center" role="alert"><?=$this->session->flashdata("mesaj")?></div>
            <?php }?>
                            <h5 class="mb-4">Kullanıcı Bilgileri Güncelleme Alanı</h5>

                            <form id="exampleFormTopLabels" class="tooltip-right-bottom" novalidate="novalidate" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin2/AdminAna/guncelleLogin/<?=$login[0]->Id?>">
                                <div class="form-group has-float-label">
                                    <input class="form-control" name="kullaniciadi" id="kullaniciadi" value="<?=$login[0]->kullaniciadi?>" required="">
                                    <span>Kullanıcı Adı</span>
                                </div>
                                <div class="form-group has-float-label">
                                    <input class="form-control" type="password" name="sifre" id="sifre" value="<?=$login[0]->sifre?>" required="">
                                    <span>Şifre</span>
                                </div>
                                
                                <button class="btn btn-primary" type="submit">GÜNCELLE</button>
                            </form>
                        </div>
                    </div>
                    <div class="separator mb-5"></div>
                </div>
            </div>
        </div>
    </main>