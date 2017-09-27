<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Update Konten Sejarah</h1>
                        
                        <form action="<?php echo base_url().'admin_sejarah/simpan';?>" method="post">
                            <div class="form-group">
                               <!--  <label class="col-md-2 control-label" for="textinput">Konten : </label>   -->
                                    <div class="col-md-12">
                                      <!--   <input name="isi" type="text" value="<?=$record[0]->isi; ?>" placeholder="Masukkan isi" class="form-control input-md"> -->
                                        <textarea class="ckeditor" name="isi" id="ckeditor" value=""><?=$record[0]->isi; ?></textarea>
                                        <br>
                                        <input type="submit" class="btn btn-success btn-xm" value="Simpan"></input>
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
        <!-- /#page-wrapper -->