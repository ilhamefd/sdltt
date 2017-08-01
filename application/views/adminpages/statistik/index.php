<div id="page-wrapper">
    <div class="container-fluid">
        <h1><?php echo $title ?></h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h3><strong>Panel Jenis Penduduk</strong></h3>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th width="50px">No</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jumlah</th>
                                    <th width="150px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1;
                            foreach ($penduduk as $key => $value) { ?>
                                <tr class="odd gradeX">
                                        <td align="center"><?php echo $i ?></td>
                                        <td><?php echo $value->jk ?></td>
                                        <td><?php echo $value->jml ?></td>
                                        <td align="center"><a href="<?php echo site_url('Admin_Statistik/edit_jenis/'.$value->id.'') ?>"><span class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </span></a></td>
                                    </tr>    
                            <?php $i++;
                            } ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h3><strong>Panel Pekerjaan Penduduk</strong></h3>
                        <a href="<?php echo site_url('admin_statistik/add') ?>" class="btn btn-success"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th width="50px">No</th>
                                    <th>Pekerjaan</th>
                                    <th>Jumlah</th>
                                    <th width="150px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1;
                            foreach ($pekerjaan as $key => $value) { ?>
                                <tr class="odd gradeX">
                                        <td align="center"><?php echo $i ?></td>
                                        <td><?php echo $value->nm_pk ?></td>
                                        <td><?php echo $value->jml ?></td>
                                        <td align="center"><a href="<?php echo site_url('Admin_Statistik/edit_pekerjaan/'.$value->id.'') ?>"><span class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </span></a> 
                                        <button type="button" value="<? echo $value->id ?>" class="btn btn-danger btn-xs confirm">
                                            <i class="fa fa-trash" aria-hidden="true"></i> Delete </span>
                                        </button>
                                    </tr>    
                            <?php $i++;
                            } ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

                     
    <script>
    // $(document).ready(function() {
    //     $('#dataTables-example').DataTable({
    //         responsive: true
    //     });
    // });

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
                url:"Admin_Statistik/del/",
                type: "POST",
                data:{id:id},
                success: function(){
                    swal("Success!","Penghapusan data berhasil","success");
                        setTimeout(function() {
                            window.location.href = "<?php echo site_url('Admin_Statistik'); ?>";
                        }, 1000);
                }
             });
        });
    });

    </script>

