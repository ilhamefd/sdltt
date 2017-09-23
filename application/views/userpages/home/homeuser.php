<div class="konten">
<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides 400*800px-->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?php echo base_url(); ?>assets/slide/<?php echo $slide[0]->nm_gbr ?>" alt="<?php echo $slide[0]->judul ?>">
          <div class="carousel-caption">
            <h3><?php echo $slide[0]->judul ?></h3>
            <p>isi</p>
          </div>      
        </div>

        <div class="item">
          <img src="<?php echo base_url(); ?>assets/slide/<?php echo $slide[1]->nm_gbr ?>" alt="<?php echo $slide[1]->judul ?>">
          <div class="carousel-caption">
            <h3><?php echo $slide[1]->judul ?></h3>
            <p>Lorem ipsum...</p>
          </div>      
        </div>

        <div class="item">
          <img src="<?php echo base_url(); ?>assets/slide/<?php echo $slide[2]->nm_gbr ?>" alt="<?php echo $slide[2]->judul ?>">
          <div class="carousel-caption">
            <h3><?php echo $slide[2]->judul ?></h3>
            <p>Lorem ipsum...</p>
          </div>      
        </div>

        <div class="item">
          <img src="<?php echo base_url(); ?>assets/slide/<?php echo $slide[3]->nm_gbr ?>" alt="<?php echo $slide[3]->judul ?>">
          <div class="carousel-caption">
            <h3><?php echo $slide[3]->judul ?></h3>
            <p>Lorem ipsum...</p>
          </div>      
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <br>
  </div>
<!--  -->
  <div class="col-sm-4">
          <iframe src="<?=$record[0]->link; ?>" allowfullscreen></iframe>
          <a href="<?php echo site_url('vgaleri/watch/'.$record[0]->id.'') ?>"><h4><?php echo $record[0]->judul?></h4></a>
      </div>

      <div class="col-sm-4">
        <iframe src="<?=$record[1]->link; ?>" allowfullscreen></iframe>
          <a href="<?php echo site_url('vgaleri/watch/'.$record[1]->id.'') ?>"><h4><?php echo $record[1]->judul?></h4></a>
          <div class="pull-left">
            <a href="<?php echo site_url('vgaleri')?>"><button type="button" class="btn btn-success">Video Lainnya...</button></a>
          </div>
      </div>

  </div>
</div>

</div>
</div>
<!-- ukuran gambar 150*80px -->
<div class="container text-center">
<hr>
<hr>    
  <h3>Berita Terbaru</h3>


  <br>
  <div class="row">

     <?php foreach ($berita as $key => $value) { ?>
          <div class="col-sm-3">
              <a href="<?php echo site_url('semua_berita/detail/'.$value->id.'') ?>"><center><img src="<?php echo base_url(); ?>assets/berita/<?php echo $value->gambar?>" class="img-responsive" width="320px" alt="Image"></center>
              <p><?php echo $value->judul?></p></a>
          </div>  
          <?php } ?>
  </div>
  
    <center><a href="<?php echo site_url('Semua_berita/index')?>"><button type="button" class="btn btn-success">Lihat Semua Berita...</button></a></center>
  <br>
</div>

<div class="container text-center">
  <hr>    
  <h3>Informasi</h3>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <iframe src="<?=$video[0]->link; ?>" height="190px" allowfullscreen></iframe>
      <p>Video Profile</p>
    </div>
    <div class="col-sm-4" id="map"> 
      <iframe
  width="auto"
  height="193px"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDrGi9kLBkNu-wd9rLsNDcL-EGcI_jts14&q=Swalayan BUDI 1, Bendorejo,Pogalan,Kabupaten+Trenggalek,Jawa+Timur+66371" height="190px" allowfullscreen>
</iframe>
      <p>Peta Lokasi</p>    
    </div>
    
    <div class="col-sm-4">
      <iframe src="<?=$video[1]->link; ?>" height="190px" allowfullscreen></iframe>
      <p>Live Streaming</p>
    </div>
  </div>
</div>

<div class="container text-center">
  <hr>    
  <h3>Dinas Terkait</h3>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <a href="http://www.jatimprov.go.id/"><center><img src="<?php echo base_url(); ?>img/propinsi.png?>" class="img-responsive" style="width:50%" alt="Image"></center></a>
      <p>Dinas 1</p>
    </div>
    <div class="col-sm-2"> 
      <a href="http://www.jatimprov.go.id/"><center><img src="<?php echo base_url(); ?>img/propinsi.png?>" class="img-responsive" style="width:50%" alt="Image"></center></a>
      <p>Dinas 2</p>    
    </div>
    <div class="col-sm-2"> 
      <a href="http://www.jatimprov.go.id/"><center><img src="<?php echo base_url(); ?>img/propinsi.png?>" class="img-responsive" style="width:50%" alt="Image"></center></a>
      <p>Dinas 3</p>
    </div>
    <div class="col-sm-2"> 
      <a href="http://www.jatimprov.go.id/"><center><img src="<?php echo base_url(); ?>img/propinsi.png?>" class="img-responsive" style="width:50%" alt="Image"></center></a>
      <p>Dinas 4</p>
    </div> 
    <div class="col-sm-2"> 
      <a href="http://www.jatimprov.go.id/"><center><img src="<?php echo base_url(); ?>img/propinsi.png?>" class="img-responsive" style="width:50%" alt="Image"></center></a>
      <p>Dinas 5</p>
    </div>     
    <div class="col-sm-2"> 
      <a href="http://www.jatimprov.go.id/"><center><img src="<?php echo base_url(); ?>img/propinsi.png?>" class="img-responsive" style="width:50%" alt="Image"></center></a>
      <p>Dinas 6</p>
    </div> 
  </div>
</div>