<?php
  class M_datauser extends CI_Model{
   
    function tampil_user(){
     return $this->db->get('data_user');
    }

    // function input_data($data,$table){
    //   $this->db->insert($table,$data);
    // }
  

  }
