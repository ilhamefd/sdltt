<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tambah Video Kegiatan Siswa</h1>
                         <form class="form-horizontal" action="<?=base_url()?>siswa_kegiatan_video/action_add" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-5">
                            <center><?=$this->session->flashdata('pesan');?></center>
                        </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="nik">Judul Video : </label>
                                <div class="col-md-5">
                                    <input id="judul" name="judul" type="text" placeholder="Masukkan Kode" class="form-control input-md" required="">
                                </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="nama">Link Video : </label>  
                                <div class="col-md-5">
                                    <input id="link" name="link" type="text" placeholder="Masukkan nama anda" class="form-control input-md" required="">
                              </div>
                        </div>

                         <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="nik">Deskripsi Video: </label>
                                <div class="col-md-5">
                                    <textarea rows="10" id="deskripsi" name="deskripsi" type="text" placeholder="Masukkan Deskripsi" class="form-control input-md" required=""></textarea>
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-5">
                                <input type="submit" id="os" class="btn btn-success" value="Tambahkan"></input>
                                <button type="button" class="btn btn-warning" onclick="window.history.go(-1); return false;">Kembali</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
                     
                       
                        <br><br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br><br><br><br><br>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
