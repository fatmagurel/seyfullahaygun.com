<div class="content">
    <div class="container-fluid">
        <div class="row">
		<div class="card">
			  <div class="card-header card-header-primary">
                  <h4 class="card-title">Fotoğraf Ayarları</h4>
                  <p class="card-category">Fotoğraf Yükleme Alanı</p>
                </div>
				
			
            <div class="col-lg-12 col-md-12">
              <div class="card">
			  <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/portfolyo/resim_kaydet/">
                    
                <div class="card-body">
					
					    <div class="card-body"> 
								<span>Banner Fotoğrafı</span>
								
							
									<div class="custom-file">
                                        <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                        <input type="file"  class="custom-file-input js-custom-file-input-enabled" 
										id="photo" name="photo">
                                        <span class="custom-file-label" for="image">Fotoğraf</span>
                                    </div>
							</div>
                           
							<div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit"  class="btn btn-primary">EKLE</button>
                         </div>
						 
                        </div>
						
                </div>
				</form>
              </div>
             </div>
        </div>
         </div>   
    </div>
</div>