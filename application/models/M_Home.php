<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model{
	
	public function visitors(){
		$query = $this->db->query("SELECT sum(quantity) as visitors FROM `reservation` WHERE booking_date_start=CURDATE() or booking_date_end=CURDATE()")->result();
		return $query;
	}

	public function booking(){
		
	}
}