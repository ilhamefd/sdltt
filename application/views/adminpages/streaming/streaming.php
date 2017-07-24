<!--Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Live Streaming</h1>
                        <h4> Masukkan link streaming untuk melakukan siaran langsung melalui internet.</h4>
                        <br>
                        <form action="<?php echo base_url().'admin_streaming/simpan';?>" method="post">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Link Streaming : </label>  
                                    <div class="col-md-7">
                                        <input name="streaming" type="text" value="<?=$record[0]->link; ?>" placeholder="Masukkan link Streaming" class="form-control input-md">
                                        <br>
                                        <input type="submit" class="btn btn-primary btn-xm" value="Simpan"></input>
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
        <!-- /#page-wrapper