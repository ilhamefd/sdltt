<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Image Slider</h1>                      
            
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
            <div class="col-md-5">
              <center><?=$this->session->flashdata('pesan');?></center>
            </div>
        </div>
        
        <table class="table table-striped">
          <thead>
            <th>No. </th>
            <th>Judul </th>
            <th>Nama Gambar</th>
            <th>Aksi</th>
          </thead>
          
          <tbody>
            <?php $i = 1;
              foreach ($slide as $key => $value) { ?>
                <tr class="odd gradeX">
                  <center><td><?php echo $i ?></td></center>
                  <td><?php echo $value->judul ?></td>
                  <td><?php echo $value->nm_gbr ?></td>
                  
                  
                  <td>
                    <a href="<?php echo site_url('admin_slide/edit/'.$value->id.'') ?>"><span class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </span></a> 
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