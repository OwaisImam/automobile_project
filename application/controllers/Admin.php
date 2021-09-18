<?php
    class Admin extends CI_Controller {

        function __construct() {
            parent::__construct();

        }

        public function index()
        {
            $this->load->view('adminlogin');
        }
        public function process()
        {
             $this->load->model('adminusermodel');
             $this->adminusermodel->checkLogin();
        }

        public function formeditors()
        {
            $this->load->view('admin/formeditors');
        }

        public function dashboard()
        {
            $this->checkLogin();
            $this->load->model('adminusermodel');
            $data['users'] = $this->adminusermodel->getUsers();
            $this->load->view('admin/dashboard',$data);
        }
        public function orders()
        {
            $this->checkLogin();
            $this->load->model('adminusermodel');
            $data['orders'] = $this->adminusermodel->getOrders();
            $this->load->view('admin/orders',$data);
        }

        public function vieworder()
        {
            $this->checkLogin();
            $this->load->model('adminusermodel');
            // $data['orders'] = $this->adminusermodel->getOrders();
            if(isset($_GET['orderId'])) {
                $this->load->model('adminusermodel');
                //echo $_GET['productId'];exit;
                $data['orders'] = $this->adminusermodel->getOrderInfoById($_GET['orderId']);
                //var_dump($data);
                //$this->load->view('admin/editproduct',$data);
            }
            $this->load->view('admin/vieworder',$data);
        }

        public function adminorders()
        {
            $this->checkLogin();
            $this->load->model('adminusermodel');
            $data['orders'] = $this->adminusermodel->getOrders();
            $this->load->view('admin/adminorders',$data);
        }
        public function products()
        {
            $this->checkLogin();
            $this->load->model('productsmodel');
            $data['products'] = $this->productsmodel->getProducts();
            $this->load->view('admin/products',$data);
        }

        public function isskuavailable()
        {
            $this->checkLogin();
            $this->load->model('productsmodel');
            $productSKU = $_POST['productSKU'];
            $response = $this->productsmodel->isSKUAvailable($productSKU);
            print $response;
        }

        public function activatedealer()
        {
            $this->checkLogin();
            $this->load->model('usermodel');
            $user_id = $_POST['user_id'];
            $response = $this->usermodel->activateDealer($user_id);
            print $response;

        }

        public function editproduct()
        {
            $productSaved = 0;
            $errors = [];
            $data['productSaved'] = $productSaved;
            $data['errors'] = $errors;
            if(isset($_GET['productId'])) {
                $this->checkLogin();
                $this->load->model('productsmodel');
                //echo $_GET['productId'];exit;
                $data['productData'] = $this->productsmodel->getProductInfoById($_GET['productId']);
                //$this->load->view('admin/editproduct',$data);
            }
            if(isset($_POST['submit'])) {
                $productName = isset($_POST['productName']) ? $_POST['productName'] : '';
                $productSKU = isset($_POST['productSKU']) ? $_POST['productSKU'] : '';
                $productPrice = isset($_POST['productPrice']) ? $_POST['productPrice'] : 0;
                $productSellPrice = isset($_POST['productSellPrice']) ? $_POST['productSellPrice'] : 0;
                $productDesc = isset($_POST['productDesc']) ? $_POST['productDesc'] : '';
                $productShortDesc = isset($_POST['productShortDesc']) ? $_POST['productShortDesc'] : ''; 
                $productAvailability = isset($_POST['productAvailability']) ? $_POST['productAvailability'] : 'false' ;
                if($productAvailability !='false') {
                    $productAvailability ='true';
                }
                /*
                 * Validate posted values.
                 */
                if (empty($productName)) {
                    $errors[] = 'Please provide a product name.';
                }
                if ($productPrice == 0) {
                    $errors[] = 'Please provide the price.';
                }
                if ($productSellPrice == 0) {
                    $errors[] = 'Please provide the sell price.';
                }
                if (empty($productDesc)) {
                    $errors[] = 'Please provide a description.';
                }
                if (empty($productShortDesc)) {
                    $errors[] = 'Please provide a short description.';
                }
                $productData = array(
                    'productName' => $productName,
                    'productSKU' => $productSKU,
                    'productPrice' => $productPrice,
                    'productSellPrice' => $productSellPrice,
                    'productDesc' => $productDesc,
                    'productShortDesc' => $productShortDesc,
                    //'productImage' => $string,
                    //'productThumb' => $filenamesToSave[0],
                    'productAvailability' => $productAvailability
                );
                $this->load->model('productsmodel');
                $result = $this->productsmodel->updateProduct($_GET['productId'],$productData);
                
                if ($result) {
                     $productSaved = 1;
                }
                $data['productSaved'] = $productSaved;
                $data['errors'] = $errors;
               // $this->load->view('admin/addproduct',$data);
                $data['productData'] = $this->productsmodel->getProductInfoById($_GET['productId']);
            }
         $this->load->view('admin/editproduct',$data);
            
        }
        public function addproduct()
        {
            $productSaved = 0;
            $errors = [];
            $data['productSaved'] = $productSaved;
            $data['errors'] = $errors;
            
            //$this->load->view('admin/addproduct', $data);   

            define('UPLOAD_DIR', 'assets/images');
            //define('UPLOAD_DIR', 'upload');
            define('UPLOAD_MAX_FILE_SIZE', 10485760); // 10MB.
            //@changed_2018-02-17_14.28
            define('UPLOAD_ALLOWED_MIME_TYPES', 'image/jpeg,image/png,image/gif');
            $this->load->model('productsmodel');
                    
            if(isset($_POST['submit'])) {
                //var_dump($_POST);
                $productName = isset($_POST['productName']) ? $_POST['productName'] : '';
                $productSKU = isset($_POST['productSKU']) ? $_POST['productSKU'] : '';
                if($productSKU=='') {
                    //$productSKU = uniqid('SKU_');
                    $productSKU = 'SKU_'.substr(md5(time()), 0, 10);
                    /*$result = $this->productsmodel->isSKUAvailable($productSKU);
                    if($result) {
                        $productSKU = uniqid('SKU_');                        
                    }*/                    
                }
                $productPrice = isset($_POST['productPrice']) ? $_POST['productPrice'] : 0;
                $productSellPrice = isset($_POST['productSellPrice']) ? $_POST['productSellPrice'] : 0;
                $productDesc = isset($_POST['productDesc']) ? $_POST['productDesc'] : '';
                $productShortDesc = isset($_POST['productShortDesc']) ? $_POST['productShortDesc'] : ''; 
                $productAvailability = isset($_POST['productAvailability']) ? $_POST['productAvailability'] : 'false' ;
                if($productAvailability !='false') {
                    $productAvailability ='true';
                }
                /*
                 * Validate posted values.
                 */
                if (empty($productName)) {
                    $errors[] = 'Please provide a product name.';
                }
                if ($productPrice == 0) {
                    $errors[] = 'Please provide the price.';
                }
                if ($productSellPrice == 0) {
                    $errors[] = 'Please provide the sell price.';
                }
                if (empty($productDesc)) {
                    $errors[] = 'Please provide a description.';
                }
                if (empty($productShortDesc)) {
                    $errors[] = 'Please provide a short description.';
                }
                /*
                 * Create "uploads" directory if it doesn't exist.
                 */
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
                $productData = array(
                    'productName' => $productName,
                    'productSKU' => $productSKU,
                    'productPrice' => $productPrice,
                    'productSellPrice' => $productSellPrice,
                    'productDesc' => $productDesc,
                    'productShortDesc' => $productShortDesc,
                    'productImage' => $string,
                    'productThumb' => $filenamesToSave[0],
                    'productAvailability' => $productAvailability
                );
                $this->load->model('productsmodel');
                $result = $this->productsmodel->addNewProduct($productData);
                
                if ($result) {
                     $productSaved = 1;
                }
                $data['productSaved'] = $productSaved;
                $data['errors'] = $errors;
               // $this->load->view('admin/addproduct',$data);
            }
         $this->load->view('admin/addproduct',$data);
        }

        public function logout()
        {
            $this->session->unset_userdata('admin_user');
            $this->session->unset_userdata('user_type');
            redirect('admin');
        }
        private function checkLogin()
        {
            $loggedIn = $this->session->userdata('admin_user');
            if($loggedIn == ""){
                redirect('admin');
            }
        }

        //new tempalte related actions which are added by lakshmi
        public function adminprofile()
        {
            $this->load->view('admin/adminprofile');
        }

        public function adminusers()
        {
            $this->checkLogin();
            $this->load->model('adminusermodel');
            $data['users'] = $this->adminusermodel->getUsers();
            //var_dump($data);exit;
            $this->load->view('admin/adminusers',$data);
        }

        public function activeusers()
        {
            $this->checkLogin();
            $this->load->model('adminusermodel');
            //$data['users'] = $this->adminusermodel->getUsers();//all users
            $data['users'] = $this->adminusermodel->getActiveUsers();

            //var_dump($data);exit;
            //$this->load->view('admin/inactiveusers',$data);
            $this->load->view('admin/activeusers',$data);
        }

        public function inactiveusers()
        {
            $this->checkLogin();
            $this->load->model('adminusermodel');
            //$data['users'] = $this->adminusermodel->getUsers();//all users
            $data['users'] = $this->adminusermodel->getInActiveUsers();

            //var_dump($data);exit;
            $this->load->view('admin/inactiveusers',$data);
        }
/*
        public function useractivities()
        {
            $this->load->view('useractivities');
        }
        public function userprojects()
        {
            $this->load->view('userprojects');
        }
        public function usertasks()
        {
            $this->load->view('usertasks');
        }
        public function userprofilesettings()
        {
            $this->load->view('userprofilesettings');   
        }*/
        
    }
?>