<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function  index()
    {
        /*$this->load->model('Productsmodel');
        $productsData = $this->Productsmodel->getProducts();
        $data['productsData'] = $productsData;
        $this->load->view('home',$data);*/
        $this->load->view('customer/home');
    }

}

?>