<?php
  class M_datapasien extends CI_Model{
   
    function tampil_data(){
     return $this->db->get('data_pasien');
    }

    function input_data($data,$table){
      $this->db->insert($table,$data);
    }
  

  }

