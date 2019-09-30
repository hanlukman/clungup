<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function cano_detail(){
		$data["header"] = $this->load->view("frontend/template/header", null,true);
		$data["footer"] = $this->load->view("frontend/template/footer", null,true);
		$this->load->view('frontend/cano_detail', $data);
	}

	public function snorkling_detail(){
		$data["header"] = $this->load->view("frontend/template/header", null,true);
		$data["footer"] = $this->load->view("frontend/template/footer", null,true);
		$this->load->view('frontend/snorkling_detail', $data);
	}

	public function camping_detail(){
		$data["header"] = $this->load->view("frontend/template/header", null,true);
		$data["footer"] = $this->load->view("frontend/template/footer", null,true);
		$this->load->view('frontend/camping_detail', $data);
	}

	public function fishing_detail(){
		$data["header"] = $this->load->view("frontend/template/header", null,true);
		$data["footer"] = $this->load->view("frontend/template/footer", null,true);
		$this->load->view('frontend/fishing_detail', $data);
	}
	
	//method cek kode
	public function cek_kode(){
		$this->load->view('frontend/cek_booking');

	}




}
