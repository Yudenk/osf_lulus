<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class User_home extends CI_Controller 
{
    public function __construct() 
    {
        
        parent::__construct(); 
        
        $this->load->model('Model_admin_event');     
        $this->load->model('Model_admin_fantasy');       
        $this->load->model('Model_admin_fashion');       
        $this->load->model('Model_admin_fb');          
        $this->load->model('Model_admin_member'); 
        $this->load->model('Model_admin_iklan');    
        require APPPATH.'libraries/phpmailer/src/Exception.php';
        require APPPATH.'libraries/phpmailer/src/PHPMailer.php';
        require APPPATH.'libraries/phpmailer/src/SMTP.php';      
    } 

    public function index()
    {              
        $data['event'] = $this->Model_admin_event->get();  
        $data['tenants_fb'] = $this->Model_admin_fb->get();  
        $data['tenants_fashion'] = $this->Model_admin_fashion->get();  
        $data['tenants_fantasy'] = $this->Model_admin_fantasy->get();  
        $data['iklan'] = $this->Model_admin_iklan->get();  
        $this->load->view("layout/user_header", $data);
        $this->load->view("user/vw_user_home", $data);
        $this->load->view("layout/user_footer", $data);
    }   

    public function coba()
    {
         $this->load->view('user/member_form');
    }

    public function about()
    {                                     
        $this->load->view("layout/user_header");
        $this->load->view("user/vw_user_about");
        $this->load->view("layout/user_footer");
    }

    public function getMemberDetails()
    {
          $member_id = $this->input->post('member_id');

        // Memanggil model untuk mendapatkan detail member
        $member = $this->db->get_where('membership', ['id_member' => $member_id])->row_array();

        // Membuat data untuk dikirim ke tampilan
        $data['member'] = $member;

        // Memuat tampilan modal dengan detail member
       $this->load->view('user/member_modal', $data);   
    }

    public function check()
    {                                     
        $this->load->view("layout/user_header");
        $this->load->view("user/vw_user_check");
        $this->load->view("layout/user_footer");
    }    

    public function search() {
        $data['membership'] = $this->Model_admin_member->get();
        $id_member = $this->input->post('id_member');
        $membership = $this->Model_admin_member->getById($id_member);
        if (!empty($membership)){
            $data['informasi'] = $membership;
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-successs" role="alert"><i class="icon fas fa-check-circle"></i> Data Membership Tidak Diketahui! </div>');
        }    
        $this->load->view("layout/user_header",$data);
        $this->load->view("user/vw_detail_membership",$data);
        $this->load->view("layout/user_footer",$data);
    }

    public function send() 
    {
     // PHPMailer object
        $response = false;
        $mail = new PHPMailer();

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'yuda19ti@mahasiswa.pcr.ac.id'; // user email anda
        $mail->Password = 'rfjatugqhjqrvmem'; // diisi dengan App Password yang sudah di generate
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;

        $mail->setFrom('yuda19ti@mahasiswa.pcr.ac.id', 'AWWYEAH'); // user email anda
        $mail->addReplyTo('yuda19ti@mahasiswa.pcr.ac.id', ''); //user email anda


        // Email subject
        $mail->Subject = 'SMTP CodeIgniter | AWWYEAH'; //subject email

        // Add a recipient
        $mail->addAddress($this->input->post('email')); //email tujuan pengiriman email

        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content
        $mailContent = "<p>Hallo, Perkenalkan saya <b>".$this->input->post('name')."</b></p>
        <table>
            <tr>
            <td>Nama</td>
            <td>:</td>
            <td>".$this->input->post('name')."</td>
            </tr>
            <tr>
            <td>Email</td>
            <td>:</td>
            <td>".$this->input->post('subject')."</td>
            </tr>
            <tr>
            <td>Isi Pesan</td>
            <td>:</td>
            <td>".$this->input->post('message')."</td>
            </tr>
        </table>
        <p> Demikian Pesan yang saya sampaikan, Terimakasih.</p>"; // isi email
        $mail->Body = $mailContent;

        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{            
            echo 'Message has been sent';
        }
        }
    }
