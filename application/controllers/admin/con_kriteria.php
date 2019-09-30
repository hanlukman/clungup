<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_Kriteria extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('model_kriteria'));
  }

  function index(){
    $data['hasil']=$this->model_kriteria->tampil_kriteria();
    $this->load->view('admin/lihat_kriteria', $data);
  }

  function input_kriteria(){
    $data['nama_kriteria']=$this->input->post('nama_kriteria');
    $cek=$this->db->query("select * from kriteria where nama_kriteria='".$data['nama_kriteria']."'")->result();
    if(!empty($cek)){
      echo "<script type='text/javascript'>alert('Kriteria Sudah Ada');</script>";
    }
    else{
      $this->model_kriteria->input_kriteria($data);
    }
    redirect(site_url()."/admin/con_kriteria/","refresh");
  }

  function delete_kriteria(){
    $this->model_kriteria->delete_kriteria($this->uri->segment(4));
    redirect(site_url()."/admin/con_kriteria/","refresh");
  }

  function edit_kriteria(){
    $data['id_kriteria']=$this->input->post('id_kriteria');
    $data['nama_kriteria']=$this->input->post('nama_kriteria');
    $cek=$this->db->query("select * from kriteria where nama_kriteria='".$data['nama_kriteria']."'")->result();
    if(!empty($cek)){
      echo "<script type='text/javascript'>alert('Kriteria Sudah Ada');</script>";
    }
    else{
      $this->model_kriteria->edit_kriteria($data);
    }
    redirect(site_url()."/admin/con_kriteria/","refresh");
  }

  function form_edit(){
    $cari=$this->model_kriteria->cari_data($this->uri->segment(4));
    foreach($cari->result() as $baris){
      $data['id_kriteria']=$baris->id_kriteria;
      $data['nama_kriteria']=$baris->nama_kriteria;
    }
    $this->load->view('admin/edit_kriteria',$data);
  }
}