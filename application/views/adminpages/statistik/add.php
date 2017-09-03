<div id="page-wrapper">
    <div class="container-fluid">
        <h1><?php echo $title ?></h1>
        <hr>
        <div class="row">
            <div class="col-lg-12">
				<div class="panel panel-default">
				    <div class="panel-heading">
				        Tambah Data
				    </div>
				    <div class="panel-body">    
				        <form role="form" method="post" id="myform" action="<?php echo base_url(); ?>Admin_Statistik/act_add">
				        	<div class="col-lg-3">
							    <label>Kelas</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-user"></span></span>
							        	<input type="text" name="kelas" class="form-control" placeholder="Kelas">
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Jumlah</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-bar-chart-o">  </span></span>
							        	<input type="text" name="jumlah" class="form-control" placeholder="Pekerjaan">
						    	</div>
						    </div>
						    <div class="col-lg-3"></div>
						    <div class="col-lg-9">
							<button type="button" class="btn btn-warning" onclick="window.history.go(-1); return false;">Kembali</button>
							<button type="submit" class="confirm btn btn-success" data-confirm="Apakah anda yakin untuk menambah data ini?">Tambah Data</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
