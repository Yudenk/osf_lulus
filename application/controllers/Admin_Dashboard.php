<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Dashboard extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();   
        is_logged_in();  
        $this->load->model('Model_admin_fb');
        $this->load->model('Model_admin_fashion');
        $this->load->model('Model_admin_fantasy');   
        $this->load->model('User_model');
        $this->load->model('Model_admin_iklan');        
    } 

    public function index()
    {           
        $data['user'] = $this->User_model->get();
        $data['tenants_fb'] = $this->Model_admin_fb->tfood();
        $data['tenants_fashion'] = $this->Model_admin_fashion->tfashion();
        $data['tenants_fantasy'] = $this->Model_admin_fantasy->tfantasy();
        $data['us'] = $this->User_model->tuser();
        $data['iklan'] = $this->Model_admin_iklan->get();                
        $this->load->view("layout/header",$data);
        $this->load->view("admin/vw_dashboard_admin",$data);
        $this->load->view("layout/footer");
    }         

    public function update($id)
    {       
        $upload_image = $_FILES['gambar_iklan']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|PNG|JPG|jpeg|JPEG';
            $config['max_size'] = '1000000000';
            $config['upload_path'] = './gambar/';
            $this->upload->initialize($config);
            if ($this->upload->do_upload('gambar_iklan')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar_iklan', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }        
            // var_dump($data,$upload_image);exit;
        //     $id = $this->input->post('id_tenants_fb');
            $this->Model_admin_iklan->update(['id_iklan' => $id]);
            $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">
            <span class="fe fe-help-circle fe-16 mr-2"></span> Data Iklan Berhasil Diubah </div>');
            redirect('Admin_Dashboard');
    }    

    public function detail($id)
    {
        $data['iklan'] = $this->Model_admin_iklan->getById($id);
    }
}
