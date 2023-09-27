<?php 
	/**
	 * 
	 */
	class Feedback extends CI_Controller{
		public function __construct(){
	        parent::__construct();
	        $this->load->model('Dropdown');
	        $this->load->model('model_karyawan');
	    }

	    public function index(){
	    	$data['dataku'] = $this->Dropdown->tampil_data();
	    	$data['title'] = "FeedBack";
	    	$this->load->view('navbar/header');
	    	$this->load->view('feedback/feedback', $data);
	    }

	    public function insert(){
	    	$this->form_validation->set_rules('nik','nik','required');
	    	$this->form_validation->set_rules('untuk','untuk','required');

	    	if($this->form_validation->run() != FALSE){
		    	$nik = $this->input->post('nik');
		    	$untuk = $this->input->post('untuk');
		    	$kritik_saran = $this->input->post('kritik_saran');

		    	$simpan = array('nik' => $nik,'untuk'=>$untuk,'kritik_saran'=>$kritik_saran);
	    
		        $save = $this->model_karyawan->insertOne($simpan);
		        
		        if($save == TRUE){
		            echo "<script type='text/javascript'>alert('Data Anda Berhasil Disimpan Terima Kasih');</script>";
		            redirect (site_url('feedback'),'refresh');
		        }else{
		            echo "<script>alert('Data Anda Tidak Disimpan');</script>";
		            redirect (site_url('feedback'),'refresh');
		        }
		    }else{
		    	echo "<script>alert('Data Tidak Boleh Kosong');</script>";
		        redirect (site_url('feedback'),'refresh');
		    }
	    }
	}
?>