<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model','userrole');
        $this->load->model('Model_admin_barang');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->Model_admin_barang->get();
        $this->load->view("layout/header", $data);
        $this->load->view("admin/vw_barang_admin", $data);
        $this->load->view("layout/footer", $data);
    }
    public function detail($id)
    {
        $data['barang'] = $this->Model_admin_barang->getById($id);
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
            'nama_barang' => $this->input->post('nama_barang'),
            'stok' => $this->input->post('stok'),
            'harga' => $this->input->post('harga'),            
            'gambar' =>$upload_image,            
        ];            
            $this->Model_admin_barang->update( $data,['id_barang' => $id]);
            $this->session->set_flashdata('message', 'Data Barang Berhasil Disimpan');
            redirect('Admin_Barang');
    }

    public function delete($id)
    {
        $this->Model_admin_barang->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i> Data Barang Tidak dapat dihapus (sudah berelasi)! </div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-successs" role="alert"><i class="icon fas fa-check-circle"></i> Data Barang Berhasil dihapus! </div>');
        }
        redirect('Admin_Barang/index');
    }

    public function upload()
    {
        $data = [
            'nama_barang' => $this->input->post('nama_barang'),
            'stok' => $this->input->post('stok'),
            'harga' => $this->input->post('harga'),                                   
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
        $this->Model_admin_barang->insert($data, $upload_image);
        $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
        redirect('Admin_Barang/index');
    }    
}
