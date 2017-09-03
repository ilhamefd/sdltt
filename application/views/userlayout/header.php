  <nav class="navbar navbar-fixed-top">
      <div class="header">
      <div class="logo">
      <br>
        <img src="<?php echo base_url(); ?>img/logo-desa.png" alt="Image">
     
      </div>
      </div>

      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="fcm">Menu</span>                       
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a class="fcm" href="<?php echo site_url('home/index')?>">Beranda</a></li>
              
              <li class="dropdown">
                <a class="dropdown-toggle fcm" data-toggle="dropdown" href="#">Profil Sekolah
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url('struktur_organisasi/index')?>"><div class="fcm">Struktur Organisasi</div></a></li>
                  <li><a href="<?php echo site_url('tenaga/index')?>"><div class="fcm">Tenaga Pendidik</div></a></li>
                  <li><a href="<?php echo site_url('visimisi/index')?>"><div class="fcm">Visi & Misi</div></a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a class="dropdown-toggle fcm" data-toggle="dropdown" href="#">Kegiatan Siswa
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url('galeri/index')?>"><div class="fcm">Galeri</div></a></li>
                  <li><a href="<?php echo site_url('vgaleri/index')?>"><div class="fcm">Video</div></a></li>
                </ul>
              </li>
              <li><a class="fcm" href="<?php echo site_url('statistik/index')?>">Statistik Siswa</a></li>
              <li><a class="fcm" href="<?php echo site_url('kritik/index')?>">Kritik Saran</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="fcm" href="<?php echo site_url('login/index')?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>