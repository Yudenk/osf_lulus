<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_FB extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Model_admin_fb');
    }

    public function index()
    {
        $data['tenants_fb'] = $this->Model_admin_fb->get();
        $this->load->view("layout/header", $data);
        $this->load->view("admin/vw_fb_admin", $data);
        $this->load->view("layout/footer", $data);
    }
    public function detail($id)
    {
        $data['tenants_fb'] = $this->Model_admin_fb->getById($id);
    }

    
    public function update($id)
    {
        
        
        $data = [
            'nama_brand_fb' => $this->input->post('nama_brand_fb'),
            'area_fb' => $this->input->post('area_fb'),
            'kategori_fb' => $this->input->post('kategori_fb'),
            'keterangan_fb' => $this->input->post('keterangan_fb'),
            'owner_fb' => $this->input->post('owner_fb'),
            'hp_owner' => $this->input->post('hp_owner'),
            'status' => $this->input->post('status'),           
        ];
        $upload_image = $_FILES['gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|PNG|JPG|jpeg|JPEG';
            $config['max_size'] = '1000000000';
            $config['upload_path'] = './gambar/';
            $this->upload->initialize($config);
            if ($this->upload->do_upload('gambar')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $upload_background = $_FILES['background']['name'];
        if ($upload_background) {
            $config['allowed_types'] = 'gif|jpg|png|PNG|JPG|jpeg|JPEG';
            $config['max_size'] = '1000000000';
            $config['upload_path'] = './gambar/';
            $this->upload->initialize($config);
            if ($this->upload->do_upload('background')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('background', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
            // var_dump($data,$upload_image);exit;
        //     $id = $this->input->post('id_tenants_fb');
            $this->Model_admin_fb->update( $data,['id_tenants_fb' => $id]);
            $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">
            <span class="fe fe-help-circle fe-16 mr-2"></span> Data Tenants Food & Beverage berhasil diupdate </div>');
            redirect('Admin_FB');
    }

    public function delete($id)
    {
        $this->Model_admin_fb->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">
            <span class="fe fe-minus-circle fe-16 mr-2"></span> Data tenants Food & Beverage Gagal Dihapus </div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
            <span class="fe fe-alert-triangle fe-16 mr-2"></span> Data tenants Food & Beverage Berhasil Dihapus</div>');
        }
        redirect('Admin_FB/index');
    }

    public function upload()
    {
        $data = [
            'nama_brand_fb' => $this->input->post('nama_brand_fb'),
            'area_fb' => $this->input->post('area_fb'),
            'kategori_fb' => $this->input->post('kategori_fb'),
            'keterangan_fb' => $this->input->post('keterangan_fb'),
            'owner_fb' => $this->input->post('owner_fb'),
            'hp_owner' => $this->input->post('hp_owner'),
            'status' => $this->input->post('status')
        ];
        $upload_image = $_FILES['gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|PNG|JPG|jpeg|JPEG';
            $config['max_size'] = '1000000000';
            $config['upload_path'] = './gambar/';
            $this->upload->initialize($config);
            if ($this->upload->do_upload('gambar')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $upload_background = $_FILES['background']['name'];
        if ($upload_background) {
            $config['allowed_types'] = 'gif|jpg|png|PNG|JPG|jpeg|JPEG';
            $config['max_size'] = '1000000000';
            $config['upload_path'] = './gambar/';
            $this->upload->initialize($config);
            if ($this->upload->do_upload('background')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('background', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        //var_dump($data,$upload_image);exit;
        $this->Model_admin_fb->insert($data, $upload_image,$upload_background);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        <span class="fe fe-help-circle fe-16 mr-2"></span> Data Tenants Food & Beverage berhasil ditambah </div>');
        redirect('Admin_FB/index');
    }    
}
