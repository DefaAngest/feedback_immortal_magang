<!DOCTYPE html> 
<html>
<head>
	<title>Lihat Data <?php echo $detail->nik; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<?php 
			$this->load->view('navbar/menu');
		?>
		<a href="<?php echo base_url().'view_ard'; ?>"><button class="btn btn-warning">Back</button></a>
		<div class="jumbotron jumbotron-fluid">
		  <div class="container">
		    <h1 class="display-4">Feedback <?php echo $detail->nik; ?></h1>
		    <p class="lead">Kepada <?php echo $detail->untuk; ?></p>
		    <p class="lead">Dengan Kritik/Saran <br><br> <?php echo $detail->kritik_saran; ?></p>
		  </div>
		</div>
	</div>
</body>
</html>