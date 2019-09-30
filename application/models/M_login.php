<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model{
	
	public function cek_login($data){
		$this->db->select('*');
		$this->db->from('admin_account');
		$this->db->where('user_login',$data['user_login']);
		$this->db->where('user_password',$data['user_password']);
		$query= $this->db->get();
		return  $query->result();
	}
}