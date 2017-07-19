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
                <a class="dropdown-toggle fcm" data-toggle="dropdown" href="#">Profil Desa
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url('perangkat_desa/index')?>"><div class="fcm">Jajaran Perangkat Desa</div></a></li>
                  <li><a href="<?php echo site_url('sejarah/index')?>"><div class="fcm">Sejarah</div></a></li>
                  <li><a href="<?php echo site_url('visimisi/index')?>"><div class="fcm">Visi & Misi</div></a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a class="dropdown-toggle fcm" data-toggle="dropdown" href="#">Lembaga
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url('bpd/index')?>"><div class="fcm">BPD</div></a></li>
                  <li><a href="<?php echo site_url('lpmd/index')?>"><div class="fcm">LPMD</div></a></li>
                  <li><a href="<?php echo site_url('pkk/index')?>"><div class="fcm">PKK</div></a></li>
                  <li><a href="<?php echo site_url('karangtaruna/index')?>"><div class="fcm">Karangtaruna</div></a></li>
                </ul>
              </li>

               <li class="dropdown">
                <a class="dropdown-toggle fcm" data-toggle="dropdown" href="#">Layanan Masyarakat
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url('pengajuan_surat/index')?>"><div class="fcm">Pengajuan Surat</div></a></li>
                  <li><a href="<?php echo site_url('cekstatus/index')?>"><div class="fcm">Cek Status Pengajuan</div></a></li>
                  <li><a href="<?php echo site_url('bantuan/index')?>"><div class="fcm">Bantuan</div></a></li>
                </ul>
              </li>

              <li><a class="fcm" href="<?php echo site_url('statistik/index')?>">Statistik Penduduk</a></li>
              <li><a class="fcm" href="<?php echo site_url('lapor/index')?>">Lapor</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="fcm" href="<?php echo site_url('login/index')?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>