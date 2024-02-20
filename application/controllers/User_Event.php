<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Event extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
        $this->load->model('Model_admin_event');       
    } 

    public function index()
    {              
        $data['event'] = $this->Model_admin_event->get();  
                
        $this->load->view("layout/user_header", $data);
        $this->load->view("user/vw_user_event", $data);
        $this->load->view("layout/user_footer", $data);
    }   
    
    public function galery()
    { 
        $galeri['galery'] = $this->Model_admin_galery->get();
    }
}