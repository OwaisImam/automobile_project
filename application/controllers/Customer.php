<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require("Mailer/PHPMailerAutoload.php");
class Customer extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('usermodel');
        $this->load->model('productsmodel');
    }
    public function  index()
    {
        $this->load->view('customer/home');
    }
    public function contact(){
        if(isset($_POST['submit'])) {
            $name = $this->input->post('name'); 	
            $contact = $this->input->post('contact'); 	
            $rating = $this->input->post('rating'); 	
            $subject = $this->input->post('subject'); 	
            $message = $this->input->post('message'); 
            $postData = array(	
                'name' => $name,	
                'contact' => $contact,	
                'message' => $message,	
                'rating' => $rating,	
                'subject' => $subject,	
            );	
            $email ='suvvada.varalakshmi1@gmail.com'; //Default to whom contact msg will send
            $data = $this->usermodel->contactDetails($postData);

            if($data!=""){
                $test = $this->emailNotification($email,$subject,$message);
                if($test['sent']==1){
                    $response = $this->load->view('customer/home',$test,TRUE);
                }else{
                    $response = $this->load->view('customer/home',$test,TRUE);
                }
            }
        }
    }
    private function emailNotification($email,$subject,$body){
        $mail = new PHPMailer(true);
        $mail->Host = 'smtp.gmail.com';
        $mail->isSMTP();
       // $mail->SMTPDebug = 2; 
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'sandeepautomobile91@gmail.com';                
        $mail->Password = 'sandeep@girija';                           
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->setFrom('sandeepautomobile91@gmail.com', 'Automobiles');
        $mail->addAddress($email, 'automobile');    
        $mail->isHTML(true);                               
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = $body;
        if(!$mail->send()) {
            $res['sent'] =0;
            $res['err'] =$mail->ErrorInfo;
        } else {
            $res['sent'] =1;
            $res['err'] ='';
        }
        return $res;
    }
	public function  login()
    {
        $this->load->view('customer/login');
    }
    public function  order()
    {
        $this->load->view('customer/order');
    }
    public function  help()
    {
        $this->load->view('customer/help');
    }
    public function  chat()
    {
        $this->load->view('customer/chat');
    }
    public function  preownedvehicles()
    {
        $this->load->view('customer/preownedvehicles');
    }
    public function  productdescription()
    {
        $this->load->view('customer/productdescription');
    }
    public function  promotions()
    {
        $this->load->view('customer/promotions');
    }
    public function  twowheelers()
    {
        $this->load->view('customer/twowheelers');
    }
    public function  vehicleservice()
    {
        
        $this->load->view('customer/vehicleservice');
    }
     public function  twowaccessories()
    {
        
        $this->load->view('customer/twowaccessories');
    }
    public function  twowinsurance()
    {
        
        $this->load->view('customer/twowinsurance');
    }
    public function  twowspareparts()
    {
        
        $this->load->view('customer/twowspareparts');
    }
}

?>