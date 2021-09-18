<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    function __construct() {
        parent::__construct(); 
    }

    public function index()
    {
        //echo $link= $_SERVER['HTTP_REFERER'];
        if(isset($_SERVER['HTTP_REFERER'])) {
            $link= $_SERVER['HTTP_REFERER'];
            $link_array = explode('/',$link);
            $prev_page = end($link_array);
            if($prev_page == 'cart')
            {
                $this->session->set_userdata('prev_page','cart');
            }
            $this->load->view('login');
        }
        
    }
    
    public function process()
    {
        $this->load->model('usermodel');
        $this->usermodel->checkLogin();
    }
}

?>