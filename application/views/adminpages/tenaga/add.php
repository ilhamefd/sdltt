<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tambah Data Tenaga Pendidik</h1>
                
                    <form class="form-horizontal" action="<?=base_url()?>admin_tenaga/action_add" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-5">
                            <center><?=$this->session->flashdata('pesan');?></center>
                        </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="nik">Kode : </label>
                                <div class="col-md-5">
                                    <input id="kode" name="kode" type="text" placeholder="Masukkan Kode" class="form-control input-md" required="">
                                </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="nama">Nama : </label>  
                                <div class="col-md-5">
                                    <input id="nama" name="nama" type="text" placeholder="Masukkan nama anda" class="form-control input-md" required="">
                              </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="alamat">Jenis Kelamin : </label>  
                                <div class="col-md-5">
                                    <input id="jk" name="jk" type="text" placeholder="Masukkan Jenis Kelamin" class="form-control input-md" required="">
                                </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="keterangan">Jabatan : </label>  
                                <div class="col-md-5">
                                    <input id="jabatan" name="jabatan" type="text" placeholder="Masukkan Jabatan" class="form-control input-md" required="">
                                </div>
                        </div>

                        <!-- File Button --> 
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="foto">Foto : </label>
                                <div class="col-md-4">
                                    <input id="foto" name="img" class="input-file" type="file">
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-5">
                                <input type="submit" id="os" class="btn btn-primary" value="Tambahkan"></input>
                                <button type="button" class="btn btn-warning" onclick="window.history.go(-1); return false;">Kembali</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div><br>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
