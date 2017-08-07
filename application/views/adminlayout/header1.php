<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="menu">Menu</span>
                </button>
                <a class="navbar-brand" href="index.html">Admin SIDESA</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle white" data-toggle="dropdown" href="#">
                        <?php echo $this->session->userdata('username'); ?> <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i> 
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url('login/keluar')?>"><i class="fa fa-sign-out fa-fw "></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a class="white" href="<?php echo site_url('admin_home')?>"><i class="fa fa-dashboard fa-fw fcm"></i> Dashboard</a>
                        </li>
                        
                        <li>
                            <a class="white" href="<?php echo site_url('admin_pengaduan')?>"><i class="fa fa-eye fa-fw fcm"></i> Baca Pengaduan</a>
                        </li>

                        <li>
                            <a class="white" href="#"><i class="fa fa-list  fa-fw fcm"></i> List Pengajuan Surat</a>
                        </li>

                        <li>
                            <a class="white" href="#"><i class="fa fa-cloud-upload fa-fw"></i> Perbarui Konten Beranda<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="white" href="<?php echo site_url('admin_slide')?>"><i class="fa fa-image fa-fw"></i> Slider Gambar</a>
                                </li>
                                <li>
                                    <a class="white" href="<?php echo site_url('admin_berita')?>"><i class="fa fa-newspaper-o fa-fw"></i> Berita</a>
                                </li>
                                <li>
                                    <a class="white" href="<?php echo site_url('admin_video')?>"><i class="fa fa-youtube-play fa-fw"></i> Video</a>
                                </li>
                                <li>
                                    <a class="white" href="<?php echo site_url('admin_streaming')?>"><i class="fa fa-youtube-play fa-fw"></i> Streaming</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a class="white" href="#"><i class="fa fa-cloud-upload fa-fw"></i> Perbarui Konten Umum<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="white" href="#"><i class="fa fa-user fa-fw"></i> Profil Desa <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a class="white" href="<?php echo site_url('admin_jajaran_perangkat')?>">Jajaran Perangkat Desa</a>
                                        </li>
                                        <li>
                                            <a class="white" href="<?php echo site_url('admin_sejarah')?>">Sejarah</a>
                                        </li>
                                        <li>
                                            <a class="white" href="<?php echo site_url('admin_visi_misi')?>">Visi & Misi</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>

                                 <li>
                                    <a class="white" href="#"><i class="fa fa-sitemap fa-fw"></i> Lembaga <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a class="white" href="<?php echo site_url('admin_bpd')?>">BPD</a>
                                        </li>
                                        <li>
                                            <a class="white" href="<?php echo site_url('admin_lpmd')?>">LPMD</a>
                                        </li>
                                        <li>
                                            <a class="white" href="<?php echo site_url('admin_pkk')?>">PKK</a>
                                        </li>
                                        <li>
                                            <a class="white" href="<?php echo site_url('admin_karangtaruna')?>">Karangtaruna</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a class="white" href="<?php echo site_url('admin_bantuan')?>"><i class="fa fa-support fa-fw"></i> Bantuan</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a class="white" href="<?php echo site_url('Admin_Statistik') ?>"><i class="fa fa-pie-chart fa-fw fcm"></i> Perbarui Statistik Penduduk</a>
                        </li>

                        <li>
                            <a class="white" href="<?php echo site_url('pengguna') ?>"><i class="fa fa-users fa-fw fcm"></i> Tambah Pengguna</a>
                        </li>
                       <!--  -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>