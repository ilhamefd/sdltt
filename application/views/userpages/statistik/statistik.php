<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Jenis Kelamin', 'Jumlah'],
          ['Laki-laki',     1367],
          ['Perempuan',     2135],
        ]);

        var options = {
          title: 'Perbandingan Jumlah penduduk Laki-laki dengan Perempuan',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('penduduk'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Jenis Pekerjaan', 'Jumlah'],
          ['PNS',     367],
          ['Petani',      2135],
          ['Pedagang',      635],
          ['Pengusaha',      135]
        ]);

        var options = {
          title: 'Jenis Pekerjaan',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('jeniskerja'));
        chart.draw(data, options);
      }
    </script>

<div class="konten">
  <div class="container">
    <div class="row">
    	<center><h2>Statistik Penduduk</h2></center>
    	<hr>
    	
    	<div class="col-lg-5">
    		<center><div id="penduduk" style="width: 600px; height: 380px;"></div></center>
    	</div>
    
    	<div class="col-lg-5">
    		<center><div id="jeniskerja" style="width: 600px; height: 380px;"></div></center>
    	</div>
    </div>
  </div>
</div>