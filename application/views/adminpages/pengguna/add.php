<div id="page-wrapper">
    <div class="container-fluid">
        <h1><?php echo $title ?></h1>
        <div class="row">
            <div class="col-lg-12">
				<div class="panel panel-default">
				    <div class="panel-heading">
				        Tambah Data
				    </div>
				    <div class="panel-body">    
				        <form role="form" method="post" id="form_add" action="<?php echo base_url(); ?>jurusan/act_add">
				        	<div class="col-lg-3">
							    <label>Username</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-user"></span></span>
							        	<input type="password" name="name" class="form-control" placeholder="Username">
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Password</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-lock">  </span></span>
							        	<input type="text" name="jumlah" class="form-control" placeholder="Password">
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Jabatan</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-cubes"></span></span>
							    	<select class="form-control" name="jabatan">
							    		<option value="">- Pilih Jabatan -</option>
							    		<option value="kepdes">Kepala Desa</option>
							    		<option value="sekdes">Sekretaris Desa</option>
							    		<option value="bendahara">Bendahara Desa</option>
							    		<option value="kaur1">Kepala Urusan 1</option>
							    		<option value="kaur2">Kepala Urusan 2</option>
							    		<option value="kaur3">Kepala Urusan 3</option>
							    		<option value="kaur4">Kepala Urusan 4</option>
							    	</select>
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Level</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-gears"></span></span>
							    	<select class="form-control" name="level">
							    		<option value="admin">Admin</option>
							    		<option value="user">User</option>
							    	</select>
						    	</div>
						    </div>
						    <div class="col-lg-3"></div>
						    <div class="col-lg-9">
							<button type="button" class="btn btn-warning">Kembali</button>
							<button type="submit" class="btn btn-success">Tambah Data</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
