<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    use Dompdf\Dompdf;
    
    class Pdf extends Dompdf {
    
        public $filename;
        
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->filename = "laporan.pdf";
        }
        
        public function ci()
        {
            return get_instance();
        }

        public function load_view($view, $data = array())
        {
            $html = $this->ci()->load->view($view, $data, TRUE);
            $this->load_html($html);
            $this->render();
            $this->stream($this->filename, array("Attachment" => FALSE));
        }
    }
    
    /* End of file Pdf.php */
    
?>