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
				        <form role="form" method="post" id="myform" action="<?php echo base_url(); ?>pengguna/act_add">
				        	<div class="col-lg-3">
							    <label>Username</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-user"></span></span>
							        	<input type="text" name="username" class="form-control" placeholder="Username">
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Password</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-lock">  </span></span>
							        	<input type="password" name="password" class="form-control" placeholder="Password">
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
                            			<?php foreach ($jabatan as $key => $value) { ?>
							    		<option value="<?php echo $value->jabatan ?>"><?php echo $value->jabatan ?></option>
                            			<?php } ?>
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
							    		<option value="">- Pilih Level -</option>
							    		<option value="admin">Admin</option>
							    		<option value="user">User</option>
							    	</select>
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
