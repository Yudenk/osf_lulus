<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Fantasy extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
        $this->load->model('Model_admin_fantasy');       
    } 

    public function index()
    {              
        $data['tenants_fantasy'] = $this->Model_admin_fantasy->get();  
                
        $this->load->view("layout/user_header", $data);
        $this->load->view("user/vw_user_fantasy", $data);
        $this->load->view("layout/user_footer", $data);
    }   
}