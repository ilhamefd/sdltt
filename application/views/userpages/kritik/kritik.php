<div class="konten">
  <div class="container">
  	<div class="container-fluid">
    <div class="row">
    <center><h2>Kritik dan Saran</h2></center>
    <hr>
    <br>
    	<br>
    	<div class="row">
    	 
    	</div>
    	<form class="form-horizontal" action="<?=base_url()?>kritik/ajukan" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="form-group">
					<label class="col-md-4 control-label"></label>
					<div class="col-md-5">
					<center><?=$this->session->flashdata('pesan');?></center>
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
				  	<label class="col-md-4 control-label" for="keterangan">Kritik : </label>  
				  		<div class="col-md-5">
				  			 <textarea class="form-control" id="textarea" name="kritik" required="" placeholder="Masukkan kritik & saran"></textarea>
				  			<!-- <input id="kritik" name="kritik" type="text" placeholder="Masukkan kritik & saran" class="form-control input-md" required=""> -->
				    	</div>
				</div>

				<div class="form-group">
					<label class="col-md-4"> </label>  
					<div class="col-md-5">			
					<div class="g-recaptcha" name="" data-sitekey="6LfD1zEUAAAAADtlHC7aWhH70Vt3vno43_oK_hrh">
					</div>
					</div>
            	</div>

				<div class="form-group">
					<label class="col-md-4 control-label"></label>
					<div class="col-md-5">
						<input type="submit" id="os" class="btn btn-success" value="Kirim"></input>
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