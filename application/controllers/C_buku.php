<?php
  class C_buku extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->model('M_buku');
    }

    function index(){
      $this->load->view('main');
    }

    function i(){
      $this->load->view('input');
    }

    function input(){
      $judul = $this->input->post('judul');
      $tebal = $this->input->post('tebal');
      $penerbit = $this->input->post('penerbit');

      $data_buku = array(
      'judul'=>$judul,
      'tebal'=>$tebal,
      'penerbit'=>$penerbit
      );

      $this->M_buku->tambah_data($data_buku);
      redirect('C_buku');
    }
  }
?>
