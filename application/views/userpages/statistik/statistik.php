<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript"> 
     
    // Load the Visualization API and the piechart package. 
    google.charts.load('current', {'packages':['corechart']}); 
       
    // Set a callback to run when the Google Visualization API is loaded. 
    google.charts.setOnLoadCallback(drawChart); 
       
    function drawChart() { 
      var jsonData = $.ajax({ 
          url: "<?php echo base_url() . 'statistik/data_siswa' ?>", 
          dataType: "json", 
          async: false 
          }).responseText; 
           
      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.DataTable(jsonData); 
      
       var options = {
          title: 'Jumlah Siswa',
          is3D: true,
        };

      // Instantiate and draw our chart, passing in some options. 
      var chart = new google.visualization.PieChart(document.getElementById('siswa')); 
      chart.draw(data,options); 
    } 
 
    </script> 

     <script type="text/javascript"> 
     
    // Load the Visualization API and the piechart package. 
    google.charts.load('current', {'packages':['corechart']}); 
       
    // Set a callback to run when the Google Visualization API is loaded. 
    google.charts.setOnLoadCallback(drawChart); 
       
    function drawChart() { 
      var jsonData = $.ajax({ 
          url: "<?php echo base_url() . 'statistik/data_kelas' ?>", 
          dataType: "json", 
          async: false 
          }).responseText; 
           
      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.DataTable(jsonData); 
      
       var options = {
          title: 'Kelas',
          is3D: true,
        };

      // Instantiate and draw our chart, passing in some options. 
      var chart = new google.visualization.PieChart(document.getElementById('kelas')); 
      chart.draw(data,options); 
    } 
 
    </script> 


   <!--  <script type="text/javascript">
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
    </script> -->

<div class="konten">
  <div class="container">
    <div class="row">
    	<center><h2>Statistik Siswa</h2></center>
    	<hr>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-5">
        <center><div id="siswa" style="width: 500px; height: 380px;"></div></center>
      </div>
    
      <div class="col-lg-5">
        <center><div id="kelas" style="width: 500px; height: 380px;"></div></center>
      </div>
  </div>
</div>