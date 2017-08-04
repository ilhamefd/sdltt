<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Pengajuan</h1>
                    </div>
                    </div>
<div class="panel panel-default">
  <div class="panel-heading">Daftar Surat Pengajuan</div>
  <div class="panel-body">
                   <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th><center>No.</center></th>
                <th><center>Tanggal</center></th>
                <th><center>NIK</center></th>
                <th><center>Nama Pemohon</center></th>
                <th><center>Status</center></th>
            </tr>
        </thead>
        <tbody>
            
            <?php $i = 1;
              foreach ($pengajuan as $key => $value) { ?>
                <tr class="odd gradeX text-center">
                  <center><td><?php echo $i ?></td></center>
                  <td><?php echo $value->tgl ?></td>
                  <td><a href="<?php echo site_url('admin_pengajuan/detail/'.$value->id.'') ?>"><?php echo $value->nik ?></a></td>
                  <td><?php echo $value->nama ?></td>
                  <td>
                    <form action='<?php echo site_url('admin_pengajuan/baca/'.$value->id.'') ?>'' method='post'>
                      <?php
                        $con = $value->status;
                        // echo $con;
                        if ($con == '1') {
                            echo "<span class='label label-danger'>Belum Dibaca</span>"; 
                        }
                        if ($con == '2') {
                            echo "<span class='label label-primary'>Proses</span>"; 
                        }
                        if ($con == '3') {
                         echo "<span class='label label-success'>Selesai</span>";
                        }
                      ?>
                    </form>
                    
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

</script>