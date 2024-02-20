<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Model_admin_daftar');        
    }

    public function index()
    {
        $data['daftar'] = $this->Model_admin_daftar->get();
        $this->load->view("layout/header", $data);
        $this->load->view("admin/vw_daftar_admin", $data);
        $this->load->view("layout/footer", $data);
    }
    public function detail($id)
    {
        $data['daftar'] = $this->Model_admin_daftar->getById($id);
    }

    
    public function update($id)
    {
                
        $data = [
            'nama_pemilik' => $this->input->post('nama_pemilik'),
            'nama_product' => $this->input->post('nama_product'),
            'jenis_product' => $this->input->post('jenis_product'),                        
            'no_hp' => $this->input->post('no_hp'),                                                     
            'status' => $this->input->post('status'),                                                     
        ];
            // var_dump($data);exit;        
            $this->Model_admin_daftar->update( $data,['id_daftar' => $id]);
            $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
            redirect('Admin_Daftar');
    }

    public function delete($id)
    {
        $this->Model_admin_daftar->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i> Data Request Tidak dapat dihapus (sudah berelasi)! </div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-successs" role="alert"><i class="icon fas fa-check-circle"></i> Data Request Berhasil dihapus! </div>');
        }
        redirect('Admin_Daftar/');
    }

    public function upload()
    {
        $data = [
            'nama_pemilik' => $this->input->post('nama_pemilik'),
            'nama_product' => $this->input->post('nama_product'),
            'jenis_product' => $this->input->post('jenis_product'),                        
            'no_hp' => $this->input->post('no_hp'),
            'status' => $this->input->post('status'),                                                         
        ];        
        //var_dump($data,$upload_image);exit;
        $this->Model_admin_daftar->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
        redirect('Admin_Daftar/');
    }

    
}
