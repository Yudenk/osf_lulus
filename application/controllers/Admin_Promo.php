<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Promo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Model_admin_promo');        
    }

    public function index()
    {
        $data['promo'] = $this->Model_admin_promo->get();
        $this->load->view("layout/header", $data);
        $this->load->view("admin/vw_promo_admin", $data);
        $this->load->view("layout/footer", $data);
    }
    public function detail($id)
    {
        $data['promo'] = $this->Model_admin_promo->getById($id);
    }

    
    public function update($id)
    {
        
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
        $data = [
            'nama_tenant' => $this->input->post('nama_tenant'),
            'tanggal_promo' => $this->input->post('tanggal_promo'),
            'deskripsi' => $this->input->post('deskripsi'),            
            'gambar' =>$upload_image,
        ];
            // var_dump($data,$upload_image);exit;
        //     $id = $this->input->post('id_tenants_fb');
            $this->Model_admin_promo->update( $data,['id_promo' => $id]);
            $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
            redirect('Admin_Promo');
    }

    public function delete($id)
    {
        $this->Model_admin_promo->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i> Data F&B Tidak dapat dihapus (sudah berelasi)! </div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-successs" role="alert"><i class="icon fas fa-check-circle"></i> Data F&B Berhasil dihapus! </div>');
        }
        redirect('Admin_Promo/index');
    }

    public function upload()
    {
        $data = [
            'nama_tenant' => $this->input->post('nama_tenant'),
            'tanggal_promo' => $this->input->post('tanggal_promo'),
            'deskripsi' => $this->input->post('deskripsi'),                        
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
        //var_dump($data,$upload_image);exit;
        $this->Model_admin_promo->insert($data, $upload_image);
        $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
        redirect('Admin_Promo/index');
    }
}
