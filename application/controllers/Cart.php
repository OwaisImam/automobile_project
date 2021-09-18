<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
    
    function __construct() {
        parent::__construct(); 
        $this->load->model('Productsmodel');
    }
    
    public function index()
    {
        if($this->session->userdata('cart'))
        {
            $data['cartProducts'] = array_values(unserialize($this->session->userdata('cart')));
            $data['total'] = $this->total();
            $data['shippingCost'] = $this->shippingTotal();
        }
        else
        {
            $data['cartProducts'] = "";
            $data['total'] = "";
            $data['shippingCost'] = "";
        }
        $this->load->view('cart',$data);
    }
    public function addcart()
    {
        $item = array(
            'id' => $this->input->post('product_id'),
            'name' => $this->input->post('product_name'),
            'price' => $this->input->post('product_price'),
            'quantity' => $this->input->post('quantity'),
            'prodimg' => $this->input->post('prod_img')
        );
       if(!$this->session->has_userdata('cart')) {
            $cart = array($item);
            $this->session->set_userdata('cart', serialize($cart));
        } 
        else {
            $index = $this->exists($this->input->post('product_id'));
            $cart = array_values(unserialize($this->session->userdata('cart')));
            if($index == -1) {
                array_push($cart, $item);
                $this->session->set_userdata('cart', serialize($cart));
            } else {
                $cart[$index]['quantity'] = $cart[$index]['quantity']+$this->input->post('quantity');
                $this->session->set_userdata('cart', serialize($cart));
            }
        }
        echo count(array_values(unserialize($this->session->userdata('cart'))));
        $this->session->set_flashdata('addedCartInfo','true');
    }
    public function removecartitem()
    {
        $id = $this->input->post('product_id');
        $index = $this->exists($id);
        $cart = array_values(unserialize($this->session->userdata('cart')));
        unset($cart[$index]);
        $this->session->set_userdata('cart', serialize($cart));
        redirect('cart');
    }
    private function exists($id)
    {
        $cart = array_values(unserialize($this->session->userdata('cart')));
        for ($i = 0; $i < count($cart); $i ++) {
            if ($cart[$i]['id'] == $id) {
                return $i;
            }
        }
        return -1;
    }
    private function total() {
        $items = array_values(unserialize($this->session->userdata('cart')));
        $s = 0;
        foreach ($items as $item) {
            $s += $item['price'] * $item['quantity'];
        }
        return $s;
    }
    public function shippingTotal()
    {
        $items = array_values(unserialize($this->session->userdata('cart')));
        $st = 0;
        foreach($items as $item) {
            if($item['id'] != 200)
            {
                $shippingCostDetail = $this->Productsmodel->getShippingCost($item['id']);
                $shippingCost = $shippingCostDetail->shipping_cost;
            }
            else
            {
                $shippingCost = 0;
            }
            $st +=  $shippingCost * $item['quantity'];
        }
        return $st;
    }
    public function checkout()
    {
        //var_dump($this->session->userdata);
        $this->load->model('usermodel');
        $user_id = $this->session->userdata('user_id');
        $data['userData'] = $this->usermodel->getUserData($user_id);
        //var_dump($data['userData']);exit;

        
                
        $data['cartProducts'] = array_values(unserialize($this->session->userdata('cart')));
        $data['total'] = $this->total();
        $data['shippingCost'] = $this->shippingTotal();
        $this->load->view('checkout',$data);
    }
    public function processcheckout()
    {
        $this->load->model('usermodel');
        $this->load->model('productsmodel');
        $orderTotal = $this->total()+$this->shippingTotal();
        $this->productsmodel->createOrder($orderTotal);
        $this->session->unset_userdata('cart');
        $this->load->view('ordersuccess');
    }
}