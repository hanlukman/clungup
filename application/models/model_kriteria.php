<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Kriteria extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  function tampil_kriteria(){
    $tampil=$this->db->get('kriteria');
    return $tampil;
  }

  function input_kriteria($data){
    $this->db->insert('kriteria',$data);
  }

  function delete_kriteria($id_kriteria){
    $this->db->where('id_kriteria',$id_kriteria);
    $this->db->delete('kriteria');
  }

  function cari_data($id_kriteria){
    $cari=$this->db->query("select * from kriteria where id_kriteria='".$id_kriteria."'");
    return $cari;
  }

  function edit_kriteria($data){
    $edit=array('nama_kriteria'=>$data['nama_kriteria']);
    $this->db->where('id_kriteria',$data['id_kriteria']);
    $this->db->update('kriteria',$edit);
  }

}
