<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Berita</h1>
                    </div>
<center><?=$this->session->flashdata('pesan');?></center>
                    </div>
                  </div>

<div class="panel panel-default">
  <div class="panel-heading">
    <a href="<?php echo site_url('admin_berita/show_add') ?>" class="btn btn-success"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Berita</a>
  </div>
  <div class="panel-body">
                   <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th><center>No.</center></th>
                <th><center>Judul</center></th>
                <th><center>Penulis</center></th>
                <th><center>Tanggal</center></th>
                <th><center>Aksi</center></th>
            </tr>
        </thead>
        <tbody>
            
            <?php $i = 1;
              foreach ($record as $key => $value) { ?>
                <tr class="odd gradeX text-center">
                  <center><td><?php echo $i ?></td></center>
                  <td><a href="<?php echo site_url('admin_berita/show_edit/'.$value->id.'') ?>"><?php echo $value->judul ?></a></td>
                  <td><?php echo $value->penulis ?></td>
                  <td><?php echo $value->tgl ?></td>                  
                  <td align="center">
                    <button type="button" value="<?php echo $value->id ?>" class="btn btn-danger btn-xs confirm">
                    <i class="fa fa-trash" aria-hidden="true"></i> Delete </span>
                    </button>
                  </td>
                </tr>    
            <?php $i++;
            } ?>            
           
        </tbody>
    </table>
    </div></div></div>
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
            text:"Yakin akan menghapus berita ini?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Hapus",
            closeOnConfirm: true,
        }).then(function(){
             $.ajax({
                url:"admin_berita/delete/",
                type: "POST",
                data:{id:id},
                success: function(){
                    swal("Success!","Penghapusan data berhasil","success");
                        setTimeout(function() {
                            window.location.href = "<?php echo site_url('admin_berita'); ?>";
                        }, 1000);
                }
             });
        });
    });
</script>