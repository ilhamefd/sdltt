<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Video Kegiatan Siswa</h1>
                         <center><?=$this->session->flashdata('pesan');?></center>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="<?php echo site_url('admin_kegiatan_video/show_add') ?>" class="btn btn-success"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Video</a>
                            </div>
                            <div class="panel-body">

                                <table id="example" class="table table-striped table-bordered dt-responsive nowrap " cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th><center>No.</center></th>
                                            <th><center>Video</center></th>
                                            <th><center>Judul</center></th>
                                            <th><center>Link</center></th>
                                            <th><center>Aksi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                          foreach ($record as $key => $value) { ?>
                                            <tr class="odd gradeX">
                                              <td><?php echo $i ?></td> 
                                              <td class="col-md-4"><iframe src="<?=$value->link; ?>" height="190px" allowfullscreen></iframe></td>
                                              <td class="col-md-3"><?php echo $value->judul ?></td>
                                              <td class="col-md-3"><?php echo $value->link ?></td>
                                              <td class="col-md-2">
                                                <center><button type="button" value="<?php echo $value->id ?>" class="btn btn-danger btn-xs confirm">
                                                <i class="fa fa-trash" aria-hidden="true"></i> Delete </span>
                                                </button></center>
                                              </td>
                                            </tr>    
                                        <?php $i++;
                                        } ?>            
                                       
                                    </tbody>
                                </table>
                            </div>
                    </div> 
                       
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
<!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

 $(document).on("click",".confirm",function(){
        var id=$(this).attr("value");
        swal({
            title:"Hapus",
            text:"Yakin akan video ini?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Hapus",
            closeOnConfirm: true,
        }).then(function(){
             $.ajax({
                url:"admin_kegiatan_video/delete/",
                type: "POST",
                data:{id:id},
                success: function(){
                    swal("Success!","Penghapusan video berhasil","success");
                        setTimeout(function() {
                            window.location.href = "<?php echo site_url('admin_kegiatan_video'); ?>";
                        }, 1000);
                }
             });
        });
    });
</script>