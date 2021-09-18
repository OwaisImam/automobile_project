<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    
    function __construct() {
        parent::__construct(); 
        $this->load->model('usermodel');
    }

    public function register()
    {
        if(isset($_SERVER['HTTP_REFERER']))
            $link= $_SERVER['HTTP_REFERER'];
        else
            $link = "";
        $link_array = explode('/',$link);
        $prev_page = end($link_array);
        if($prev_page == 'cart')
        {
            $this->session->set_userdata('prev_page','cart');
        }
        if(isset($_POST['register']))
        {
            //echo 'if';exit;
            $password = $this->input->post('password'); 
            $confirm_password = $this->input->post('confirm_password'); 
            if($password != $confirm_password) {
               redirect("users/register?msg=Password and Confirm password not matched");
            } else {

                $queryResult = $this->usermodel->registerUser();
                //var_dump($queryResult);
                if($queryResult != Null && $this->session->prev_page == 'cart')
                {
                    $this->session->set_userdata('user_name',$queryResult->user_name);
                    $this->session->set_userdata('user_id',$queryResult->user_id);
                    $this->session->unset_userdata('prev_page');
                    redirect('cart');
                }
                else if($queryResult != Null )
                {
                    $this->session->set_userdata('user_name',$queryResult->user_name);
                    $this->session->set_userdata('user_id',$queryResult->user_id);
                    //redirect('home');
                    redirect('dashboard');
                }
                else
                {
                    redirect('login');
                }
            }
        }
        $this->load->view('registration');
    }
    public function checklogin() /* Used For Ajax Login Check */
    {
        if($this->session->userdata('user_name') == FALSE)
            echo "false";
        else
        {
            $seller_result = $this->usermodel->checkSeller();
            echo $seller_result;
        }
    }

    public function isReferalCodeavailable()
    {
            $this->load->model('usermodel');
            $referalCode = $_POST['referalCode'];
            $response = $this->usermodel->isReferalCodeavailable($referalCode);
            print_r(json_encode($response));
            //print $response;
    }

    public function validateReferal() /* Used for Ajax Referal Check */
    {
        $this->load->model('productsmodel');
        $referal_result = $this->usermodel->checkReferal();
        $membershipfee = $this->productsmodel->getMembershipCharge();
        if($referal_result == 'validated')
        {
            $item = array(
                'id' => 200,
                'name' => 'Seller Membership',
                'price' => $membershipfee->application_fee,
                'quantity' => '1'
            );
            $cart = array_values(unserialize($this->session->userdata('cart')));
            array_push($cart, $item);
            $this->session->set_userdata('cart', serialize($cart));
            echo "validated";
        }
        else
        {
            echo $referal_result;
        }
    }

    public function dealer()
    {
        $this->load->view('dealer');
    }

    public function becameadealer()
        {
            $this->load->model('usermodel');
            $user_id = $this->session->userdata('user_id');
            $data['userData'] = $this->usermodel->getUserData($user_id);

            $receiptSaved = 0;
            $errors = [];
            $data['receiptSaved'] = $receiptSaved;
            $data['errors'] = $errors;
            
            define('UPLOAD_DIR', 'assets/images');
            //define('UPLOAD_DIR', 'upload');
            define('UPLOAD_MAX_FILE_SIZE', 10485760); // 10MB.
            //@changed_2018-02-17_14.28
            define('UPLOAD_ALLOWED_MIME_TYPES', 'image/jpeg,image/png,image/gif');

            $this->load->model('usermodel');
                    
            if(isset($_POST['submit'])) {
                if (!is_dir(UPLOAD_DIR)) {
                    mkdir(UPLOAD_DIR, 0777, true);
                }
                $filenamesToSave = [];
                $allowedMimeTypes = explode(',', UPLOAD_ALLOWED_MIME_TYPES);
                /*
                 * Upload files.
                 */
                if (!empty($_FILES)) {
                    if (isset($_FILES['file']['error'])) {
                        foreach ($_FILES['file']['error'] as $uploadedFileKey => $uploadedFileError) {
                            if ($uploadedFileError === UPLOAD_ERR_NO_FILE) {
                                $errors[] = 'You did not provide any files.';
                            } elseif ($uploadedFileError === UPLOAD_ERR_OK) {
                                $uploadedFileName = basename($_FILES['file']['name'][$uploadedFileKey]);

                                if ($_FILES['file']['size'][$uploadedFileKey] <= UPLOAD_MAX_FILE_SIZE) {
                                    $uploadedFileType = $_FILES['file']['type'][$uploadedFileKey];
                                    $uploadedFileTempName = $_FILES['file']['tmp_name'][$uploadedFileKey];

                                    $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;

                                    if (in_array($uploadedFileType, $allowedMimeTypes)) {
                                        if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                                            $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                                        } else {
                                            $filenamesToSave[] = $uploadedFilePath;
                                            //$filenamesToSave = $uploadedFilePath;
                                        }
                                    } else {
                                        $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                                    }
                                } else {
                                    $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                                }
                            }
                        }
                    }
                }
                $string = implode(',', $filenamesToSave);
                $data = array(
                    'paymentReceipt' => $string                    
                );
                //var_dump($data);exit;
                //$this->load->model('productsmodel');
                $user_id = $this->session->userdata('user_id');
                $result = $this->usermodel->updatePaymentReceipt($data,$user_id);
                
                if ($result) {
                     $receiptSaved = 1;
                }
                $data['receiptSaved'] = $receiptSaved;
                $data['errors'] = $errors;
                $data['userData'] = $this->usermodel->getUserData($user_id);
            }
         $this->load->view('becameadealer',$data);
    }

    public function getAdminReferal() /* Used for get Company referal Id*/
    {
        $this->load->model('productsmodel');
        $admin_users = $this->usermodel->getCompanyReferal();
        $membershipfee = $this->productsmodel->getMembershipCharge();
        foreach($admin_users as $userdata)
        {
            $referal_count_Check = $this->usermodel->checkRefereeCount($userdata->user_id);
            if($referal_count_Check <= 3)
            {
                $this->session->set_userdata('referredby',$userdata->user_id);
                break;
            }
        }
        $item = array(
            'id' => 200,
            'name' => 'Seller Membership',
            'price' => $membershipfee->application_fee,
            'quantity' => '1'
        );
        $cart = array_values(unserialize($this->session->userdata('cart')));
        array_push($cart, $item);
        $this->session->set_userdata('cart', serialize($cart));
        echo "validated";

    }
    public function checkMobileNumber()
    {
        /*$mobileStatus = $this->usermodel->checkMobileNumberExist();
        if($mobileStatus > 0)
        {
            echo "error";
        }*/
    }
    public function  checkEmailExist()
    {
        /*$emailStatus = $this->usermodel->checkEmailExist();
        if($emailStatus > 0)
        {
            echo "error";
        }*/
    }

    public function checkUsernameExist()
    {
        $usernameStatus = $this->usermodel->checkUsernameExist();
        if($usernameStatus > 0)
        {
            //print $usernameStatus;
             echo "error";
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('user_id');
        redirect('home');
    }
    
}

?>