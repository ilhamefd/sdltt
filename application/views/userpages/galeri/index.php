    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url(); ?>assets/prettyPhoto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    <div class="konten">
      <div class="container">
        <center><h2>Galeri Kegiatan Siswa</h2></center>
        <hr>
         <?php foreach ($data as $key => $value) { ?>
        <div class="row col-md-3">
            <ul class="gallery clearfix">
              <li class="thumbnail">
              <a href="<?php echo base_url();?>assets/galeri/<?php echo $value->img;?>" rel="prettyPhoto" title="<?php echo $value->deskripsi; ?>">
              <img class="img-thumbnail" src="<?php echo base_url();?>assets/galeri/<?php echo $value->img;?>" height="50px" alt="<?php echo $value->judul; ?>" /></a>
                      <div class="caption">
                  <p><?php echo $value->judul; ?></p>
                  <p><?php echo $value->tanggal; ?></p>
                </div>
              </li>
            </ul>
            </div>
          <?php } ?>

  
      <script type="text/javascript" charset="utf-8">
      $(document).ready(function(){
        $("area[rel^='prettyPhoto']").prettyPhoto();
        
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square'});
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
          });
      </script>
  </div></div>
  <br /><br /><br />
