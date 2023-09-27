<style type="text/css">
	.navbar-nav.mr-auto.navbar-center{
		position: absolute;
		left: 50%;
		transform: translatex(-50%);
	}
	.navbar-nav.navbar-right{
		position: absolute;
		left: 86%;
	}
</style>

<div class="container">
	<a href="<?php base_url(); ?>"><img class="img-thumbnail" src="assets/gambar/logo immortal.jpg" /></a>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="<?php echo base_url(); ?>">Home</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="nav navbar-nav mr-auto navbar-center">
	      <li class="nav-item">
	        <a href="#" class="nav-link">About<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a href="#" class="nav-link">News Info</span></a>
	      </li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	    	<li><a href="<?php echo base_url('feedback'); ?>" class="nav-link">FeedBack</a></li>
	    	<li><a href="<?php echo base_url('login'); ?>" class="nav-link">Login</a></li>
	    </ul>
	  </div>
	</nav>
</div>
<div class="container">
	<hr style="border: 2px solid ;color: grey;">
</div>