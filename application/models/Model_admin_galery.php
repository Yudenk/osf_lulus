<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin_galery extends CI_Model
{
    public $table = 'galery';
    public $id = 'id';
    public function __construct()
    {
        parent::__construct();
    }

    public function cekData()
    {
        $this->db->limit(1);
        $this->db->order_by('group_image','DESC');
        return $this->db->get('galery') ->row_array();
    }

    public function upload($insert, $data)
    {
        $this->db->insert_batch('galery',$insert);
        $this->db->set('main_image',1);
        $this->db->where('image',$data);
        $this->db->update('galery');
        return $this->db->affected_rows();
    }

    public function getDataGroup()
    {
        $this->db->where('main_image =', 1);
        $this->db->group_by('group_image');
       return $this->db->get('galery')->result_array();
    }

    public function getDataImage($group)
    {
        return $this->db->get_where('galery',['group_image' => $group])->result_array();
    }
   
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}
?>