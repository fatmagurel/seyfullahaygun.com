<?php
		$this->load->view('admin2\header');
		$this->load->view('admin2\menu');
?>



<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Hakkımda Fotoğrafı Ayarları</h1>
						<div class="card mb-4">
                        <div class="card-body">
						
                            <h5 class="mb-4">Hakkımda Fotoğrafı Güncelleme Alanı</h5>

                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin2/Hakkimda/resim_kaydet/<?=$id?>">
                        <div class="card-body"> 
								<span>Banner Fotoğrafı</span>
								
							
									<div class="custom-file">
                                        <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                        <input type="file"  class="custom-file-input js-custom-file-input-enabled" id="photo" name="photo"
										data-toggle="custom-file-input">
                                        <span class="custom-file-label" for="image">Fotoğraf</span>
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
                    <div class="separator mb-5"></div>
                </div>
            </div>
        </div>
    </main>
	

<?php
		$this->load->view('admin2\footer');
?>			