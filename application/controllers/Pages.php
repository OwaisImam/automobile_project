<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    
    function __construct() {
        parent::__construct(); 
    }

    public function about()
    {
        $this->load->view('about');
    }
    
    public function legal()
    {
        $this->load->view('legal');   
    }
}

?>