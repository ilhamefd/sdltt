<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard Galeri</h1>
                        <center><?=$this->session->flashdata('pesan')?></center>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="<?php echo site_url('siswa_galeri/tambah') ?>" class="btn btn-success"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data</a>
                            </div>
                        
                        <form action="<?php echo base_url().'siswa_galeri/simpan';?>" method="post">
                            <div class="form-group">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th width="10px">No</th>
                                  <th>Judul</th>
                                  <th>Deskripsi</th>
                                  <th>Gambar</th>
                                  <th>Tanggal</th>
                                  <th width="150px" class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; foreach ($galeri as $key => $value) { ?>
                                <tr>
                                  <td width="10px"><?php echo $i;?></td>
                                  <td class="col-md-2"><?php echo $value->judul; ?></td>
                                  <td class="col-md-4"><?php echo $value->deskripsi; ?></td>
                                  <td class="col-md-2"><img src="./assets/galeri/<?php echo $value->img; ?>" width="100px;"></td>
                                  <td class="col-md-2"><?php echo $value->tanggal; ?></td>
                                  <td width="150px" class="text-center">
                                    <a href="<?php echo site_url('siswa_galeri/edit/'.$value->id.'') ?>"><span class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </span></a> 
                                    <button type="button" value="<?php echo $value->id; ?>" class="btn btn-danger btn-xs confirm">
                                      <i class="fa fa-trash" aria-hidden="true"></i> Delete </span>
                                    </button>
                                  </td>
                                </tr>
                                <?php $i++; } ?>
                                </tbody>
                              </table>                                
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
<script type="text/javascript" src="<?php echo base_url()?>assets/datatables.net/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(document).on("click",".confirm",function(){
    var id=$(this).attr("value");
    swal({
        title:"Hapus",
        text:"Yakin akan menghapus data galeri ini?",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Hapus",
        closeOnConfirm: true,
    }).then(function(){
         $.ajax({
            url:"Siswa_galeri/del/",
            type: "POST",
            data:{id:id},
            success: function(){
                swal("Success!","Penghapusan data berhasil","success");
                    setTimeout(function() {
                        window.location.href = "<?php echo site_url('siswa_galeri'); ?>";
                    }, 1000);
            }
         });
      });
  });


</script>
