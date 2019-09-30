<?php
/**
 * Created by PhpStorm.
 * User: Hanif
 * Date: 21/03/2018
 * Time: 21.29
 */

class Model_Ceklist extends CI_Model
{

    public function getBookingCode(){
        $query = $this->db->query("SELECT DISTINCT booking_code FROM `reservation` 
")->result();
        return $query;

    }
    public function all_ceklist()
    {

        $rr = $this->db->query("select distinct kd_book from cek_list");
        return $rr;
    }

    public function delete($kd_book)
    {
        $this->db->query("delete from cek_list where kd_book='".$kd_book."'");
    }

    public function getById($kd_book)
    {
        return $this->db->query("select * from cek_list where kd_book='$kd_book'")->result();
    }

//    public function insert($data)
//    {
////        $id = $this->input->post('id');
////        $kd_book = $this->input->post('kd_book');
////        $item = $this->input->post('item');
////        $qty = $this->input->post('qty');
////        $keterangan = $this->input->post('keterangan');
//
//
//        return $data;
//    }


    public function update($data)
    {

        $this->db->update('cek_list', $data);

    }

    public function save_ceklist()
    {
        $dt["id"]=$this->input->post("id");
        $dt["kd_book"]=$this->input->post("kd_book");
        $dt["item"]=$this->input->post("item");
        $dt["qty"]=$this->input->post("qty");
        $dt["keterangan"]=$this->input->post("keterangan");

        $this->model_ceklist->menyimpan_ceklist($dt);

        redirect ("admin/cek_list/index");
    }


}