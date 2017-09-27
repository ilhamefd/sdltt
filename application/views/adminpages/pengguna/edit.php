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
				        <form role="form" method="post" id="myform" action="<?php echo base_url(); ?>pengguna/act_edit/<?php echo $profil[0]->id ?>">
				        	<div class="col-lg-3">
							    <label>Username</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-user"></span></span>
							        	<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $profil[0]->username ?>">
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Password</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-lock">  </span></span>
							        	<input type="password" name="password" class="form-control" placeholder="Biarkan kosong jika tidak ingin merubah">
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Level</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							    	<span class="input-group-addon"><span class="fa fa-gears"></span></span>
							    	<select class="form-control" name="level">
							    		<option value="<?php echo $profil[0]->level ?>"><?php echo $profil[0]->level ?></option>
							    		<option value="admin">Admin</option>
							    		<option value="siswa">Siswa</option>
							    	</select>
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
