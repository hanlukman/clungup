<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


		public function __construct()
		  {
		    parent::__construct();
		    
		  }
		  public function index(){
		  	$this->load->model('M_Login');

		  	if($this->input->post('username')!=""){
		  		$data['user_login'] = $this->input->post('username');
		  		$data['user_password'] = $this->input->post('password');

		  		$login=$this->M_Login->cek_login($data);
				
				if(count($login) >=1 ){
					redirect("admin/pemesanan");
				}else{
				
					redirect("admin/login");
					
				}
		  	}else{
		  		$this->load->view('admin/login');	
		  	}
		  }



	 
}
