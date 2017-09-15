<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tenaga Pendidik</h1>
                     <center><?=$this->session->flashdata('pesan');?></center>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="<?php echo site_url('admin_tenaga/show_add') ?>" class="btn btn-success"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Pendidik</a>
                            </div>
                            <div class="panel-body">

                                <table id="example" class="table table-striped table-bordered dt-responsive nowrap " cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th><center>Foto</center></th>
                                            <th><center>Identitas</center></th>
                                            <th><center>Aksi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                          foreach ($record as $key => $value) { ?>
                                            <tr class="odd gradeX">
                                              <td class="col-md-3">
                                                  <center><img src="<?php echo base_url(); ?>assets/tenaga/<?php echo $value->foto ?>" width="150px"></center>
                                              </td>
                                              <td class="col-md-6">
                                              Kode          : <?php echo $value->kode ?><br>
                                              Nama          : <?php echo $value->nama ?><br>
                                              Jenis Kelamin : <?php echo $value->jk ?><br>
                                              Jabatan       : <?php echo $value->jabatan ?></td>
                                              <td class="col-md-1">
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
            text:"Yakin akan menghapus data ini?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Hapus",
            closeOnConfirm: true,
        }).then(function(){
             $.ajax({
                url:"admin_tenaga/delete/",
                type: "POST",
                data:{id:id},
                success: function(){
                    swal("Success!","Penghapusan data berhasil","success");
                        setTimeout(function() {
                            window.location.href = "<?php echo site_url('admin_tenaga'); ?>";
                        }, 1000);
                }
             });
        });
    });
</script>