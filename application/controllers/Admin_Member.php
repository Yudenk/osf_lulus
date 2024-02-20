<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Model_admin_member');
    }

    public function index()
    {
        $data['membership'] = $this->Model_admin_member->get();
        $this->load->view("layout/header", $data);
        $this->load->view("admin/vw_member_admin", $data);
        $this->load->view("layout/footer", $data);
    }
    public function detail($id)
    {
        $data['id_member'] = $this->Model_admin_member->getById($id);
    }

    
    public function update($id)
    {            
        $data = [
            'nama_member' => $this->input->post('nama_member'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'point' => $this->input->post('point'),            
        ];
            // var_dump($data);exit;        
            $this->Model_admin_member->update( $data,['id_member' => $id]);
            $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
            redirect('Admin_Member');
    }

    public function delete($id)
    {
        $this->Model_admin_member->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i> Data F&B Tidak dapat dihapus (sudah berelasi)! </div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-successs" role="alert"><i class="icon fas fa-check-circle"></i> Data F&B Berhasil dihapus! </div>');
        }
        redirect('Admin_Member/index');
    }

    public function upload()
    {
        $data = [
            'id_member' => $this->input->post('id_member'),
            'nama_member' => $this->input->post('nama_member'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'point' => $this->input->post('point'),         
        ];        
        
        //var_dump($data,$upload_image);exit;
        $this->Model_admin_member->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
        redirect('Admin_Member/index');
    }

    public function tambahpoint($id){
        $point = $this->input->post('point');

        $member = $this->db->get_where('membership', ['id_member' => $id])->row_array();


        $tambah = $member['point'] + $point;
        
          $this->db->set('point', $tambah);
        $this->db->where('id_member', $id);
        $this->db->update('membership');
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Point berhasil ditambahkan</div>');
            redirect('Admin_Member/index');
        
    }
   
}
