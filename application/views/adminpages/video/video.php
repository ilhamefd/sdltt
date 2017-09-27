<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Video</h1>
                        <h4> Masukkan link video yang telah di upload sebagai video profil desa.</h4>
                        <br>
                         <form action="<?php echo base_url().'admin_video/simpan';?>" method="post">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Link Video : </label>  
                                    <div class="col-md-7">
                                        <input name="video" type="text" value="<?=$record[0]->link; ?>" placeholder="Masukkan link Video" class="form-control input-md">
                                        <br>
                                        <input type="submit" class="btn btn-success btn-xm" value="Simpan"></input>
                                    </div> 
                            </div>
                        </form>
                        <br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->