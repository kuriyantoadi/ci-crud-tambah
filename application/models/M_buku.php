<?php
class M_buku extends CI_Model{
 function tambah_data($data_buku){
   $this->db->insert('tb_buku',$data_buku);
 }
}
