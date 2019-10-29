<?php
// error_reporting(0);
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{

  public function index($tanggal, $sesi)
  {
    $data["header"] = $this->load->view("frontend/template/header", null, true);
    $data["footer"] = $this->load->view("frontend/template/footer", null, true);

    $data['data_tanggal'] = $tanggal;
    $data['data_sesi'] = $sesi;

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

  public function get_tanggal($month, $year)
  {
    $selectedMonth = $month;
    $bulan = "$selectedMonth";

    $start_date = "01-" . $bulan . "-" . $year;
    $start_time = strtotime($start_date);

    $end_time = strtotime("+1 month", $start_time);
    //edit at here
    echo "<table class='table table-bordered'>";
    for ($i = $start_time; $i < $end_time; $i += 86400) {
      $list = date('d M Y (D)', $i);

      #
      $quantity_1 = 0;
      $quantity_2 = 0;
      $quantity_3 = 0;
      $data_reservasi_1  = $this->db->select('sum(quantity) as total_sum')->where('sesi', '1')->where('booking_date_start', date("Y-m-d", $i))->get('reservation')->row(0);
      $data_reservasi_2  = $this->db->select('sum(quantity) as total_sum')->where('sesi', '2')->where('booking_date_start', date("Y-m-d", $i))->get('reservation')->row(0);
      $data_reservasi_3  = $this->db->select('sum(quantity) as total_sum')->where('sesi', '3')->where('booking_date_start', date("Y-m-d", $i))->get('reservation')->row(0);
      if ($data_reservasi_1 != null) {
        $quantity_1 = 10 - $data_reservasi_1->total_sum;
      }
      if ($data_reservasi_2 != null) {
        $quantity_2 = 10 - $data_reservasi_2->total_sum;
      }
      if ($data_reservasi_3 != null) {
        $quantity_3 = 10 - $data_reservasi_3->total_sum;
      }

      #

      echo "<tr>";
      echo "<td>";
      echo $list;
      echo "</td>";
      echo "<td>";
      echo '<a href="' . base_url("Booking/index/" . $i . "/1") . '" class="text-danger">' . $quantity_1 . '</a>';
      echo "</td>";
      echo "<td>";
      echo '<a href="' . base_url("Booking/index/" . $i . "/2") . '" class="text-danger">' . $quantity_2 . '</a>';
      echo "</td>";
      echo "<td>";
      echo '<a href="' . base_url("Booking/index/" . $i . "/3") . '" class="text-danger">' . $quantity_3 . '</a>';
      echo "</td>";
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
    // $_SESSION['name'] = $this->input->post('name');
    // $_SESSION['email'] = $this->input->post('email');
    // $_SESSION['contact'] = $this->input->post('contact');
    // $_SESSION['no_rekening'] = $this->input->post('rekening');
    // $_SESSION['alamat'] = $this->input->post('alamat');
    // $_SESSION['quantity'] = $this->input->post('qty');
    // $_SESSION['booking_code'] = substr(md5(date("Y-m-d h:i:s")), 0, 5);
    // $_SESSION['booking_date_start'] = $this->input->post('datestart');
    // $_SESSION['booking_date_end'] = $this->input->post('datestart');
    // $_SESSION['payment'] = (abs(explode("-", $_SESSION['booking_date_start'])[2] - explode("-", $_SESSION['booking_date_end'])[2]) + 1) * 10000 * $_SESSION['quantity'];
    // $_SESSION['time'] = $this->input->post('time');
    // $_SESSION['sesi'] = $this->input->post('sesi');
    // $_SESSION['time_of_arrival'] = $this->input->post('time');
    // $_SESSION['booking_code'] =explode("-",$_SESSION['booking_date_start'])[0].explode("-",$_SESSION['booking_date_start'])[1].explode("-",$_SESSION['booking_date_start'])[2].$_SESSION['name'];
    // $_SESSION['booking_code'] = $this->generate_booking_code();
    // $_SESSION['status'] = 'Belum Bayar';
    // $_SESSION['confirm'] = 1;

    
    $data = [
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'contact' => $this->input->post('contact'),
      'no_rekening' => $this->input->post('rekening'),
      'alamat' => $this->input->post('alamat'),
      'quantity' => $this->input->post('qty'),
      'booking_code' => $this->input->post('booking_code'),
      'booking_date_start' => $this->input->post('datestart'),
      'booking_date_end' => $this->input->post('datestart'),
      'payment' => (abs(explode("-", $this->input->post('datestart'))[2] - explode("-", $this->input->post('datestart'))[2]) + 1) * 10000 * $this->input->post('qty'),
      'time' => $this->input->post('time'),
      'sesi' => $this->input->post('sesi'),
      'booking_code' => $this->generate_booking_code(),
      'status' => 'Belum Bayar',
    ];
    
    $this->session->set_userdata($data);
    

    $data["total"] = $total;

    $data["header"] = $this->load->view("frontend/template/header", null, true);
    $data["footer"] = $this->load->view("frontend/template/footer", null, true);
    $this->load->view('frontend/confirm', $data);
  }

  public function generate_booking_code()
  {
    $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    return substr(str_shuffle($chars), 0, 5);
  }



  public function post()
  {
    // $this->load->view('Form_Booking');
      // $data['name'] = $_SESSION['name'];
      // $data['email'] = $_SESSION['email'];
      // $data['contact'] = $_SESSION['contact'];
      // $data['no_rekening'] = $_SESSION['no_rekening'];
      // // $value['negara'] = $this->input->post('negara');
      // $data['alamat'] = $_SESSION['alamat'];
      // $data['quantity'] = $_SESSION['quantity'];
      // $data['booking_date_start'] = $_SESSION['booking_date_start'];
      // $data['booking_date_end'] = $_SESSION['booking_date_end'];
      // $data['payment'] = $_SESSION['payment'];
      // $data['time_of_arrival'] = $_SESSION['time_of_arrival'];
      // $data['booking_code'] = $_SESSION['booking_code'];
      // $data['booking_date'] = date('Y-m-d');
      // $data['booking_date'] =  date('Y-m-d', strtotime($data['booking_date_start']."+02 days"));
      $data = [
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'contact' => $this->input->post('contact'),
        'no_rekening' => $this->input->post('no_rekening'),
        'alamat' => $this->input->post('alamat'),
        'quantity' => $this->input->post('quantity'),
        'booking_code' => $this->input->post('booking_code'),
        'payment' => $this->input->post('payment'),
        'booking_date_start' => $this->input->post('date'),
        'time_of_arrival' => $this->input->post('time'),
        'sesi' => $this->input->post('sesi'),
        'status' => 'Belum Bayar'
      ];

      $this->db->insert('reservation', $data);
      

      // $this->send($data, $this->load->view("frontend/email_confirmation", $data, TRUE));
      session_destroy();

      $data["header"] = $this->load->view("frontend/template/header", null, true);
      $data["footer"] = $this->load->view("frontend/template/footer", null, true);
      $this->load->view('frontend/home', $data);
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