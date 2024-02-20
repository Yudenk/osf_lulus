<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Galery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Model_admin_galery');
    }

    public function index()
    {
        $data['groupImage'] = $this->Model_admin_galery->getDataGroup();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/vw_galery_admin', $data);
        $this->load->view('layout/footer', $data);
    }

    public function file()
    {
        $upload_image = $_FILES['image']['name'];
        if ($upload_image) {
            $numberOfFiles = sizeof($upload_image);
            $files = $_FILES['image'];
            $config['allowed_types'] = 'gif|jpg|png|PNG|JPG|jpeg|JPEG';
            $config['max_size'] = '1000000000';
            $config['upload_path'] = './gambar/galery/';
            $this->load->library('upload',$config);
            for ($i = 0; $i < $numberOfFiles; $i++){
                $_FILES['image']['name'] = $files['name'][$i];
                $_FILES['image']['type'] = $files['type'][$i];
                $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['image']['error'] = $files['error'][$i];
                $_FILES['image']['size'] = $files['size'][$i];

                $this->upload->initialize($config);
                if ($this->upload->do_upload('image')){
                    $data = $this->upload->data();
                    $imageName = $data['file_name'];                 
                    $cek = $this->Model_admin_galery->cekData();
                    if (!$cek){
                        $groupImage = 1;
                    }else{
                        $groupImage = $cek['group_image'] + 1;
                    }  
                    var_dump($imageName);
                    $insert[$i]['image'] = $imageName;
                    $insert[$i]['group_image'] = $groupImage;                    
                }
               
            }
            if(!$insert && !$data){
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                <span class="fe fe-minus-circle fe-16 mr-2"></span> Tidak ada data yang dipilih </div>');
                redirect('Admin_Galery');
            }else{
                if ($this->Model_admin_galery->upload($insert, $data['file_name']) >0 ) {
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
                    <span class="fe fe-help-circle fe-16 mr-2"></span> Data Galery Berhasil Disimpan');
                    redirect('Admin_Galery');
                }else{
                    $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">
                    <span class="fe fe-minus-circle fe-16 mr-2"></span> Data Galery Gagal Disimpan </div>');
                    redirect('Admin_Galery');
                };
            }
        }
    }
    public function detail($group)
    {   
        $data['images'] = $this->Model_admin_galery->getDataImage($group);
        $this->load->view('layout/header', $data);
        $this->load->view('Admin/vw_admin_detailgalery', $data);
        $this->load->view('layout/footer', $data);
        
    }
}
