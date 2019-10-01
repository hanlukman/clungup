<?php
// error_reporting(0);
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{

  public function index()
  {
    $data["header"] = $this->load->view("frontend/template/header", null, true);
    $data["footer"] = $this->load->view("frontend/template/footer", null, true);
    $this->load->view('frontend/booking', $data);
  }

  //tanggal
  public function tanggal()
  {
    // $this->post()->input('month');
    // $this->post()->input('years');

    $data["header"] = $this->load->view("frontend/template/header", null, true);
    $data["footer"] = $this->load->view("frontend/template/footer", null, true);
    $this->load->view('frontend/tanggal', $data);
  }

  public function get_tanggal($month)
  {
    $selectedMonth = $month;
    $bulan = "$selectedMonth";

    $start_date = "01-" . $bulan . "-2019";
    $start_time = strtotime($start_date);

    $end_time = strtotime("+1 month", $start_time);
    echo "<table class='table table-bordered'>";
    for ($i = $start_time; $i < $end_time; $i += 86400) { 
      $list = date('d M Y (D)', $i);
      echo "<tr><td>";
      echo $list;
      echo "</td>";
      echo "<td>";
      echo $list;
      echo "</td>";


      echo "<td>&nbsp;</td>";
      echo "</tr>";
    }
    echo "</table>";
  }


  public function confirm()
  {
    // check quota
    $this->db->where("booking_date_start", $this->input->post('datestart'));
    $qty = $this->db->get("reservation")->result();
    // echo "<pre>";
    // print_r($qty);    

    $total = 0;
    foreach ($qty as $q) {
      $total += $q->quantity;
    }

    // echo $total;

    // save to session
    $_SESSION['name'] = $this->input->post('name');
    $_SESSION['email'] = $this->input->post('email');
    $_SESSION['contact'] = $this->input->post('contact');
    $_SESSION['no_rekening'] = $this->input->post('no_rekening');
    $_SESSION['kota'] = $this->input->post('kota');
    $_SESSION['booking_date_start'] = $this->input->post('datestart');
    $_SESSION['booking_date_end'] = $this->input->post('dateend');
    $_SESSION['quantity'] = $this->input->post('qty');
    $_SESSION['payment'] = (abs(explode("-", $_SESSION['booking_date_start'])[2] - explode("-", $_SESSION['booking_date_end'])[2]) + 1) * 10000 * $_SESSION['quantity'];
    $_SESSION['time_of_arrival'] = $this->input->post('time');
    // $_SESSION['booking_code'] =explode("-",$_SESSION['booking_date_start'])[0].explode("-",$_SESSION['booking_date_start'])[1].explode("-",$_SESSION['booking_date_start'])[2].$_SESSION['name'];
    $_SESSION['booking_code'] = substr(md5(date("Y-m-d h:i:s")), 0, 5);
    $_SESSION['confirmed'] = 1;

    $data["total"] = $total;

    $data["header"] = $this->load->view("frontend/template/header", null, true);
    $data["footer"] = $this->load->view("frontend/template/footer", null, true);
    $this->load->view('frontend/confirm', $data);
  }



  public function post()
  {
    // $this->load->view('Form_Booking');
    if ($_SESSION['confirmed'] == 1) {
      $data['name'] = $_SESSION['name'];
      $data['email'] = $_SESSION['email'];
      $data['contact'] = $_SESSION['contact'];
      $data['no_rekening'] = $_SESSION['no_rekening'];
      // $value['negara'] = $this->input->post('negara');
      $data['kota'] = $_SESSION['kota'];
      $data['booking_date_start'] = $_SESSION['booking_date_start'];
      $data['booking_date_end'] = $_SESSION['booking_date_end'];
      $data['quantity'] = $_SESSION['quantity'];
      $data['payment'] = $_SESSION['payment'];
      $data['time_of_arrival'] = $_SESSION['time_of_arrival'];
      $data['booking_code'] = $_SESSION['booking_code'];
      $data['booking_date'] = date('Y-m-d');
      // $data['booking_date'] =  date('Y-m-d', strtotime($data['booking_date_start']."+02 days"));

      $this->db->insert('reservation', $data);

      $this->send($data, $this->load->view("frontend/email_confirmation", $data, TRUE));
      session_destroy();

      $data["header"] = $this->load->view("frontend/template/header", null, true);
      $data["footer"] = $this->load->view("frontend/template/footer", null, true);
      $this->load->view('frontend/booked', $data);
    } else {
      redirect("booking/index");
    }
  }



  public function send($value, $message)
  {
    $config = array(

      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'nandamoklet20@gmail.com',
      'smtp_pass' => 'Abdullah20',
      'mailtype' => 'html',
      'charset'  => 'iso-8859-1',
      'wordwrap' => TRUE,

    );


    $this->load->library('email', $config);
    $this->email->from('nandamoklet20@gmail.com', 'Nanda');
    $this->email->to($value['email']);
    $this->email->subject('Pemesanan CMC');
    // $msg=$this->load->view('KodeBooking');
    // $this->email->message($msg);
    // $message = $this->load->view("frontend/email_confirmation",$value,TRUE);
    $this->email->message($message);
    $this->email->set_newline("\r\n");

    if (!$this->email->send()) {
      show_error($this->email->print_debugger());
    } else {
      // echo 'Your e-mail has been sent!';
    }
  }
}