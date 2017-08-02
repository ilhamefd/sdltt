<div class="konten">
  <div class="container">
    <div class="row">
    <h2>Status Pengajuan</h2>
    <hr>
    	<div class="panel-group">
    		<div class="panel panel-default">
      			<div class="panel-heading">Daftar Pengajuan Surat Masyarakat</div>
      				<div class="panel-body">
      					
                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIK</th>
                <th>Nama Pemohon</th>
                <th>No. HP</th>
                <th>Jenis Surat</th>
                <th>Keperluan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            
            <?php $i = 1;
              foreach ($pengajuan as $key => $value) { ?>
                <tr class="odd gradeX">
                  <center><td><?php echo $i ?></td></center>
                  <td><?php echo $value->nik ?></td>
                  <td><?php echo $value->nama ?></td>
                  <td><?php echo $value->nohp ?></td>
                  <td><?php echo $value->jenis ?></td>
                  <td><?php echo $value->keperluan ?></td>
                                    
                  <td>
                   
                     <?php
                 $con = $value->status;
            // echo $con;
            if ($con == '1') {
                echo "<span class='label label-danger'>Menunggu Diproses</span>"; 
            
            }
            if ($con == '2') {
             echo "<span class='label label-warning'>Dalam Proses</span>";
            }
            if ($con == '3') {
             echo "<span class='label label-success'>Selesai</span>";
            }
            ?>
                    
                  </td>
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
 <!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>