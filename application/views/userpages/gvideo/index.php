<div class="konten">
  <div class="container">
    <div class="row">
    <center><h2>Galeri Video</h2></center>
    <hr>
    	   <?php foreach ($record as $key => $value) { ?>
          <div class="col-md-4">
              <iframe src="<?=$value->link; ?>" height="190px" allowfullscreen></iframe><br>
              <h4><?php echo $value->judul?></h4><br>
          </div>  
          <?php } ?>
    </div>
  </div>
</div>