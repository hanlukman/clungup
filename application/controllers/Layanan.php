<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_Layanan');
	}
	

	public function cano_detail()
	{
		$data["header"] = $this->load->view("frontend/template/header", null, true);
		$data["footer"] = $this->load->view("frontend/template/footer", null, true);
		$this->load->view('frontend/cano_detail', $data);
	}

	public function snorkling_detail()
	{
		$data["header"] = $this->load->view("frontend/template/header", null, true);
		$data["footer"] = $this->load->view("frontend/template/footer", null, true);
		$this->load->view('frontend/snorkling_detail', $data);
	}

	public function camping_detail()
	{
		$data["header"] = $this->load->view("frontend/template/header", null, true);
		$data["footer"] = $this->load->view("frontend/template/footer", null, true);
		$this->load->view('frontend/camping_detail', $data);
	}

	public function fishing_detail()
	{
		$data["header"] = $this->load->view("frontend/template/header", null, true);
		$data["footer"] = $this->load->view("frontend/template/footer", null, true);
		$this->load->view('frontend/fishing_detail', $data);
	}

	//method cek kode
	public function cek_kode()
	{
		$this->form_validation->set_rules('kode', 'Kode Booking', 'trim|required', [
			'required' => 'Kode booking harus diisi!'
		]);

		if ($this->form_validation->run() == FALSE) {
			$data["header"] = $this->load->view("frontend/template/header", null, true);
			$data["footer"] = $this->load->view("frontend/template/footer", null, true);
			$this->load->view('frontend/cek_booking', $data);
		} else {
			$kode = $this->input->post('kode');

			$data['pesan'] = $this->M_Layanan->cek_kode($kode);

			if ($data) {
				$data["header"] = $this->load->view("frontend/template/header", null, true);
				$data["footer"] = $this->load->view("frontend/template/footer", null, true);

				$this->load->view('frontend/result', $data);
			} else {
				redirect('cek_kode');
			}
		}
	}

	public function cetak_pdf($kode)
	{
		$data['booking'] = $this->M_Layanan->getData($kode);
		
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'portrait');
		$this->pdf->filename = "laporan.pdf";
		$this->pdf->load_view('laporan_pdf', $data);
	}
}