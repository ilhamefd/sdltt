<!DOCTYPE html>
<html>
<head>
	<title>coba error</title>
</head>
<body>
	<br><br><br><br><br><br>
	  <div class="col-sm-4">
    <div class="panel panel-info">
      <div class="panel-heading text-center">Kehadiran Perangkat Desa</div>
       <table class="table table-striped">
        <thead>
          <tr>
            <th class="text-center">Jabatan</th>
            <th>Status</th>
            <th>Update Terbaru</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($hadir as $key => $value) { ?>
          <tr>
            <td class="text-center"><?php echo $value->jabatan ?></td>
            <td class="text-center">
            <?php
            $con = $value->status;
            // echo $con;
            if ($con == '1') {
            echo "<span class='badge-green'>Ada</span>";
            }
            if ($con == '2') {
            echo "<span class='badge-yellow'>Keluar</span>";
            }
            if ($con == '3') {
            echo "<span class='badge-red'>Tidak Masuk</span>";

            }
            ?>
            </td>
            <td><?php echo $value->last_update ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    </div>
<h1>test error</h1>
</body>
</html>