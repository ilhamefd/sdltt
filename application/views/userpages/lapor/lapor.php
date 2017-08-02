<div class="konten">
  <div class="container">
  	<div class="container-fluid">
    <div class="row">
    <center><h2>Lapor</h2></center>
    <hr>
    <br>
    	<br>
    	<div class="row">
    	 
    	</div>
    	<form class="form-horizontal" action="<?=base_url()?>lapor/laporkan" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="form-group">
					<label class="col-md-4 control-label"></label>
					<div class="col-md-5">
					<center><?=$this->session->flashdata('pesan');?></center>
				</div>
				</div>
				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="nik">NIK : </label>
				  		<div class="col-md-5">
				  			<input id="nik" name="nik" type="text" placeholder="Masukkan NIK" class="form-control input-md" required="">
				 		</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  	<label class="col-md-4 control-label" for="nama">Nama : </label>  
				  		<div class="col-md-5">
				  			<input id="nama" name="nama" type="text" placeholder="Masukkan nama anda" class="form-control input-md" required="">
				      </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  	<label class="col-md-4 control-label" for="alamat">Alamat : </label>  
				  		<div class="col-md-5">
				  			<input id="alamat" name="alamat" type="text" placeholder="Masukkan alamat anda" class="form-control input-md" required="">
				    	</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  	<label class="col-md-4 control-label" for="keterangan">Keterangan : </label>  
				  		<div class="col-md-5">
				  			<input id="keterangan" name="keterangan" type="text" placeholder="Masukkan kronologi kejadian" class="form-control input-md" required="">
				    	</div>
				</div>

				<!-- File Button --> 
				<div class="form-group">
					<label class="col-md-4 control-label" for="foto">Foto : </label>
				  		<div class="col-md-4">
				    		<input id="foto" name="img" class="input-file" type="file">
				  		</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label"></label>
					<div class="col-md-5">
						<input type="submit" id="os" class="btn btn-primary" value="laporkan"></input>
					</div>
				</div>
			</fieldset>
	</form>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>
    </div>
  </div>
</div>