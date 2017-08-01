<div id="page-wrapper">
    <div class="container-fluid">
        <h1><?php echo $title ?></h1>
        <hr>
        <div class="row">
            <div class="col-lg-12">
				<div class="panel panel-default">
				    <div class="panel-heading">
				        
				    </div>
				    <div class="panel-body">
				    	
				    	<center><img height=200px src="<?php echo base_url(); ?>assets/slide/<?php echo $editslide[0]->nm_gbr ?>"></center><br>

				        <form role="form" method="post" id="myform" action="<?php echo base_url(); ?>admin_slide/simpan/<?php echo $editslide[0]->id ?>">
				        	
				        	<div class="col-lg-3">
							    <label>Nama Gambar</label>
						    </div>   	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-image"></span></span>
							        	<input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $editslide[0]->nm_gbr ?>" disabled>
						    	</div>				
						    </div>

						    <div class="col-lg-3">
							    <label>Judul</label>
						    </div>   	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-edit"></span></span>
							        	<input type="text" name="judul" class="form-control" placeholder="Judul" value="<?php echo $editslide[0]->judul ?>">
						    	</div>				
						    </div>

						    <div class="col-lg-3">
							    <label>File Gambar Baru</label>
						    </div>   	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-file-image-o"></span></span>
							        	<input type="file" name="img" class="form-control" placeholder="Pilih Gambar">
						    	</div>				
						    </div>

						     <div class="col-lg-3"></div>
						    <div class="col-lg-9">
							<br>
							<button type="button" class="btn btn-warning" onclick="window.history.go(-1); return false;">Kembali</button>
							<button type="submit" class="confirm btn btn-success" data-confirm="Apakah anda yakin untuk merubah data ini?">Update Data</button>
							</div>
						    </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
