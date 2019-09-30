<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data["header"] = $this->load->view("frontend/template/header", null,true);
		$data["footer"] = $this->load->view("frontend/template/footer", null,true);
		$this->load->view('frontend/home', $data);
	}

	public function map(){
		$data["header"] = $this->load->view("frontend/template/header", null,true);
		$data["footer"] = $this->load->view("frontend/template/footer", null,true);
		$html = $this->mycurl('api.openweathermap.org/data/2.5/forecast?lat=-8.430319&lon=112.6766958&appid=4bdcea16db66cd266764f2e41d515a12');
		$oke = json_decode($html);
		// print_r($oke);
		// $data["icon"]=$oke->weather[0]->icon;
		$data["cuaca"]=$oke;
		$this->load->view('frontend/map', $data);
	}

	public function about_us(){
		$data["header"] = $this->load->view("frontend/template/header", null,true);
		$data["footer"] = $this->load->view("frontend/template/footer", null,true);
		$this->load->view('frontend/about_us', $data);
	}

	function mycurl($url, $user_agent = "Googlebot/2.1 (http://www.googlebot.com/bot.html)") {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
			
		// Gagal ngecURL
	    if(!$site = curl_exec($ch)){
			return 'offline';
		}
		
		// Sukses ngecURL
		else{
			return $site;
		}
		curl_close($ch);
	}
}
