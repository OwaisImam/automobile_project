<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
    
    function __construct() {
        parent::__construct(); 
        $this->load->model('Productsmodel');
    }

    public function index()
    {
        $productsData = $this->Productsmodel->getProducts();
        $data['productsData'] = $productsData;
        $this->load->view('products',$data);
    }
    public function details()
    {
        $productData = $this->Productsmodel->getProductInfo();
        $data['prodDesc']= $productData;
        $this->load->view('productdetail',$data);
    }
}

?>