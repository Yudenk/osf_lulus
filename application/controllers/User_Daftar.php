<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Daftar extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
        $this->load->model('Model_admin_daftar');       
    } 

    public function index()
    {              
        $data['daftar'] = $this->Model_admin_daftar->get();
        $this->load->view("layout/user_header", $data);
        $this->load->view("user/vw_user_contact", $data);
        $this->load->view("layout/user_footer", $data);
    }       

    public function upload()
    {
        $data = [
            'nama_pemilik' => $this->input->post('nama_pemilik'),
            'nama_product' => $this->input->post('nama_product'),
            'jenis_product' => $this->input->post('jenis_product'),                        
            'no_hp' => $this->input->post('no_hp'),                        
            
        ];        
        //var_dump($data);exit;
        $this->Model_admin_daftar->insert($data);
        $this->session->set_flashdata('message', 'Request Berhasil Diajukan');
        redirect('User_Daftar/');
    }
}