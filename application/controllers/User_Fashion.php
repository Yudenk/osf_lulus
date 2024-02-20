<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Fashion extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
        $this->load->model('Model_admin_fashion');       
    } 

    public function index()
    {              
        $data['tenants_fashion'] = $this->Model_admin_fashion->get();  
                
        $this->load->view("layout/user_header", $data);
        $this->load->view("user/vw_user_fashion", $data);
        $this->load->view("layout/user_footer", $data);
    }   
}