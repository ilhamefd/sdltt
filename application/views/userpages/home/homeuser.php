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

      <!-- Wrapper for slides -->
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
  <div class="col-sm-4">
    <div class="panel panel-info">
      <div class="panel-heading text-center">Kehadiran Perangkat Desa</div>
       <table class="table table-striped">
        <thead>
          <tr>
            <th class="text-center">Jabatan</th>
            <th><center>Status</center></th>
            <th>Update Terbaru</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($hadir as $key => $value) { ?>
          <tr>
            <td class="text-center"><?php echo $value->jabatan ?></td>
            <td class="text-center">
            <?php
            $con = $value->status;
            // echo $con;
            if ($con == '1') {
            echo "<span class='badge-green'>Ada</span>";
            }
            if ($con == '2') {
            echo "<span class='badge-yellow'>Keluar</span>";
            }
            if ($con == '3') {
            echo "<span class='badge-red'>Tidak Masuk</span>";

            }
            ?>
            </td>
            <td><?php echo $value->last_update ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    </div>
  </div>
</div>
<hr>
</div>
</div>

<div class="container text-center">    
  <h3>Berita Terbaru</h3>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Berita 1</p>
    </div>
    <div class="col-sm-3"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Berita 2</p>    
    </div>
    <div class="col-sm-3"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Berita 3</p>    
    </div>
    <div class="col-sm-3"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Berita 4</p>    
    </div>
  </div>
  <hr>
</div>

<div class="container text-center">    
  <h3>Informasi</h3>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <iframe src="http://www.youtube.com/embed/W7qWa52k-nE" height="190px" allowfullscreen></iframe>
      <p>Video Bumper</p>
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
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Tweeter</p>    
    </div>  
    </div>
  </div>
  <hr>
</div>

<div class="container text-center">    
  <h3>Dinas Terkait</h3>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Dinas 1</p>
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Dinas 2</p>    
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Dinas 3</p>
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Dinas 4</p>
    </div> 
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Dinas 5</p>
    </div>     
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Dinas 6</p>
    </div> 
  </div>
</div>