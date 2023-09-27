<?php 
	class Home extends CI_Controller{
		public function __construct(){
	        parent::__construct();
	    }	

	    public function index(){
	    	$data['title'] = "Immortal";
	    	$this->load->view('navbar/header');
	    	$this->load->view('home/Home', $data);
	    	$this->load->view('navbar/footer');
	    }
	}
?>