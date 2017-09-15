<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Kritik dan Saran</h1>
                    </div>
                </div>
                <div class="panel panel-default">
      <div class="panel-heading">Daftar Kritik dan Saran Orangtua Siswa</div>
      <div class="panel-body">
   
                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th><center>No.</center></th>
                <th><center>Nama</center></th>
                <th><center>Alamat</center></th>
                <th><center>Kritik dan Saran</center></th>
                <th><center>Status</center></th>
            </tr>
        </thead>
        <tbody>
            
            <?php $i = 1;
              foreach ($kritik as $key => $value) { ?>
                <tr class="odd gradeX">
                  <center><td><?php echo $i ?></td></center>
                  <td><?php echo $value->nama ?></td>
                  <td><?php echo $value->alamat ?></td>
                  <td><?php echo $value->kritik ?></td>
                  <td>
                    <form action='<?php echo site_url('admin_kritik/baca/'.$value->id.'') ?>'' method='post'>
                     <?php
                 $con = $value->status;
            // echo $con;
            if ($con == '1') {
                echo "<button type='submit' name='baca' value='2' class='btn btn-warning btn-xs'><i class='fa fa-pencil-square-o' aria-hidden='true'></i> Tandai</button>"; 
            
            }
            if ($con == '2') {
             echo "<span class='label label-success'>Sudah Dibaca</span>";
            }
            ?>
                    </form>
                    
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
</script>