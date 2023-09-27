<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
    <script type="text/javascript">
        google.charts.load('visualization', "1", {
            packages: ['corechart']
        });
    </script>
 
  </head>
  <body>
    <div class="container">
    <?php $this->load->view('navbar/menu');?>
    </div> <!-- /container -->

    <?php 
      if($this->session->userdata('akses') == '1'):
    ?>
    <script type="text/javascript">
     
      google.load('visualization', '1', {'packages':['corechart']});
    
      google.setOnLoadCallback(drawChart);
       
      function drawChart() {
        var jsonData = $.ajax({
        url:'<?php echo base_url().'diagram_admin/get_data'?>',
        mtype : "post",
        dataType:"json",
        async: false
      }).responseText; 
      
      var data = new google.visualization.DataTable(jsonData);
       
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, {width: 500, height: 340});
      }
       
      </script>
      
            <h2 style="margin-left: 220px;">Dashboard Diagram <?php echo $this->session->userdata('ses_nama');?></h2>
    <?php 
      endif;
    ?>

    <?php 
      if($this->session->userdata('akses') == '2'):
    ?>
      <script type="text/javascript">
     
      google.load('visualization', '1', {'packages':['corechart']});
    
      google.setOnLoadCallback(drawChart);
       
      function drawChart() {
        var jsonData = $.ajax({
        url:'<?php echo base_url().'diagram_ard/get_data'?>',
        mtype : "post",
        dataType:"json",
        async: false
      }).responseText; 
      
      var data = new google.visualization.DataTable(jsonData);
       
      var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
      chart.draw(data, {width: 500, height: 340});
      }
       
      </script>
      
        <h2 style="margin-left: 220px;">Dashboard Diagram <?php echo $this->session->userdata('ses_nama');?></h2>
    <?php 
      endif;
    ?>

    <?php 
      if($this->session->userdata('akses') == '3'):
    ?>
      <script type="text/javascript">
     
      google.load('visualization', '1', {'packages':['corechart']});
    
      google.setOnLoadCallback(drawChart);
       
      function drawChart() {
        var jsonData = $.ajax({
        url:'<?php echo base_url().'diagram_ga/get_data'?>',
        mtype : "post",
        dataType:"json",
        async: false
      }).responseText; 
      
      var data = new google.visualization.DataTable(jsonData);
       
      var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
      chart.draw(data, {width: 500, height: 340});
      }
       
      </script>
      
        <h2 style="margin-left: 220px;">Dashboard Diagram <?php echo $this->session->userdata('ses_nama');?></h2>
    <?php 
      endif;
    ?>

    <?php 
      if($this->session->userdata('akses') == '4'):
    ?>
    <script type="text/javascript">
     
      google.load('visualization', '1', {'packages':['corechart']});
    
      google.setOnLoadCallback(drawChart);
       
      function drawChart() {
        var jsonData = $.ajax({
        url:'<?php echo base_url().'diagram_it/get_data'?>',
        mtype : "post",
        dataType:"json",
        async: false
      }).responseText; 
      
      var data = new google.visualization.DataTable(jsonData);
       
      var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));
      chart.draw(data, {width: 500, height: 340});
      }
       
      </script>
      
            <h2 style="margin-left: 220px;">Dashboard Diagram <?php echo $this->session->userdata('ses_nama');?></h2>
    <?php 
      endif;
    ?>


    <div class="container">
    <?php 
      if($this->session->userdata('akses') == '1'):
    ?>

    <div class="row">
      <div class="col-md-4">
        <div id="chart_div"></div>
      </div>
      <div class="col-md-8">
        <div id="line_data" style="width: 700px; height: 400px; margin: 0 auto; margin-left: 170px;margin-top: -40px;"></div>
      </div>  
    </div>
    <div id="bar_data" style="width: 700px; height: 400px; margin: 0 auto; margin-left: -90px;"></div>
    <?php endif; ?>

    <div class="container">
    <?php 
      if($this->session->userdata('akses') == '2'):
    ?>

    <div class="row">
      <div class="col-md-4">
        <div id="chart_div1"></div>
      </div>
      <div class="col-md-8">
        <div id="line_data" style="width: 700px; height: 400px; margin: 0 auto; margin-left: 160px;margin-top: -40px;"></div>
      </div>  
    </div>
    <div id="bar_data" style="width: 700px; height: 400px; margin: 0 auto; margin-left: -90px;"></div>
    <?php endif; ?>

    <div class="container">
    <?php 
      if($this->session->userdata('akses') == '3'):
    ?>

    <div class="row">
      <div class="col-md-4">
        <div id="chart_div2"></div>
      </div>
      <div class="col-md-8">
        <div id="line_data" style="width: 700px; height: 400px; margin: 0 auto; margin-left: 145px;margin-top: -40px;"></div>
      </div>  
    </div>
    <div id="bar_data" style="width: 700px; height: 400px; margin: 0 auto; margin-left: -120px;"></div>
    <?php endif; ?>

    <div class="container">
    <?php 
      if($this->session->userdata('akses') == '4'):
    ?>

    <div class="row">
      <div class="col-md-4">
        <div id="chart_div3"></div>
      </div>
      <div class="col-md-8">
        <div id="line_data" style="width: 700px; height: 400px; margin: 0 auto; margin-left: 125px;margin-top: -40px;"></div>
      </div>  
    </div>
    <div id="bar_data" style="width: 700px; height: 400px; margin: 0 auto; margin-left: -150px;"></div>
    <?php endif; ?>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
  </body>
</html>

<script language="JavaScript">
  google.charts.setOnLoadCallback(lineChart);
  google.charts.setOnLoadCallback(barChart);
   
  function lineChart() {
        var data = google.visualization.arrayToDataTable([
            ['untuk', 'jumlah'],
            <?php 
             foreach ($line_bar as $row){
             echo "['".$row->untuk."',".$row->jml."],";
             }
             ?>
        ]);
 
        var options = {
          title: 'Diagram Line Feedback',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('line_data'));
        chart.draw(data, options);
  }
  function barChart() {
    var data = google.visualization.arrayToDataTable([
        ['untuk', 'jumlah'],
        <?php 
         foreach ($line_bar as $row){
         echo "['".$row->untuk."',".$row->jml."],";
         }
         ?>
    ]);
    var options = {
        title: 'Diagram Bar Feedback',
        is3D: true,
    };
    var chart = new google.visualization.BarChart(document.getElementById('bar_data'));
    chart.draw(data, options);
  }
</script>