<div id="page-wrapper">
    <div class="container-fluid">
        <h1><?php echo $title ?></h1>
        <hr>
        <div class="row">
            <div class="col-lg-12">
				<div class="panel panel-default">
				    <div class="panel-heading">
				        Detail Data Data
				    </div>
				    <div class="panel-body">    
				        	<div class="col-lg-3">
							    <label>NIK</label>
						    </div>
						    <div class="col-lg-9">
								<div class="form-group input-group">
								<?php echo $detail[0]->nik ?>
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Nama</label>
						    </div>
						    <div class="col-lg-9">
								<div class="form-group input-group">
								<?php echo $detail[0]->nama ?>
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>No HP</label>
						    </div>
						    <div class="col-lg-9">
								<div class="form-group input-group">
								<?php echo $detail[0]->nohp ?>
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Jenis</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
							        	<?php 
							        	$djenis = $detail[0]->jenis;
							        	foreach ($jenis as $key => $value) {
											if ($djenis == $value->kd_surat) {
												echo $value->nm_surat;
							        		}
							        	}
							        	?>
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Keperluan</label>
						    </div>
						    <div class="col-lg-9">
								<div class="form-group input-group">
								<?php echo $detail[0]->keperluan ?>
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Tanggal Pengajuan</label>
						    </div>        	
						    <div class="col-lg-9">
								<div class="form-group input-group">
								<?php echo $detail[0]->tgl ?>
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Lampiran 1</label>
						    </div>
						    <div class="col-lg-9">
								<div class="form-group input-group">
								<img src="<?php echo base_url(); ?>assets/pengajuan/<?php echo $detail[0]->lampiran1 ?>" width="100%">
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Lampiran 2</label>
						    </div>
						    <div class="col-lg-9">
								<div class="form-group input-group">
								<?php
									if ($detail[0]->lampiran2 == $detail[0]->lampiran1) {
										echo "Lampiran tidak ada";
									}
									else{
										echo "<img src='".base_url()."assets/pengajuan/".$detail[0]->lampiran2."' width='100%'>
										";
									}
								?>
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Lampiran 3</label>
						    </div>
						    <div class="col-lg-9">
								<div class="form-group input-group">
								<?php
									if ($detail[0]->lampiran3 == $detail[0]->lampiran2) {
										echo "Lampiran tidak ada";
									}
									else{
										echo "<img src='".base_url()."assets/pengajuan/".$detail[0]->lampiran3."' width='100%'>
										";
									}
								?>
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Lampiran 4</label>
						    </div>
						    <div class="col-lg-9">
								<div class="form-group input-group">
								<?php
									if ($detail[0]->lampiran4 == $detail[0]->lampiran3) {
										echo "Lampiran tidak ada";
									}
									else{
										echo "<img src='".base_url()."assets/pengajuan/".$detail[0]->lampiran4."' width='100%'>
										";
									}
								?>
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Lampiran 5</label>
						    </div>
						    <div class="col-lg-9">
								<div class="form-group input-group">
								<?php
									if ($detail[0]->lampiran5 == $detail[0]->lampiran3) {
										echo "Lampiran tidak ada";
									}
									else{
										echo "<img src='".base_url()."assets/pengajuan/".$detail[0]->lampiran5."' width='100%'>
										";
									}
								?>
						    	</div>
						    </div>
				        	<div class="col-lg-3">
							    <label>Lampiran 6</label>
						    </div>
						    <div class="col-lg-9">
								<div class="form-group input-group">
								<?php
									if ($detail[0]->lampiran6 == $detail[0]->lampiran5) {
										echo "Lampiran tidak ada";
									}
									else{
										echo "<img src='".base_url()."assets/pengajuan/".$detail[0]->lampiran6."' width='100%'>
										";
									}
								?>
						    	</div>
						    </div>
						    <div class="col-lg-3"></div>
						    <div class="col-lg-9">
		                    <form action='<?php echo site_url('admin_pengajuan/baca/'.$detail[0]->id.'') ?>'' method='post'>
							<button type="button" class="btn btn-danger" onclick="window.history.go(-1); return false;">Kembali</button>
		                      <?php
		                        $con = $detail[0]->status;
		                        // echo $con;
		                        if ($con == '1') {
		                            echo "<button type='submit' name='baca' value='2' class='btn btn-primary confirm'><i class='fa fa-pencil-square-o' aria-hidden='true'></i> Tandai Proses</button>"; 
		                        
		                        }
		                        if ($con == '2') {
		                            echo "<button type='submit' name='baca' value='3' class='btn btn-warning confirm'><i class='fa fa-pencil-square-o' aria-hidden='true'></i> Tandai Selesai </button>"; 
		                        
		                        }
		                        if ($con == '3') {
		                         echo "<span class='label label-success'>Sudah Dibaca</span>";
		                        }
		                      ?>
		                    </form>
							</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <script type="text/javascript">
    $(document).on("click",".confirm",function(){
        var id=$(this).attr("data-id");
        var hasil=$(this).attr("value");
        swal({
            title:"Ubah",
            text:"Yakin akan mengubah status data ini?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Ubah",
            closeOnConfirm: true,
        }).then(function(){
             $.ajax({
                url:"admin_pengajuan/baca/",
                type: "POST",
                data:{id:id, hasil:hasil},
                success: function(){
                    swal("Success!","Penghapusan data berhasil","success");
                        setTimeout(function() {
                            window.location.href = "<?php echo site_url('admin_pengajuan'); ?>";
                        }, 1000);
                }
             });
             console.log(hasil);
        });
    });	
</script>
 -->