<style>
.youtube-responsive { position: relative; padding-top: 50%; height: 0; overflow: hidden; }
.youtube-responsive iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
</style>

<div class="konten">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <h3><strong><?php echo $watch[0]->judul ?></strong></h3>
        <div class="youtube-responsive">
          <iframe src="<?=$watch[0]->link; ?>?autoplay=1" allowfullscreen></iframe><br>
        </div>
        
        <br>
        <strong>Deskripsi</strong>
        <hr>
    
        <p align="justify"><?php echo $watch[0]->deskripsi ?></p>
        <br><br>
      </div>
      
      <div class="col-sm-4">
        <h3><strong>Video Terbaru</strong></h3>
        <hr>
          <iframe src="<?=$record[0]->link; ?>" allowfullscreen></iframe>
          <a href="<?php echo site_url('vgaleri/watch/'.$record[0]->id.'') ?>"><h4><?php echo $record[0]->judul?></h4></a>
      </div>

      <div class="col-sm-4">
        <iframe src="<?=$record[1]->link; ?>" allowfullscreen></iframe>
          <a href="<?php echo site_url('vgaleri/watch/'.$record[1]->id.'') ?>"><h4><?php echo $record[1]->judul?></h4></a>
          <div class="pull-right">
            <a href="<?php echo site_url('vgaleri')?>"><strong>Video Lainnya...</strong></a>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>