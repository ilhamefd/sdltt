<div class="konten">
  <div class="container">
  	<div class="container-fluid">
    <div class="row">
    <center><h2><?=$record[0]->judul; ?></h2></center>
    <hr>
   		<div style="text-align: justify; width: 100%;"><p><?=$record[0]->isi; ?></p></div>
   		<br>
   		<br>
   		<center><button type="button" class="btn btn-warning" onclick="window.history.go(-1); return false;">Kembali</button></center>
   		<br>
    </div>
</div>
  </div>
</div>