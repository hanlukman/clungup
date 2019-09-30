<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	public function index()
	{
		$this->db->order_by('reservation_id','DESC');
		$data["pemesanan"] = $this->db->get("reservation")->result();

		$data["header"] = $this->load->view("admin/template/header", null,true);
		$data["footer"] = $this->load->view("admin/template/footer", null,true);
		$this->load->view('admin/pemesanan', $data);
	}

	public function contact(){
		$data["header"] = $this->load->view("frontend/template/header", null,true);
		$data["footer"] = $this->load->view("frontend/template/footer", null,true);
		$this->load->view('frontend/contact', $data);
	}



	public function confirmed(){
	    $kode = $this->uri->segment(4);
	    
	    if ($kode != "") {
	      $this->db->where("booking_code",$kode);  
	      // update field
	      $this->db->update("reservation", ["status" => "Konfirmasi"]);

	      $pemesanan = $this->db->get("reservation")->result();

	      $data["booking_code"] = $pemesanan[0]->booking_code;
	      $data["name"] = $pemesanan[0]->name;    
	      $data["email"] = $pemesanan[0]->email;    
	      $data["booking_date_start"] = $pemesanan[0]->booking_date_start;
	      $data["booking_date_end"] = $pemesanan[0]->booking_date_end;
	      $data["contact"] = $pemesanan[0]->contact;
	      $data["kota"] = $pemesanan[0]->kota;
	      $data["quantity"] = $pemesanan[0]->quantity;
	      $data["payment"] = $pemesanan[0]->payment;
	      $data["time_of_arrival"] = $pemesanan[0]->time_of_arrival;


	      //$this->send($data, $this->load->view("frontend/email_confirmation",$data,TRUE));
	      $this->send($data, $this->load->view("admin/email_confirmed",$data,TRUE));
	      redirect("admin/pemesanan");
	    }    

	  }



	  public function cancelled($kode){
	    //$kode = $this->uri->segment(4);
	    
	    if ($kode != "") {
	      $this->db->where("booking_code",$kode);  
	      // update field
	      $this->db->update("reservation", ["status" => "Batal"]);

	      $pemesanan = $this->db->get("reservation")->result();

	      $data["booking_code"] = $pemesanan[0]->booking_code;
	      $data["name"] = $pemesanan[0]->name;    
	      $data["email"] = $pemesanan[0]->email;    
	      $data["booking_date_start"] = $pemesanan[0]->booking_date_start;
	      $data["booking_date_end"] = $pemesanan[0]->booking_date_end;
	      $data["contact"] = $pemesanan[0]->contact;
	      $data["kota"] = $pemesanan[0]->kota;
	      $data["quantity"] = $pemesanan[0]->quantity;
	      $data["payment"] = $pemesanan[0]->payment;
	      $data["time_of_arrival"] = $pemesanan[0]->time_of_arrival;


	      $this->send($data,$this->load->view("admin/email_cancel",$data,TRUE));
	      // $this->load->view("admin/email_cancel",$data);	      	     
			//$this->send($data, $this->load->view("frontend/email_confirmation",$data,TRUE));
          //echo "<pre>";
         //print_r($data);
	       redirect("admin/pemesanan");
	    }  

	    else
	    {
	    	echo "lalalalalala";
	    }  

  }




  public function send($value, $message){
          $config = Array(

          'protocol' => 'smtp',
          'smtp_host' => 'ssl://smtp.googlemail.com',
          'smtp_port' => 465,
          'smtp_user' => 'nandamoklet20@gmail.com',
          'smtp_pass' => 'Abdullah20',
          'mailtype' => 'html',
          'charset'  => 'iso-8859-1',
          'wordwrap'=>TRUE
         
        );
        

          $this->load->library('email', $config);
          $this->email->from('nandamoklet20@gmail.com','Nanda');
          $this->email->to($value['email']);
          $this->email->subject('Pemesanan CMC');
          // $msg=$this->load->view('KodeBooking');
          // $this->email->message($msg);
          // $message = $this->load->view("frontend/email_confirmation",$value,TRUE);
          $this->email->message($message);
          $this->email->set_newline("\r\n");

          if (!$this->email->send()) {
            show_error($this->email->print_debugger()); 
        }
          else {
            // echo 'Your e-mail has been sent!';
          }


     
    }


    public function check_kd($kd){

    	$this->db->where("booking_code", $kd);
    	$get = $this->db->get("reservation")->num_rows();

    	echo "$get";
    }
}
