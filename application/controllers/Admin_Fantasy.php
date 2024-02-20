<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Fantasy extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Model_admin_fantasy');
    }

    public function index()
    {
        $data['tenants_fantasy'] = $this->Model_admin_fantasy->get();
        $this->load->view("layout/header", $data);
        $this->load->view("admin/vw_fantasy_admin", $data);
        $this->load->view("layout/footer", $data);
    }
    public function detail($id)
    {
        $data['tenants_fantasy'] = $this->Model_admin_fantasy->getById($id);
    }

    
    public function update($id)
    {
        
        
        $data = [
            'nama_brand_fantasy' => $this->input->post('nama_brand_fantasy'),
            'area_fantasy' => $this->input->post('area_fantasy'),
            'kategori_fantasy' => $this->input->post('kategori_fantasy'),
            'keterangan_fantasy' => $this->input->post('keterangan_fantasy'),
            'owner_fantasy' => $this->input->post('owner_fantasy'),
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
            $this->Model_admin_fantasy->update( $data,['id_tenants_fantasy' => $id]);
            $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
            redirect('Admin_Fantasy');
    }

    public function delete($id)
    {
        $this->Model_admin_fantasy->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i> Data F&B Tidak dapat dihapus (sudah berelasi)! </div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-successs" role="alert"><i class="icon fas fa-check-circle"></i> Data F&B Berhasil dihapus! </div>');
        }
        redirect('Admin_Fantasy/index');
    }

    public function upload()
    {
        $data = [
            'nama_brand_fantasy' => $this->input->post('nama_brand_fantasy'),
            'area_fantasy' => $this->input->post('area_fantasy'),
            'kategori_fantasy' => $this->input->post('kategori_fantasy'),
            'keterangan_fantasy' => $this->input->post('keterangan_fantasy'),
            'owner_fantasy' => $this->input->post('owner_fantasy'),
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
        //var_dump($data,$upload_image);exit;
        $this->Model_admin_fantasy->insert($data, $upload_image, $upload_background);
        $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
        redirect('Admin_Fantasy/index');
    }

    
}
