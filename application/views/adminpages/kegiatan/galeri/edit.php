<div id="page-wrapper">
    <div class="container-fluid">
        <h1><?php echo $title ?></h1>
        <hr>
        <div class="row">
            <div class="col-lg-12">
				<div class="panel panel-default">
				    <div class="panel-heading">
				        Edit Data
				    </div>
				    <?php echo $this->session->flashdata('pesan'); ?>
				    <div class="panel-body">    
				        <form role="form" method="post" id="myform" action="<?php echo base_url(); ?>admin_galeri/act_edit/<?php echo $galeri[0]->id; ?>" enctype="multipart/form-data">
				        	<div class="col-lg-3">
							    <label>Judul</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-sticky-note"></span></span>
							        	<input type="text" name="judul" class="form-control" placeholder="Judul Galeri Kegiatan" required value="<?php echo $galeri[0]->judul; ?>">
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Upload Gambar</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
								<img src="../../assets/galeri/<?php echo $galeri[0]->img; ?>" width="100px;">
									<input id="foto" name="img" class="input-file" type="file">
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Deskripsi</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-file-text">  </span></span>
							    	<textarea class="form-control" name="deskripsi" rows="3" placeholder="Masukkan Deskripsi Galeri" required><?php echo $galeri[0]->deskripsi; ?></textarea>
						    	</div>
						    </div>
						    <div class="col-lg-3"></div>
						    <div class="col-lg-9">
							<button type="button" class="btn btn-warning" onclick="window.history.go(-1); return false;">Kembali</button>
							<button type="submit" class="confirm btn btn-success">Tambah Data</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
