<?php
error_reporting(0);
/**
 * Created by PhpStorm.
 * User: Hanif
 * Date: 20/03/2018
 * Time: 22.42
 */

class Cek_list extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper(array("url","form" ));
        $this->load->model("model_ceklist");
    }



    function adddata(){
        // load view

        // $data['content'] = $this->load->view('admin/write_ceklist');
        // $data["header"] = $this->load->view("admin/template/header");
        // $data["footer"] = $this->load->view("admin/template/footer");

        $data['listKodeBooking'] = $this->model_ceklist->getBookingCode();
        
        $data["header"] = $this->load->view("admin/template/header", null,true);
        $data["footer"] = $this->load->view("admin/template/footer", null,true);
        $this->load->view('admin/write_ceklist', $data);
}

    public function insert(){
        $data = $this->input->post();


        for ($i=1; $i <=14; $i++){
//            $this->model_ceklist->insert($data);

            $id = $this->input->post('id');
            $kd_book = $this->input->post('kd_book');
            $item = $this->input->post('item'.$i);
            $qty = $this->input->post('qty'.$i);
            $keterangan = $this->input->post('keterangan'.$i);

            $this->db->insert('cek_list', array('id' => $id, 'kd_book' => $kd_book, 'item' => $item, 'qty' => $qty, 'keterangan' => $keterangan));
        }


        redirect('admin/cek_list/index');
    }

    public function index()
    {        
        // $this->load->view("pelanggan_baru",$qq);

        // load view
        // $data['content'] = $this->load->view('admin/see_ceklist', $rr);
        // $data['script'] = '';
        // $data["header"] = $this->load->view("admin/template/header", $rr);
        // $data["footer"] = $this->load->view("admin/template/footer");

        // $data['kode_baca'] = $this->model_kodebaca->sortingdata();


        $data["datanya"] = $this->model_ceklist->all_ceklist();

        $data["header"] = $this->load->view("admin/template/header", null,true);
        $data["footer"] = $this->load->view("admin/template/footer", null,true);
        $this->load->view('admin/see_ceklist', $data);

    }
    public function hapus()
    {
        $this->model_ceklist->delete($this->uri->segment(3));
        redirect("admin/cek_list/index","refresh");
    }

    public function write_cek_list()
    {
        $this->load->view("admin/write_ceklist");
        // load view
        $data['title'] = '';
//        $data["header"] = $this->load->view("admin/template/header", null,true);
//        $data["footer"] = $this->load->view("admin/template/footer", null,true);
//        $data['content'] = $this->load->view('admin/write_ceklist', $rr, true);
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/footer', $data);



    }
    public function save_ceklist()
    {
        $dt["id"]=$this->input->post("id");
        $dt["kd_booking"]=$this->input->post("kd_booking");
        $dt["item"]=$this->input->post("item");
        $dt["qty"]=$this->input->post("qty");
        $dt["keterangan"]=$this->input->post("keterangan");

        $this->model_ceklist->menyimpan_ceklist($dt);

        redirect ("admin/cek_list/index");
    }

    public function edit($id){

        $data['cek_list']=$this->model_ceklist->getById($id);


        $this->load->view("admin/edit_ceklist", $data);
        // load view
//        $data['title'] = '';
//        $data["header"] = $this->load->view("admin/template/header", null, true);
//        $data["footer"] = $this->load->view("admin/template/footer", null, true);
//        $data['content'] = $this->load->view('admin/edit_ceklist', $data, true);
//        $data['script'] = '';

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/footer', $data);


        // if($this->input->post('submit')){
        //           $this->modele->update($id);
        //           redirect('pelanggan/index');
        //       }else{
        //       	$data['pelanggan']=$this->modele->getById($id)->result();

        //       	$this->load->view('edit_pelanggan',$data);
        //       }
    }

    public function update(){
//        $data = $this->input->post();



        for ($i=1; $i <=14; $i++){
//            $this->model_ceklist->insert($data);

            $id = $this->input->post('id'.$i);
            $data['item'] = $this->input->post('item'.$i);
            $data['qty']= $this->input->post('qty'.$i);
            $data['keterangan'] = $this->input->post('keterangan'.$i);



            $this->db->where('id', $id);
            $this->db->update('cek_list', $data);

//            $this->db->update('cek_list', array( 'kd_book' => $kd_book, 'item' => $item, 'qty' => $qty, 'keterangan' => $keterangan));
        }

        redirect('admin/cek_list/index','refresh');
    }

}
