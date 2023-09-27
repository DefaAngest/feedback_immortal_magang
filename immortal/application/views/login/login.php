<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<style type="text/css">
		h1{
			text-align: center;
			font-weight: 300;
		}
		 
		.tulisan_login{
			text-align: center;
			text-transform: uppercase;
		}
		 
		.kotak_login{
			width: 350px;
			background: white;
			margin: 80px auto;
			padding: 30px 20px;
			box-shadow: 0px 0px 100px 4px #d6d6d6;
		}
		 
		label{
			font-size: 11pt;
		}
		 
		.form_login{
			box-sizing : border-box;
			width: 100%;
			padding: 10px;
			font-size: 11pt;
			margin-bottom: 20px;
		}
		 
		.tombol_login{
			background: #2aa7e2;
			color: white;
			font-size: 11pt;
			width: 100%;
			border: none;
			border-radius: 3px;
			padding: 10px 20px;
		}
		 
		.link{
			color: #232323;
			text-decoration: none;
			font-size: 10pt;
		}
		 
		.alert{
			background: #e44e4e;
			color: white;
			padding: 10px;
			text-align: center;
			border:1px solid #b32929;
		}
	</style>
</head>
<body>
	 <div class="kotak_login">
	 	<p class="tulisan_login">Silahkan Login</p>
	 		<form action="<?php echo base_url('login/cek_login'); ?>" method="POST">
	 			
	 			<?php echo $this->session->flashdata('msg');?>
				<label>Username</label>
				<input type="text" name="username" class="form_login form-control" placeholder="Username .." required="required">			
				<label>Password</label>
				<input type="password" name="password" class="form_login form-control" placeholder="Password .." required="required">

				<input type="submit" class="tombol_login" value="LOGIN">

				<br/>
				<br/>
				<center>
				<a class="link" href="<?php echo base_url(); ?>">kembali</a>
				</center>
		</form>
	 </div>
</body>
</html>