        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">Tambah Berita</h1>
                        <center><?=$this->session->flashdata('pesan');?></center>
                        <form action="<?php echo base_url().'admin_berita/action_add';?>" method="post" enctype="multipart/form-data">
                            
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-1 control-label" ">Judul:</label>  
                                    <div class="col-md-6">
                                        <input name="judul" type="text" placeholder="Masukkan Judul Berita" class="form-control input-md">
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-1 control-label">Penulis:</label>  
                                    <div class="col-md-4">
                                        <input name="penulis" type="text" placeholder="Masukkan Nama Penulis" class="form-control input-md">
                                    </div>
                            </div>

                            <div class="form-group">

                               <div class="col-md-12">
                                        <br> 
                                        <textarea class="ckeditor" name="isi" id="ckeditor" value=""></textarea>
                                        <br>

                                        <div class="form-group">
                                            <span class="help-block">Gambar ini akan digunakan sebagai preview berita</span><br>  
                                            <label class="col-md-1 control-label" for="filebutton">Gambar: </label>
                                            <div class="col-md-4">
                                                <input name="img" class="input-file" type="file">
                                            </div>
                                        </div>
                                        
                                        <br><br>
                                        <button type="button" class="btn btn-warning" onclick="window.history.go(-1); return false;">Kembali</button>
                                        <button type="submit" class="btn btn-success btn-xm" value="Simpan">Simpan</button>
                                    </div> 
                            </div>
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
        <!-- /#page-wrapper