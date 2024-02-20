<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_FB extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
        $this->load->model('Model_admin_fb');       
    } 

    public function index()
    {              
        $data['tenants_fb'] = $this->Model_admin_fb->get();  
                
        $this->load->view("layout/user_header", $data);
        $this->load->view("user/vw_user_fb", $data);
        $this->load->view("layout/user_footer", $data);
    }   
}