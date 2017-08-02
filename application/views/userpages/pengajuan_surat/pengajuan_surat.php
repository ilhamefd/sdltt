<div class="konten">
  <div class="container">
  	<div class="container-fluid">
    <div class="row">
    <center><h2>Pengajuan Surat</h2></center>
    <hr>
    <br>
    	<br>
    	<div class="row">
    	 
    	</div>
    	<form class="form-horizontal" action="<?=base_url()?>pengajuan_surat/ajukan" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="form-group">
					<label class="col-md-4 control-label"></label>
					<div class="col-md-4">
					<center><?=$this->session->flashdata('pesan');?></center>
				</div>
				</div>
				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-5 control-label" for="nik">NIK : </label>
				  		<div class="col-md-3">
				  			<input id="nik" name="nik" type="text" placeholder="Masukkan NIK" class="form-control input-md" required="">
				 		</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  	<label class="col-md-5 control-label" for="nama">Nama : </label>  
				  		<div class="col-md-3">
				  			<input id="nama" name="nama" type="text" placeholder="Masukkan nama anda" class="form-control input-md" required="">
				      </div>
				</div>

				<div class="form-group">
				  	<label class="col-md-5 control-label" for="nama">No. HP : </label>  
				  		<div class="col-md-3">
				  			<input id="nama" name="nohp" type="text" placeholder="Masukkan nomor handphone anda" class="form-control input-md" required="">
				      </div>
				</div>


				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-5 control-label" for="selectbasic">Jenis Surat : </label>
					<div class="col-md-3">
				   		<select id="jenis" name="jenis" class="form-control">
				    		<option value="">--Pilih Jenis Surat--</option>
				    		<?php 
								foreach ($jenis as $key => $value) {
								echo "<option value='".$value->kd_surat."'>".$value->kd_surat." ".$value->nm_surat."</option>";
								}
							?>
				    	</select>
				  	</div>
				</div>

				<!-- Textarea -->
				<div class="form-group">
					<label class="col-md-5 control-label" for="textarea">Keperluan : </label>
						<div class="col-md-3">                     
							<textarea class="form-control" id="keperluan" name="keperluan" placeholder="Masukkan tujuan anda mengajukan surat"></textarea>
				  		</div>
				</div>

				<!-- File Button --> 
				<div class="form-group">
					<label class="col-md-5 control-label" for="foto">Lapiran 1 : </label>
				  		<div class="col-md-4">
				    		<input id="foto" name="img1" class="input-file" type="file">
				  		</div>
				</div>

				<!-- File Button --> 
				<div class="form-group">
					<label class="col-md-5 control-label" for="foto">Lapiran 2 : </label>
				  		<div class="col-md-4">
				    		<input id="foto" name="img2" class="input-file" type="file">
				  		</div>
				</div>

				<!-- File Button --> 
				<div class="form-group">
					<label class="col-md-5 control-label" for="foto">Lapiran 3 : </label>
				  		<div class="col-md-4">
				    		<input id="foto" name="img3" class="input-file" type="file">
				  		</div>
				</div>

				<!-- File Button --> 
				<div class="form-group">
					<label class="col-md-5 control-label" for="foto">Lapiran 4 : </label>
				  		<div class="col-md-4">
				    		<input id="foto" name="img4" class="input-file" type="file">
				  		</div>
				</div>

				<!-- File Button --> 
				<div class="form-group">
					<label class="col-md-5 control-label" for="foto">Lapiran 5 : </label>
				  		<div class="col-md-4">
				    		<input id="foto" name="img5" class="input-file" type="file">
				  		</div>
				</div>

				<!-- File Button --> 
				<div class="form-group">
					<label class="col-md-5 control-label" for="foto">Lapiran 6 : </label>
				  		<div class="col-md-4">
				    		<input id="foto" name="img6" class="input-file" type="file">
				  		</div>
				</div>

				<div class="form-group">
					<label class="col-md-5 control-label"></label>
					<div class="col-md-5">
						<input type="submit" id="os" class="btn btn-primary" value="Ajukan"></input>
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