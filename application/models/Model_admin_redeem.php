<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin_redeem extends CI_Model
{
   
    public function getMemberId($id)
    {
       $query = "SELECT * from membership where id_member = '$id'";
        return $this->db->query($query)->row_array();
    }

     public function getBarangId($id)
    {
       $query = "SELECT * from barang where id_barang = '$id'";
        return $this->db->query($query)->row_array();
    }
   
}
?>