
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Home</h1>
                        <div>Selamat datang <b><?php echo $this->session->userdata('username'); ?> </b>
                        </div><br>
                        <?php
                        $konversi = $hadir[0]->status;
                        if ($konversi == '1' ){
                            echo "<div class='alert alert-success' id='notif'>
                                Status Kehadiran Anda adalah <strong>HADIR</strong>
                                </div>";
                        }
                        else if ($konversi == '2' ){
                            echo "<div class='alert alert-warning'>
                                Status Kehadiran Anda adalah <strong>KELUAR</strong>
                                </div>";
                        }
                        else{
                            echo "<div class='alert alert-danger'>
                                Status Kehadiran Anda adalah <strong>TIDAK MASUK</strong>
                                </div>";                            
                        }

                        ?>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Silahkan Update Kehadiran Anda
                            </div>
                            <form method="post" action="Admin_home/update/<?php echo $this->session->userdata('jabatan');?>">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th><center>Masuk</center></th>
                                                <th><center>Keluar</center></th>
                                                <th><center>Tidak masuk</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr align="center">
                                                <td>
                                                   <button type="submit" name="tombol" class="btn btn-success btn-circle btn-xl confirm" value="1"><i class="fa fa-check"></i></button>
                                                </td>
                                                <td>
                                                   <button type="submit" name="tombol" class="btn btn-warning btn-circle btn-xl confirm" value="2"><i class="fa fa-check"></i></button>
                                                </td>
                                                <td>
                                                   <button type="submit" name="tombol" class="btn btn-danger btn-circle btn-xl confirm" value="3"><i class="fa fa-check"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
