<div class="konten">
  <div class="container">
    <div class="row">
    <center><h2>Tenaga Pendidik</h2></center>
    <hr>
    <div class="col-md-2"></div>
    <div class="col-md-8">
   		<center> <table id="example" class="table table-striped table-bordered dt-responsive nowrap " cellspacing="0" width="100%">
        <thead>
            <tr>
                
                <th><center></center></th>
                <th><center></center></th>
               
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
              foreach ($record as $key => $value) { ?>
                <tr class="odd gradeX">
                  <td class="col-md-2">
                    <center><img src="<?php echo base_url(); ?>assets/tenaga/<?php echo $value->foto ?>" width="150px"></center>
                  </td>
                  <td class="col-md-6">
                  Kode          : <?php echo $value->kode ?><br>
                  Nama          : <?php echo $value->nama ?><br>
                  Jenis Kelamin : <?php echo $value->jk ?><br>
                  Jabatan       : <?php echo $value->jabatan ?></td>
                </tr>    
            <?php $i++;
            } ?>            
           
        </tbody>
    </table></center>
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