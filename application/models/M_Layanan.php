<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Layanan extends CI_Model {
        public function cek_kode($kode)
        {
            return $this->db->get_where('reservation', ['booking_code' => $kode])->row_array();
        }

        public function getData($kode)
        {
            return $this->db->get_where('reservation', ['booking_code' => $kode])->row_array();
        }
    }
    
    /* End of file M_Layanan.php */
    
?>