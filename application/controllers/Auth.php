<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model','userrole');
        $this->load->model('User_model');
        
    }

    public function index()
    {                        
        $this->load->view("auth/vw_login");        
    }       

    public function cek_regis()
    { 
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'gambar' => 'default.jpg',
            'role' => 'Admin',            
        ];        

        $this->userrole->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun telah berhasil didaftarkan</div>');
        redirect('auth');
    }


    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'id' => $user['id'],
                ];
                $this->session->set_userdata($data);               
                if ($user['role'] == 'Admin') {
                    redirect('Admin_Dashboard');
                } else {
                    redirect('User_home');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Terdaftar </div>');
            redirect('auth');
        }
    }


    public function logout() 
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Berhasil Logout </div>');
        redirect('auth');
    }

    public function delete($id)
    {
        $this->User_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i> Data F&B Tidak dapat dihapus (sudah berelasi)! </div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-successs" role="alert"><i class="icon fas fa-check-circle"></i> Data F&B Berhasil dihapus! </div>');
        }
        redirect('Admin_Dashboard/index');
    }

    public function detail($id)
    {
        $data['user'] = $this->User_model->getById($id);
        
    }

    public function detail_profil($id)
    {
        $data['user'] = $this->User_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("admin/vw_admin_detail", $data);
        $this->load->view("layout/footer", $data);     
        
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
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'gambar' =>$upload_image,
            'role' => $this->input->post('role'),                       
                        
        ];
            //var_dump($data,$upload_image);exit;        
            $this->User_model->update( $data,['id' => $id]);            
            $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
            redirect('Admin_Dashboard/index');
    }
}
