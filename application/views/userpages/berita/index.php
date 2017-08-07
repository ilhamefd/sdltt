<!-- Page Content -->
<div class="konten">
  <div class="container">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <center><h1 class="page-header">Semua Berita</h1></center>
                    </div>
<center><?=$this->session->flashdata('pesan');?></center>
                    </div>
                  </div>


  
                   <table id="example" class="table dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th></th>
                <th></th>                
            </tr>
        </thead>
        <tbody>
            
            <?php $i = 1;
              foreach ($record as $key => $value) { ?>
              
                <tr class="odd gradeX text-center">
                    <td>
                        
                            <img height=100px width=150px src="<?php echo base_url(); ?>assets/berita/<?php echo $value->gambar ?>">
                       
                    </td>
                    <td>
                        <div class="pull-left"><a href="<?php echo site_url('semua_berita/detail/'.$value->id.'') ?>"><h3><?php echo $value->judul ?></h3>
                        </a></div>
                        <br>
                        <br>
                            <div style="text-align: justify;">
                            <?php 
                                $konten=$value->isi; 
                                $konten=character_limiter($konten,500);
                            ?>
                            <p><?php echo $konten;?></p>
                            <a href="<?php echo site_url('semua_berita/detail/'.$value->id.'') ?>">Selanjutnya....</a>
                            </div>
                    </td>   
                </tr>    
            <?php $i++;
            } ?>            
           
        </tbody>
    </table>
    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div></div>
    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>