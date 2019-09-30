<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->Model("M_Home");
		$data["visitors"] = $this->M_Home->visitors()[0]->visitors;

		$data["header"] = $this->load->view("admin/template/header", null,true);
		$data["footer"] = $this->load->view("admin/template/footer", null,true);
		$this->load->view('admin/Dashboard', $data);
	}

}