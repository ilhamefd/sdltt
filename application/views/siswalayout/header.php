<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="menu">Menu</span>
                </button>
                <a class="navbar-brand" href="index.html">Jurnalis SD LTT</a>
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
                            <a class="white" href="<?php echo site_url('siswa_home')?>"><i class="fa fa-dashboard fa-fw fcm"></i> Dashboard</a>
                        </li>
                        
                        <li>
                            <a class="white" href="<?php echo site_url('siswa_galeri')?>"><i class="fa fa-file-image-o fa-fw fcm"></i> Galeri</a>
                        </li>
                        <li>
                            <a class="white" href="<?php echo site_url('siswa_kegiatan_video')?>"><i class="fa fa-film fa-fw fcm"></i> Video</a>
                        </li>
                            <li>
                                <a class="white" href="<?php echo site_url('siswa_bantuan')?>"><i class="fa fa-support fa-fw"></i> Bantuan</a>
                            </li>
                    </ul>
                            <!-- /.nav-second-level -->
                        </li>

                       <!--  -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>