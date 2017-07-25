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
				    <div class="panel-body">    
				        <form role="form" method="post" id="myform" action="<?php echo base_url(); ?>Admin_Statistik/act_edit/<?php echo $pekerjaan[0]->id ?>">
				        	<div class="col-lg-3">
							    <label>Pekerjaan</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-user"></span></span>
							        	<input type="text" name="pekerjaan" class="form-control" placeholder="Jenis Kelamin" value="<?php echo $pekerjaan[0]->nm_pk ?>" >
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Jumlah</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-bar-chart-o">  </span></span>
							        	<input type="text" name="jumlah" class="form-control" placeholder="Jumlah" value="<?php echo $pekerjaan[0]->jml ?>">
						    	</div>
						    </div>
						    <div class="col-lg-3"></div>
						    <div class="col-lg-9">
							<button type="button" class="btn btn-warning" onclick="window.history.go(-1); return false;">Kembali</button>
							<button type="submit" class="confirm btn btn-success" data-confirm="Apakah anda yakin untuk merubah data ini?">Update Data</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
