<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Event extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Model_admin_event');
    }

    public function index()
    {
        $data['event'] = $this->Model_admin_event->get();
        $this->load->view("layout/header", $data);
        $this->load->view("admin/vw_event_admin", $data);
        $this->load->view("layout/footer", $data);
    }
    public function detail($id)
    {
        $data['event'] = $this->Model_admin_event->getById($id);
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
            'nama_event' => $this->input->post('nama_event'),
            'tanggal_awal' => $this->input->post('tanggal_awal'),
            'tanggal_akhir' => $this->input->post('tanggal_akhir'),
            'keterangan' => $this->input->post('keterangan'),
            'kategori' => $this->input->post('kategori'),            
            'gambar' =>$upload_image,
        ];
            // var_dump($data,$upload_image);exit;
        //     $id = $this->input->post('id_tenants_fb');
            $this->Model_admin_event->update( $data,['id_event' => $id]);
            $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
            redirect('Admin_Event');
    }

    public function delete($id)
    {
        $this->Model_admin_event->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i> Data F&B Tidak dapat dihapus (sudah berelasi)! </div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-successs" role="alert"><i class="icon fas fa-check-circle"></i> Data F&B Berhasil dihapus! </div>');
        }
        redirect('Admin_Event/index');
    }

    public function upload()
    {
        $data = [
            'nama_event' => $this->input->post('nama_event'),
            'tanggal_awal' => $this->input->post('tanggal_awal'),
            'tanggal_akhir' => $this->input->post('tanggal_akhir'),
            'keterangan' => $this->input->post('keterangan'),
            'kategori' => $this->input->post('kategori'),
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
        $this->Model_admin_event->insert($data, $upload_image);
        $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
        redirect('Admin_Event/index');
    }       
}
