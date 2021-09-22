<?php
require("Mailer/PHPMailerAutoload.php");

class Dealer extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('usermodel');
        $this->load->model('productsmodel');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('dealer/home');
    }

    public function contact()
    {
        if (isset($_POST['submit'])) {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');
            $postData = array(
                'name' => $name,
                'email' => $email,
                'message' => $message,
                'subject' => $subject,
            );
            $email = 'suvvada.varalakshmi1@gmail.com'; //Default to whom contact msg will send
            $data = $this->productsmodel->contactDetails($postData);
            if ($data != "") {
                $test = $this->emailNotification($email, $subject, $message);
                if ($test['sent'] == 1) {
                    $response = $this->load->view('dealer/home', $test, TRUE);
                } else {
                    $response = $this->load->view('dealer/home', $test, TRUE);
                }
            }
            /// $response = $this->load->view('dealer/home',$data,TRUE);	
            ///echo $response;	
        }
    }

    public function login()
    {
        $this->load->view('dealer/login');
    }

    public function process()
    {
        $this->load->model('usermodel');
        $this->usermodel->checkLogin();
    }

    public function twowaccessories()
    {
        $productSaved = 0;
        $productDeleteStatus = 0;
        $errors = [];
        $data['productSaved'] = $productSaved;
        $productUpdated = 0;
        $data['productUpdated'] = $productUpdated;
        $data['errors'] = $errors;
        $data['productDeleteStatus'] = $productDeleteStatus;

        define('UPLOAD_DIR', 'assets/images/products');
        //define('UPLOAD_DIR', 'upload');
        define('UPLOAD_MAX_FILE_SIZE', 10485760); // 10MB.
        //@changed_2018-02-17_14.28
        define('UPLOAD_ALLOWED_MIME_TYPES', 'image/jpeg,image/png,image/gif');
        $this->load->model('productsmodel');
        $data['products'] = $this->productsmodel->get2accessories();
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'edit') {
                $data['productInfo'] = $this->productsmodel->get2accessoryInfoById($_GET['id']);
                $data['products'] = $this->productsmodel->get2accessories();
            } else if ($_GET['action'] == 'delete') {
                $data['productDeleteStatus'] = $this->productsmodel->delete2accessory($_GET['id']);
                $data['products'] = $this->productsmodel->get2accessories();
            }
        }
        if (isset($_POST['add'])) {
            if (!is_dir(UPLOAD_DIR)) {
                mkdir(UPLOAD_DIR, 0777, true);
            }
            $filenamesToSave = [];
            $product_image = '';
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
            $product_image = implode(',', $filenamesToSave);
            $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
            $maker = isset($_POST['maker']) ? $_POST['maker'] : '';
            $applicable_model = isset($_POST['applicable_model']) ? $_POST['applicable_model'] : '';
            $category = isset($_POST['category']) ? $_POST['category'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            if (empty($product_name)) {
                $errors[] = 'Please provide a product name.';
            }
            $productData = array(
                'product_name' => $product_name,
                'maker' => $maker,
                'applicable_model' => $applicable_model,
                'category' => $category,
                'description' => $description,
                'price' => $price,
                'product_image' => $product_image,
            );
            $result = $this->productsmodel->addNew2accessory($productData);

            if ($result) {
                $productSaved = 1;
            }
            $data['productSaved'] = $productSaved;
            $data['errors'] = $errors;
            $data['products'] = $this->productsmodel->get2accessories();
        }
        if (isset($_POST['edit'])) {
            if (!is_dir(UPLOAD_DIR)) {
                mkdir(UPLOAD_DIR, 0777, true);
            }
            $filenamesToSave = [];
            $product_image = '';
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
            $product_image = implode(',', $filenamesToSave);
            $productId = isset($_POST['productId']) ? $_POST['productId'] : '';
            $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
            $maker = isset($_POST['maker']) ? $_POST['maker'] : '';
            $applicable_model = isset($_POST['applicable_model']) ? $_POST['applicable_model'] : '';
            $category = isset($_POST['category']) ? $_POST['category'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            if (empty($product_name)) {
                $errors[] = 'Please provide a product name.';
            }
            $productData = array(
                'product_name' => $product_name,
                'maker' => $maker,
                'applicable_model' => $applicable_model,
                'category' => $category,
                'description' => $description,
                'price' => $price,
                //'product_images' => $product_images,
                //'product_logo' => $product_logo,
                //'brochure' => $brochure,
            );

            $result = $this->productsmodel->update2accessory($productId, $productData);

            if ($result) {
                $productSaved = 1;
            }
            $data['productUpdated'] = $productSaved;
            $data['errors'] = $errors;
            $data['productInfo'] = $this->productsmodel->get2accessoryInfoById($productId);
            $data['products'] = $this->productsmodel->get2accessories();
        }
        $this->load->view('dealer/twowaccessories', $data);

    }

    public function twowinsurance()
    {

        $productSaved = 0;
        $productDeleteStatus = 0;
        $errors = [];
        $data['productSaved'] = $productSaved;
        $productUpdated = 0;
        $data['productUpdated'] = $productUpdated;
        $data['errors'] = $errors;
        $data['productDeleteStatus'] = $productDeleteStatus;

        $this->load->model('productsmodel');
        $data['products'] = $this->productsmodel->get2insurance();
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'edit') {
                $data['productInfo'] = $this->productsmodel->get2insuranceInfoById($_GET['id']);
                $data['products'] = $this->productsmodel->get2insurance();
            } else if ($_GET['action'] == 'delete') {
                $data['productDeleteStatus'] = $this->productsmodel->delete2insurance($_GET['id']);
                $data['products'] = $this->productsmodel->get2insurance();
            }
        }
        if (isset($_POST['submit'])) {
            $provider_name = isset($_POST['provider_name']) ? $_POST['provider_name'] : '';
            $coverage_type = isset($_POST['coverage_type']) ? $_POST['coverage_type'] : '';
            $applicable_model = isset($_POST['applicable_model']) ? $_POST['applicable_model'] : '';
            $IDV = isset($_POST['IDV']) ? $_POST['IDV'] : '';
            $premium = isset($_POST['premium']) ? $_POST['premium'] : '';
            if (empty($provider_name)) {
                $errors[] = 'Please provide a provider name.';
            }
            $productData = array(
                'provider_name' => $provider_name,
                'coverage_type' => $coverage_type,
                'IDV' => $IDV,
                'applicable_model' => $applicable_model,
                'premium' => $premium,
            );
            $result = $this->productsmodel->addNew2insurance($productData);

            if ($result) {
                $productSaved = 1;
            }
            $data['productSaved'] = $productSaved;
            $data['errors'] = $errors;
            $data['products'] = $this->productsmodel->get2insurance();
        }
        if (isset($_POST['edit'])) {
            $productId = isset($_POST['productId']) ? $_POST['productId'] : '';
            $coverage_type = isset($_POST['coverage_type']) ? $_POST['coverage_type'] : '';
            $provider_name = isset($_POST['provider_name']) ? $_POST['provider_name'] : '';
            $applicable_model = isset($_POST['applicable_model']) ? $_POST['applicable_model'] : '';
            $IDV = isset($_POST['IDV']) ? $_POST['IDV'] : '';
            $premium = isset($_POST['premium']) ? $_POST['premium'] : '';
            if (empty($provider_name)) {
                $errors[] = 'Please provide a provider name.';
            }
            $productData = array(
                'provider_name' => $provider_name,
                'IDV' => $IDV,
                'coverage_type' => $coverage_type,
                'applicable_model' => $applicable_model,
                'premium' => $premium,
                //'product_logo' => $product_logo,
                //'brochure' => $brochure,
            );

            $result = $this->productsmodel->update2insurance($productId, $productData);

            if ($result) {
                $productSaved = 1;
            }
            $data['productUpdated'] = $productSaved;
            $data['errors'] = $errors;
            $data['productInfo'] = $this->productsmodel->get2insuranceInfoById($productId);
            $data['products'] = $this->productsmodel->get2insurance();
        }
        $this->load->view('dealer/twowinsurance', $data);
    }
    // public function twowspareparts()
    // {
    //     $this->load->view('dealer/twowspareparts');
    // }
    public function activitylog()
    {
        $this->load->view('dealer/activitylog');
    }

    public function help()
    {
        $this->load->view('dealer/help');
    }

    public function advertise()
    {
        $this->load->view('dealer/advertise');
    }

    public function bankdetails()
    {
        $this->load->view('dealer/bankdetails');
        if (isset($_POST['bankdetails'])) {
            $accountholder_name = $this->input->post('accountholder_name');
            $account_no = $this->input->post('account_no');
            $confirmaccount_no = $this->input->post('confirmaccount_no');
            $ifsc_code = $this->input->post('ifsc_code');
            $paytm_no = $this->input->post('paytm_no');
            $gpay_no = $this->input->post('gpay_no');
            $phonepe_no = $this->input->post('phonepe_no');
            $otherupi_no = $this->input->post('otherupi_no');
            $queryResult = $this->productsmodel->bankDetails();
            if ($account_no != $confirmaccount_no) {
                $errors[] = 'Account Number Doesnt match.';
            }
            if (count($errors) == 0) {
                $queryResult = $this->productsmodel->bankDetails();
            }
        }

    }

    public function broadcast()
    {
        $this->load->view('dealer/broadcast');
    }

    public function businesscard()
    {
        $this->load->view('dealer/businesscard');
    }

    public function businessdetails()
    {
        $data['businessDetails'] = $this->productsmodel->getBusinessDetailById(1);

        $this->load->view('dealer/businessdetails', $data);
        if (isset($_POST['businessdetails'])) {
            $id = isset($_POST['detail_id']) ? $_POST['detail_id'] : '';

            $name = $this->input->post('name');
            $contact = $this->input->post('contact');
            $email = $this->input->post('email');
            $associated_with = $this->input->post('associated_with');
            $bname = $this->input->post('bname');
            $desc = $this->input->post('desc');
            $options = $this->input->post('options');
            $address = $this->input->post('address');
            $pincode = $this->input->post('pincode');
            $btype = $this->input->post('btype');
            $services = $this->input->post('services');
//                $queryResult = $this->productsmodel->businessDetails();

            $data = array(
                'name' => $name,
                'contact' => $contact,
                'email' => $email,
                'address' => $address,
                'associated_company' => $associated_with,
                'bname' => $bname,
                'btype' => $btype,
                'description' => $desc,
                'options' => $options,
                'pincode' => $pincode,
                'services' => implode('|', $services)
            );
            $queryResult = $this->productsmodel->updateBusinessDetails($id, $data);
        }
    }

    public function communications()
    {
        $this->load->view('dealer/communications');
    }

    public function dashboard()
    {
        $this->load->view('dealer/dashboard');
    }
    // public function employeeaccess()
    // {
    //     $this->load->view('dealer/employeeaccess');
    // }
    public function myorders()
    {
        $this->load->view('dealer/myorders');
    }

    public function notifications()
    {
        $this->load->view('dealer/notifications');
    }

    public function ordersummary()
    {
        $this->load->view('dealer/ordersummary');
    }

    public function planner()
    {
        $this->load->view('dealer/planner');
    }
    // public function preownedvehicles()
    // {
    //     $this->load->view('dealer/preownedvehicles');
    // }
    public function profile()
    {
        $this->load->view('dealer/profile');
    }

    public function promotion()
    {
        $this->load->view('dealer/promotion');
    }

    public function receivables()
    {
        $data['receivables'] = $this->productsmodel->getReceivables();
        if (isset($_POST['receivables'])) {
            $name = $this->input->post('name');
            $contact = $this->input->post('contact');
            $model = $this->input->post('model');
            $location = $this->input->post('location');
            $payment_due = $this->input->post('payment_due');
            $purchase_date = $this->input->post('purchase_date');
            $remarks = $this->input->post('remarks');
            $queryResult = $this->productsmodel->receivables();
        }
        $this->load->view('dealer/receivables', $data);

    }

    public function recover()
    {
        $data['receivables'] = $this->productsmodel->getReceivables();
        if (isset($_POST['receivables'])) {
            $question = $this->input->post('question');
            $contact = $this->input->post('contact');
            $answer = $this->input->post('answer');
            $queryResult = $this->usermodel->recoverPassword();
        }
        $this->load->view('dealer/recover');
    }

    public function addproduct()
    {
        $productSaved = 0;
        $errors = [];
        $data['productSaved'] = $productSaved;
        $data['errors'] = $errors;

        define('UPLOAD_DIR', 'assets/images/products');
        //define('UPLOAD_DIR', 'upload');
        define('UPLOAD_MAX_FILE_SIZE', 10485760); // 10MB.
        //@changed_2018-02-17_14.28
        define('UPLOAD_ALLOWED_MIME_TYPES', 'image/jpeg,image/png,image/gif');

        if (isset($_POST['submit'])) {
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
            $product_images = implode(',', $filenamesToSave);

            $product_type = isset($_POST['product_type']) ? $_POST['product_type'] : '';
            $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
            $capacity = isset($_POST['capacity']) ? $_POST['capacity'] : '';
            $power = isset($_POST['power']) ? $_POST['power'] : '';
            $weight = isset($_POST['weight']) ? $_POST['weight'] : '';
            $features = isset($_POST['features']) ? $_POST['features'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            if (empty($product_name)) {
                $errors[] = 'Please provide a product name.';
            }
            $productData = array(
                'product_type' => $product_type,
                'product_name' => $product_name,
                'capacity' => $capacity,
                'power' => $power,
                'weight' => $weight,
                'features' => $features,
                'description' => $description,
                'price' => $price,
                'product_image1' => $product_images
            );
            $this->load->model('productsmodel');
            $result = $this->productsmodel->addNewProduct($productData);

            if ($result) {
                $productSaved = 1;
            }
            $data['productSaved'] = $productSaved;
            $data['errors'] = $errors;
        }
        $this->load->view('dealer/twowheelers', $data);
    }

    public function register()
    {
        $this->load->view('dealer/register');
        if (isset($_POST['register'])) {
            $password = $this->input->post('password');
            $confirm_password = $this->input->post('confirm_password');
            $email = $this->input->post('email');
            $subject = 'Signup | Verification';
            $body = "<p>Thanks for signing up!</p> <p>Your account has been created, you can login with the following credentials </p><br> Username: " . $username . " <br>Password: " . $pass . "<br>";
            if ($password != $confirm_password) {
                redirect("dealer/register?msg=Password and Confirm password not matched");
            }
            if ($email == '') {
                redirect("dealer/register?msg=Email not entered");
            } else {
                $queryResult = $this->usermodel->registerUser();
                if ($queryResult != Null && $this->session->prev_page == 'cart') {
                    $this->session->set_userdata('user_name', $queryResult->user_name);
                    $this->session->set_userdata('user_id', $queryResult->user_id);
                    $this->session->unset_userdata('prev_page');
                    redirect('cart');
                } else if ($queryResult != Null) {
                    $this->session->set_userdata('user_name', $queryResult->user_name);
                    $this->session->set_userdata('user_id', $queryResult->user_id);
                    $this->session->set_userdata('email', $queryResult->user_email);
                    if ($email != '') {
                        $test = $this->emailNotification($email, $subject, $body);
                        if ($test[sent] == 1) {
                            redirect('dealer/login');
                        } else {
                            redirect('dealer/register');
                        }
                    }

                } else {
                    redirect('dealer/login');
                }
            }
        }
    }

    private function emailNotification($email, $subject, $body)
    {
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
        $mail->setFrom('sandeepautomobile91@gmail.com', 'Automobile');
        $mail->addAddress($email, 'automobile');     // Add a recipient
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = $body;
        if (!$mail->send()) {
            $res['sent'] = 0;
            $res['err'] = $mail->ErrorInfo;
        } else {
            $res['sent'] = 1;
            $res['err'] = '';
        }
        return $res;
    }

    public function saleenquiry()
    {
        $this->load->view('dealer/saleenquiry');
        if (isset($_POST['saleenquiry'])) {
            $distributor_code = $this->input->post('distributor_code');
            $executive = $this->input->post('executive');
            $name = $this->input->post('name');
            $contact = $this->input->post('contact');
            $location = $this->input->post('location');
            $enquiry_date = $this->input->post('enquiry_date');
            $previous_maker = $this->input->post('previous_maker');
            $previous_model = $this->input->post('previous_model');
            $manufactured_in = $this->input->post('manufactured_in');
            $canexchange = $this->input->post('canexchange');
            $user = $this->input->post('user');
            $usage_details = $this->input->post('usage_details');
            $issue = $this->input->post('issue');
            $expectations = $this->input->post('expectations');
            $new_maker = $this->input->post('new_maker');
            $new_model = $this->input->post('new_model');
            $variant = $this->input->post('variant');
            $color = $this->input->post('color');
            $options = $this->input->post('options');
            $scheme = $this->input->post('scheme');
            $financier = $this->input->post('financier');
            $scheme_details = $this->input->post('scheme_details');
            $category = $this->input->post('category');
            $booking_date = $this->input->post('booking_date');
            $expected_deliverydate = $this->input->post('expected_deliverydate');
            $delievery_type = $this->input->post('delievery_type');
            $delievery_status = $this->input->post('delievery_status');
            $followup_date = $this->input->post('followup_date');
            $remarks = $this->input->post('remarks');
            $queryResult = $this->productsmodel->saleenquiry();
        }
    }
    // public function serviceenquiry()
    // {
    //     $this->load->view('dealer/serviceenquiry');
    // }
    public function storedetails()
    {
        $this->load->view('dealer/storedetails');
        if (isset($_POST['storedetails'])) {
            $homedelievery = $this->input->post('homedelievery');
            $pickup_drop = $this->input->post('pickup_drop');
            $sun_delievery = $this->input->post('sun_delievery');
            $mon_delievery = $this->input->post('mon_delievery');
            $tue_delievery = $this->input->post('tue_delievery');
            $wed_delievery = $this->input->post('wed_delievery');
            $thu_delievery = $this->input->post('thu_delievery');
            $fri_delievery = $this->input->post('fri_delievery');
            $sat_delievery = $this->input->post('sat_delievery');
            $sun_from = $this->input->post('sun_from');
            $sun_to = $this->input->post('sun_to');
            $mon_from = $this->input->post('mon_from');
            $mon_to = $this->input->post('mon_to');
            $tue_from = $this->input->post('tue_from');
            $tue_to = $this->input->post('tue_to');
            $wed_from = $this->input->post('wed_from');
            $wed_to = $this->input->post('wed_to');
            $thu_from = $this->input->post('thu_from');
            $thu_to = $this->input->post('thu_to');
            $fri_from = $this->input->post('fri_from');
            $fri_to = $this->input->post('fri_to');
            $sat_from = $this->input->post('sat_from');
            $sat_to = $this->input->post('sat_to');

            $queryResult = $this->productsmodel->storeDetails();
        }
    }

    public function userprofile()
    {
        $this->load->model('usermodel');
        $user_id = $this->session->userdata('user_id');
        $data['userData'] = $this->usermodel->getUserData($user_id);

        $saved = 0;
        $errors = [];
        $data['saved'] = $saved;
        $data['errors'] = $errors;
        //$this->load->view('userprofile',$data);

        if (isset($_POST['submit'])) {
            //$user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '0';
            $user_name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $addessline1 = isset($_POST['addessline1']) ? $_POST['addessline1'] : '';
            $user_mobile = isset($_POST['user_mobile']) ? $_POST['user_mobile'] : '';
            $user_email = isset($_POST['user_email']) ? $_POST['user_email'] : '';
            $city = isset($_POST['city']) ? $_POST['city'] : '';
            $state = isset($_POST['state']) ? $_POST['state'] : '';
            $pincode = isset($_POST['pincode']) ? $_POST['pincode'] : '';
            $adress_proof = isset($_POST['adress_proof']) ? $_POST['adress_proof'] : '';

            $username = $this->input->post('username');
            $errors = [];
            //define('UPLOAD_DIR', 'assets/images');
            define('UPLOAD_DIR', "upload/$username");
            //define('UPLOAD_DIR', 'upload');
            define('UPLOAD_MAX_FILE_SIZE', 10485760); // 10MB.
            //@changed_2018-02-17_14.28
            define('UPLOAD_ALLOWED_MIME_TYPES', 'image/jpeg,image/png,image/gif,application/pdf');
            if (!is_dir(UPLOAD_DIR)) {
                mkdir(UPLOAD_DIR, 0777, true);
            }
            $filenamesToSave = [];
            $allowedMimeTypes = explode(',', UPLOAD_ALLOWED_MIME_TYPES);
            //var_dump($_FILES);
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
            $adress_proofnew = implode(',', $filenamesToSave);
            if ($adress_proofnew != '') {
                $adress_proof = $adress_proofnew;
            }

            $userData = array(
                'user_name' => $user_name,
                'username' => $username,
                'addessline1' => $addessline1,
                'user_mobile' => $user_mobile,
                'user_email' => $user_email,
                'city' => $city,
                'state' => $state,
                'pincode' => $pincode,
                'adress_proof' => $adress_proof
            );
            $this->load->model('usermodel');
            $result = $this->usermodel->UpdateUser($userData, $user_id);
            if ($result) {
                $saved = 1;
            }
            $data['saved'] = $saved;
            $data['errors'] = $errors;

            $data['userData'] = $this->usermodel->getUserData($user_id);
            // $this->load->view('userprofile',$data);
        }
        $this->load->view('userprofile', $data);
    }


    public function subscription()
    {
        $this->load->view('dealer/subscription');
    }

    public function testimonial()
    {
        $this->load->view('dealer/testimonial');
    }

    public function twowheelers()
    {
        $productSaved = 0;
        $productDeleteStatus = 0;
        $errors = [];
        $data['productSaved'] = $productSaved;
        $productUpdated = 0;
        $data['productUpdated'] = $productUpdated;
        $data['errors'] = $errors;
        $data['productDeleteStatus'] = $productDeleteStatus;
        $data['refreshHeader'] = 0;
        define('UPLOAD_DIR', 'assets/images/products');
        //define('UPLOAD_DIR', 'upload');
        define('UPLOAD_MAX_FILE_SIZE', 10485760); // 10MB.
        //@changed_2018-02-17_14.28
        define('UPLOAD_ALLOWED_MIME_TYPES', 'image/jpeg,image/png,image/gif');
        $this->load->model('productsmodel');
        $data['products'] = $this->productsmodel->getProducts();
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'edit') {
                $data['productInfo'] = $this->productsmodel->getProductInfoById($_GET['id']);
                $data['products'] = $this->productsmodel->getProducts();
            } else if ($_GET['action'] == 'delete') {
                $data['productDeleteStatus'] = $this->productsmodel->deleteProduct($_GET['id']);
                $data['products'] = $this->productsmodel->getProducts();
            } else if ($_GET['action'] == 'deleteProductImage') {
                $productId = $_GET['id'];
                $name = $_GET['name'];
                $productInfo = $this->productsmodel->getProductInfoById($productId);
                $prodImages = $productInfo->product_images;
                if (strpos($prodImages, ',' . $name) !== false) {
                    $newStr = str_replace(',' . $name, '', $prodImages);
                } else if (strpos($prodImages, $name . ',') !== false) {
                    $newStr = str_replace($name . ',', '', $prodImages);
                } else if (strpos($prodImages, $name) !== false) {
                    $newStr = str_replace($name, '', $prodImages);
                } else {
                    $newStr = $prodImages;
                }
                $result = $this->productsmodel->updateProductImages($productId, $newStr);

                if ($result) {
                    $productUpdated = 1;
                    $data['refreshHeader'] = 1;
                }
                $data['productUpdated'] = $productUpdated;
                $data['errors'] = $errors;
                $data['productInfo'] = $this->productsmodel->getProductInfoById($productId);
                $data['products'] = $this->productsmodel->getProducts();

            } else if ($_GET['action'] == 'deleteProductLogo') {
                $productId = $_GET['id'];
                $name = $_GET['name'];
                $productInfo = $this->productsmodel->getProductInfoById($productId);
                $productLogo = $productInfo->product_logo;
                if (strpos($productLogo, $name) !== false) {
                    $newStr = str_replace($name, '', $productLogo);
                } else {
                    $newStr = $productLogo;
                }
                $result = $this->productsmodel->updateProductLogo($productId, $newStr);

                if ($result) {
                    $productUpdated = 1;
                    $data['refreshHeader'] = 1;
                }
                $data['productUpdated'] = $productUpdated;
                $data['errors'] = $errors;
                $data['productInfo'] = $this->productsmodel->getProductInfoById($productId);
                $data['products'] = $this->productsmodel->getProducts();
            } else if ($_GET['action'] == 'deleteProductBrochure') {
                $productId = $_GET['id'];
                $name = $_GET['name'];
                $productInfo = $this->productsmodel->getProductInfoById($productId);
                $prodBrochure = $productInfo->brochure;
                if (strpos($prodBrochure, $name) !== false) {
                    $newStr = str_replace($name, '', $prodBrochure);
                } else {
                    $newStr = $prodBrochure;
                }
                $result = $this->productsmodel->updateProductBrochure($productId, $newStr);

                if ($result) {
                    $productUpdated = 1;
                    $data['refreshHeader'] = 1;
                }
                $data['productUpdated'] = $productUpdated;
                $data['errors'] = $errors;
                $data['productInfo'] = $this->productsmodel->getProductInfoById($productId);
                $data['products'] = $this->productsmodel->getProducts();
            }
        }
        if (isset($_POST['add'])) {
            if (!is_dir(UPLOAD_DIR)) {
                mkdir(UPLOAD_DIR, 0777, true);
            }
            $filenamesToSave = [];
            $product_logo = '';
            $brochure = '';
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
                if (isset($_FILES['product_logo']['error'])) {
                    $uploadedFileName = basename($_FILES['product_logo']['name']);

                    if ($_FILES['product_logo']['size'] <= UPLOAD_MAX_FILE_SIZE) {
                        $uploadedFileType = $_FILES['product_logo']['type'];
                        $uploadedFileTempName = $_FILES['product_logo']['tmp_name'];

                        $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;

                        if (in_array($uploadedFileType, $allowedMimeTypes)) {
                            if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                                $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                            } else {
                                $product_logo = $uploadedFilePath;
                            }
                        } else {
                            $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                        }
                    } else {
                        $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                    }
                }
                if (isset($_FILES['brochure']['error'])) {
                    $uploadedFileName = basename($_FILES['brochure']['name']);

                    if ($_FILES['brochure']['size'] <= UPLOAD_MAX_FILE_SIZE) {
                        $uploadedFileType = $_FILES['brochure']['type'];
                        $uploadedFileTempName = $_FILES['brochure']['tmp_name'];

                        $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;

                        if (in_array($uploadedFileType, $allowedMimeTypes)) {
                            if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                                $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                            } else {
                                $brochure = $uploadedFilePath;
                            }
                        } else {
                            $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                        }
                    } else {
                        $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                    }
                }
            }
            $product_images = implode(',', $filenamesToSave);
            $product_type = isset($_POST['product_type']) ? $_POST['product_type'] : '';
            $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
            $capacity = isset($_POST['capacity']) ? $_POST['capacity'] : '';
            $power = isset($_POST['power']) ? $_POST['power'] : '';
            $weight = isset($_POST['weight']) ? $_POST['weight'] : '';
            $features = isset($_POST['features']) ? $_POST['features'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            if (empty($product_name)) {
                $errors[] = 'Please provide a product name.';
            }
            $productData = array(
                'product_type' => $product_type,
                'product_name' => $product_name,
                'capacity' => $capacity,
                'power' => $power,
                'weight' => $weight,
                'features' => $features,
                'description' => $description,
                'price' => $price,
                'product_images' => $product_images,
                'product_logo' => $product_logo,
                'brochure' => $brochure,
            );

            $result = $this->productsmodel->addNewProduct($productData);

            if ($result) {
                $productSaved = 1;
            }
            $data['productSaved'] = $productSaved;
            $data['errors'] = $errors;
            $data['products'] = $this->productsmodel->getProducts();
        }
        if (isset($_POST['edit'])) {
            if (!is_dir(UPLOAD_DIR)) {
                mkdir(UPLOAD_DIR, 0777, true);
            }
            $filenamesToSave = [];
            $product_logo = '';
            $brochure = '';
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
                if (isset($_FILES['product_logo']['error'])) {
                    $uploadedFileName = basename($_FILES['product_logo']['name']);

                    if ($_FILES['product_logo']['size'] <= UPLOAD_MAX_FILE_SIZE) {
                        $uploadedFileType = $_FILES['product_logo']['type'];
                        $uploadedFileTempName = $_FILES['product_logo']['tmp_name'];

                        $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;

                        if (in_array($uploadedFileType, $allowedMimeTypes)) {
                            if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                                $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                            } else {
                                $product_logo = $uploadedFilePath;
                            }
                        } else {
                            $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                        }
                    } else {
                        $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                    }
                }
                if (isset($_FILES['brochure']['error'])) {
                    $uploadedFileName = basename($_FILES['brochure']['name']);

                    if ($_FILES['brochure']['size'] <= UPLOAD_MAX_FILE_SIZE) {
                        $uploadedFileType = $_FILES['brochure']['type'];
                        $uploadedFileTempName = $_FILES['brochure']['tmp_name'];

                        $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;

                        if (in_array($uploadedFileType, $allowedMimeTypes)) {
                            if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                                $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                            } else {
                                $brochure = $uploadedFilePath;
                            }
                        } else {
                            $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                        }
                    } else {
                        $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                    }
                }
            }
            $product_images = implode(',', $filenamesToSave);
            $productId = isset($_POST['productId']) ? $_POST['productId'] : '';
            $product_type = isset($_POST['product_type']) ? $_POST['product_type'] : '';
            $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
            $capacity = isset($_POST['capacity']) ? $_POST['capacity'] : '';
            $power = isset($_POST['power']) ? $_POST['power'] : '';
            $weight = isset($_POST['weight']) ? $_POST['weight'] : '';
            $features = isset($_POST['features']) ? $_POST['features'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            if (empty($product_name)) {
                $errors[] = 'Please provide a product name.';
            }
            $productData = array(
                'product_type' => $product_type,
                'product_name' => $product_name,
                'capacity' => $capacity,
                'power' => $power,
                'weight' => $weight,
                'features' => $features,
                'description' => $description,
                'price' => $price
            );

            $result = $this->productsmodel->updateProduct($productId, $productData);

            if ($result) {
                $productSaved = 1;
            }
            $data['productUpdated'] = $productSaved;
            $data['errors'] = $errors;
            $data['productInfo'] = $this->productsmodel->getProductInfoById($productId);
            $data['products'] = $this->productsmodel->getProducts();
        }
        $this->load->view('dealer/twowheelers', $data);
    }

    public function preownedvehicles()
    {

        $productSaved = 0;
        $productDeleteStatus = 0;
        $errors = [];
        $data['productSaved'] = $productSaved;
        $productUpdated = 0;
        $data['productUpdated'] = $productUpdated;
        $data['errors'] = $errors;
        $data['productDeleteStatus'] = $productDeleteStatus;

        define('UPLOAD_DIR', 'assets/images/products');
        //define('UPLOAD_DIR', 'upload');
        define('UPLOAD_MAX_FILE_SIZE', 10485760); // 10MB.
        //@changed_2018-02-17_14.28
        define('UPLOAD_ALLOWED_MIME_TYPES', 'image/jpeg,image/png,image/gif');
        $data['products'] = $this->productsmodel->getPreowned();
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'edit') {
                $data['productInfo'] = $this->productsmodel->getPreownedInfoById($_GET['id']);
                $data['products'] = $this->productsmodel->getPreowned();
            } else if ($_GET['action'] == 'delete') {
                $data['productDeleteStatus'] = $this->productsmodel->deletePreowned($_GET['id']);
                $data['products'] = $this->productsmodel->getPreowned();
            }
        }
        if (isset($_POST['edit'])) {
            if (!is_dir(UPLOAD_DIR)) {
                mkdir(UPLOAD_DIR, 0777, true);
            }
            $product_image1 = '';
            $product_image2 = '';
            $product_image3 = '';
            $allowedMimeTypes = explode(',', UPLOAD_ALLOWED_MIME_TYPES);
            /*
             * Upload files.
             */
            if (!empty($_FILES)) {
                if (isset($_FILES['product_image1']['error'])) {
                    $uploadedFileName = basename($_FILES['product_image1']['name']);

                    if ($_FILES['product_image1']['size'] <= UPLOAD_MAX_FILE_SIZE) {
                        $uploadedFileType = $_FILES['product_image1']['type'];
                        $uploadedFileTempName = $_FILES['product_image1']['tmp_name'];

                        $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;

                        if (in_array($uploadedFileType, $allowedMimeTypes)) {
                            if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                                $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                            } else {
                                $product_image1 = $uploadedFilePath;
                            }
                        } else {
                            $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                        }
                    } else {
                        $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                    }
                }
                if (isset($_FILES['product_image2']['error'])) {
                    $uploadedFileName = basename($_FILES['product_image2']['name']);

                    if ($_FILES['product_image2']['size'] <= UPLOAD_MAX_FILE_SIZE) {
                        $uploadedFileType = $_FILES['product_image2']['type'];
                        $uploadedFileTempName = $_FILES['product_image2']['tmp_name'];

                        $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;

                        if (in_array($uploadedFileType, $allowedMimeTypes)) {
                            if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                                $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                            } else {
                                $product_image2 = $uploadedFilePath;
                            }
                        } else {
                            $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                        }
                    } else {
                        $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                    }
                }
                if (isset($_FILES['product_image3']['error'])) {
                    $uploadedFileName = basename($_FILES['product_image3']['name']);

                    if ($_FILES['product_image3']['size'] <= UPLOAD_MAX_FILE_SIZE) {
                        $uploadedFileType = $_FILES['product_image3']['type'];
                        $uploadedFileTempName = $_FILES['product_image3']['tmp_name'];

                        $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;

                        if (in_array($uploadedFileType, $allowedMimeTypes)) {
                            if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                                $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                            } else {
                                $product_image3 = $uploadedFilePath;
                            }
                        } else {
                            $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                        }
                    } else {
                        $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                    }
                }
            }
            $productId = isset($_POST['productId']) ? $_POST['productId'] : '';
            $product_type = isset($_POST['product_type']) ? $_POST['product_type'] : '';
            $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
            $insurance_cover = isset($_POST['insurance_cover']) ? $_POST['insurance_cover'] : '';
            $price_negotiation = isset($_POST['price_negotiation']) ? $_POST['price_negotiation'] : '';
            $transfer_facility = isset($_POST['transfer_facility']) ? $_POST['transfer_facility'] : '';
            $kmsrun = isset($_POST['kmsrun']) ? $_POST['kmsrun'] : '';
            $hp = isset($_POST['hp']) ? $_POST['hp'] : '';
            $manufactured_date = isset($_POST['manufactured_date']) ? $_POST['manufactured_date'] : '';
            $brochure = isset($_POST['brochure']) ? $_POST['brochure'] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            if (empty($product_name)) {
                $errors[] = 'Please provide a product name.';
            }
            $productData = array(
                'product_type' => $product_type,
                'product_name' => $product_name,
                'insurance_cover' => $insurance_cover,
                'price_negotiation' => $price_negotiation,
                'transfer_facility' => $transfer_facility,
                'insurance_cover' => $insurance_cover,
                'hp' => $hp,
                'manufactured_date' => $manufactured_date,
                'brochure' => $brochure,
                // 'product_image1' => $product_image1,
                'description' => $description,
                // 'product_image2' => $product_image2,
                // 'product_image3' => $product_image3,
                'price' => $price,
                'kmsrun' => $kmsrun
            );

            $result = $this->productsmodel->updatePreowned($productId, $productData);

            if ($result) {
                $productSaved = 1;
            }
            $data['productUpdated'] = $productSaved;
            $data['errors'] = $errors;
            $data['productInfo'] = $this->productsmodel->getPreownedInfoById($productId);
            $data['products'] = $this->productsmodel->getPreowned();
        }
        if (isset($_POST['submit'])) {
            if (!is_dir(UPLOAD_DIR)) {
                mkdir(UPLOAD_DIR, 0777, true);
            }
            $product_image1 = '';
            $product_image2 = '';
            $product_image3 = '';
            $allowedMimeTypes = explode(',', UPLOAD_ALLOWED_MIME_TYPES);
            /*
             * Upload files.
             */
            if (!empty($_FILES)) {
                if (isset($_FILES['product_image1']['error'])) {
                    $uploadedFileName = basename($_FILES['product_image1']['name']);

                    if ($_FILES['product_image1']['size'] <= UPLOAD_MAX_FILE_SIZE) {
                        $uploadedFileType = $_FILES['product_image1']['type'];
                        $uploadedFileTempName = $_FILES['product_image1']['tmp_name'];

                        $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;

                        if (in_array($uploadedFileType, $allowedMimeTypes)) {
                            if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                                $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                            } else {
                                $product_image1 = $uploadedFilePath;
                            }
                        } else {
                            $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                        }
                    } else {
                        $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                    }
                }
                if (isset($_FILES['product_image2']['error'])) {
                    $uploadedFileName = basename($_FILES['product_image2']['name']);

                    if ($_FILES['product_image2']['size'] <= UPLOAD_MAX_FILE_SIZE) {
                        $uploadedFileType = $_FILES['product_image2']['type'];
                        $uploadedFileTempName = $_FILES['product_image2']['tmp_name'];

                        $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;

                        if (in_array($uploadedFileType, $allowedMimeTypes)) {
                            if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                                $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                            } else {
                                $product_image2 = $uploadedFilePath;
                            }
                        } else {
                            $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                        }
                    } else {
                        $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                    }
                }
                if (isset($_FILES['product_image3']['error'])) {
                    $uploadedFileName = basename($_FILES['product_image3']['name']);

                    if ($_FILES['product_image3']['size'] <= UPLOAD_MAX_FILE_SIZE) {
                        $uploadedFileType = $_FILES['product_image3']['type'];
                        $uploadedFileTempName = $_FILES['product_image3']['tmp_name'];

                        $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;

                        if (in_array($uploadedFileType, $allowedMimeTypes)) {
                            if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                                $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                            } else {
                                $product_image3 = $uploadedFilePath;
                            }
                        } else {
                            $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                        }
                    } else {
                        $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                    }
                }

            }
            $product_type = isset($_POST['product_type']) ? $_POST['product_type'] : '';
            $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
            $insurance_cover = isset($_POST['insurance_cover']) ? $_POST['insurance_cover'] : '';
            $price_negotiation = isset($_POST['price_negotiation']) ? $_POST['price_negotiation'] : '';
            $transfer_facility = isset($_POST['transfer_facility']) ? $_POST['transfer_facility'] : '';
            $kmsrun = isset($_POST['kmsrun']) ? $_POST['kmsrun'] : '';
            $hp = isset($_POST['hp']) ? $_POST['hp'] : '';
            $manufactured_date = isset($_POST['manufactured_date']) ? $_POST['manufactured_date'] : '';
            $manufactured_date = date('F Y', strtotime($manufactured_date));
            $brochure = isset($_POST['brochure']) ? $_POST['brochure'] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            if (empty($product_name)) {
                $errors[] = 'Please provide a product name.';
            }
            $productData = array(
                'product_type' => $product_type,
                'product_name' => $product_name,
                'insurance_cover' => $insurance_cover,
                'price_negotiation' => $price_negotiation,
                'transfer_facility' => $transfer_facility,
                'insurance_cover' => $insurance_cover,
                'hp' => $hp,
                'manufactured_date' => $manufactured_date,
                'brochure' => $brochure,
                'price_negotiation' => $price_negotiation,
                'product_image1' => $product_image1,
                'description' => $description,
                'product_image2' => $product_image2,
                'product_image3' => $product_image3,
                'price' => $price,
                'description' => $description,
                'kmsrun' => $kmsrun
            );

            $this->load->model('productsmodel');
            $result = $this->productsmodel->addPreownedProduct($productData);

            if ($result) {
                $productSaved = 1;
            }
            $data['productSaved'] = $productSaved;
            $data['errors'] = $errors;
        }
        $this->load->view('dealer/preownedvehicles', $data);
    }

    public function serviceenquiry()
    {

        $productSaved = 0;
        $errors = [];
        $data['productSaved'] = $productSaved;
        $data['errors'] = $errors;

        define('UPLOAD_DIR', 'assets/images/products');
        //define('UPLOAD_DIR', 'upload');
        define('UPLOAD_MAX_FILE_SIZE', 10485760); // 10MB.
        //@changed_2018-02-17_14.28
        define('UPLOAD_ALLOWED_MIME_TYPES', 'image/jpeg,image/png,image/gif');

        if (isset($_POST['submit'])) {
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

            $name = isset($_POST['name']) ? $_POST['pronameduct_type'] : '';
            $number = isset($_POST['number']) ? $_POST['number'] : '';
            $location = isset($_POST['location']) ? $_POST['location'] : '';
            $date = isset($_POST['date']) ? $_POST['date'] : '';
            $maker = isset($_POST['maker']) ? $_POST['maker'] : '';
            $model = isset($_POST['model']) ? $_POST['model'] : '';
            $model_number = isset($_POST['model_number']) ? $_POST['model_number'] : '';
            $job_details = isset($_POST['job_details']) ? $_POST['job_details'] : '';
            $mechanic_attended = isset($_POST['mechanic_attended']) ? $_POST['mechanic_attended'] : '';
            $preliminary_inspection = isset($_POST['preliminary_inspection']) ? $_POST['preliminary_inspection'] : '';
            $futher_work = isset($_POST['futher_work']) ? $_POST['futher_work'] : '';
            $actual_work_done = isset($_POST['actual_work_done']) ? $_POST['actual_work_done'] : '';
            $parts_included = isset($_POST['parts_included']) ? $_POST['parts_included'] : '';
            $delivery_type = isset($_POST['delivery_type']) ? $_POST['delivery_type'] : '';
            $delivery_status = isset($_POST['delivery_status']) ? $_POST['delivery_status'] : '';
            $labout_charge = isset($_POST['labout_charge']) ? $_POST['labout_charge'] : '';
            $parts_charge = isset($_POST['parts_charge']) ? $_POST['parts_charge'] : '';
            $tax = isset($_POST['tax']) ? $_POST['tax'] : '';
            $total_amount = isset($_POST['total_amount']) ? $_POST['total_amount'] : '';
            $followup_date = isset($_POST['followup_date']) ? $_POST['followup_date'] : '';
            $remarks = isset($_POST['remarks']) ? $_POST['remarks'] : '';
            if (empty($product_name)) {
                $errors[] = 'Please provide a product name.';
            }
            $productData = array(
                'name' => $name,
                'number' => $number,
                'location' => $location,
                'date' => $date,
                'maker' => $maker,
                'model' => $model,
                'model_number' => $model_number,
                'job_details' => $job_details,
                'mechanic_attended' => $mechanic_attended,
                'preliminary_inspection' => $preliminary_inspection,
                'futher_work' => $futher_work,
                'actual_work_done' => $actual_work_done,
                'parts_included' => $parts_included,
                'tax' => $tax,
                'total_amount' => $total_amount,
                'followup_date' => $followup_date,
                'remarks' => $remarks
            );

            $this->load->model('productsmodel');
            $result = $this->productsmodel->addPreownedProduct($productData);

            if ($result) {
                $productSaved = 1;
            }
            $data['productSaved'] = $productSaved;
            $data['errors'] = $errors;
        }
        $this->load->view('dealer/preownedvehicles', $data);
    }

    public function employeeaccess()
    {

        $productSaved = 0;
        $errors = [];
        $data['productSaved'] = $productSaved;
        $data['errors'] = $errors;

        define('UPLOAD_DIR', 'assets/images/products');
        //define('UPLOAD_DIR', 'upload');
        define('UPLOAD_MAX_FILE_SIZE', 10485760); // 10MB.
        //@changed_2018-02-17_14.28
        define('UPLOAD_ALLOWED_MIME_TYPES', 'image/jpeg,image/png,image/gif');

        if (isset($_POST['submit'])) {
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

            $name1 = isset($_POST['name1']) ? $_POST['name1'] : '';
            $contact1 = isset($_POST['contact1']) ? $_POST['contact1'] : '';
            $name2 = isset($_POST['name2']) ? $_POST['name2'] : '';
            $contact2 = isset($_POST['contact2']) ? $_POST['contact2'] : '';
            $name3 = isset($_POST['name3']) ? $_POST['name3'] : '';
            $contact3 = isset($_POST['contact3']) ? $_POST['contact3'] : '';

            if (empty($product_name)) {
                $errors[] = 'Please provide a product name.';
            }
            $productData = array(
                'name1' => $name1,
                'contact1' => $contact1,
                'name2' => $name2,
                'contact2' => $contact2,
                'name3' => $name3,
                'contact3' => $contact3,

            );

            $this->load->model('productsmodel');
            $result = $this->productsmodel->addEmployeeAccess($productData);

            if ($result) {
                $productSaved = 1;
            }
            $data['productSaved'] = $productSaved;
            $data['errors'] = $errors;
        }
        $this->load->view('dealer/employeeaccess', $data);
    }

    public function twowspareparts()
    {

        $productSaved = 0;
        $productDeleteStatus = 0;
        $errors = [];
        $data['productSaved'] = $productSaved;
        $productUpdated = 0;
        $data['productUpdated'] = $productUpdated;
        $data['errors'] = $errors;
        $data['productDeleteStatus'] = $productDeleteStatus;

        define('UPLOAD_DIR', 'assets/images/products');
        //define('UPLOAD_DIR', 'upload');
        define('UPLOAD_MAX_FILE_SIZE', 10485760); // 10MB.
        //@changed_2018-02-17_14.28
        define('UPLOAD_ALLOWED_MIME_TYPES', 'image/jpeg,image/png,image/gif');
        $data['products'] = $this->productsmodel->getSpareParts();
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'edit') {
                $data['productInfo'] = $this->productsmodel->getSparePartsInfoById($_GET['id']);
                $data['products'] = $this->productsmodel->getSpareParts();
            } else if ($_GET['action'] == 'delete') {
                $data['productDeleteStatus'] = $this->productsmodel->deleteSpareParts($_GET['id']);
                $data['products'] = $this->productsmodel->getSpareParts();
            }
        }

        if (isset($_POST['edit'])) {
            if (!is_dir(UPLOAD_DIR)) {
                mkdir(UPLOAD_DIR, 0777, true);
            }
            $product_image = '';
            $allowedMimeTypes = explode(',', UPLOAD_ALLOWED_MIME_TYPES);
            /*
             * Upload files.
             */
            if (!empty($_FILES)) {

                if (isset($_FILES['product_image']['error'])) {
                    $uploadedFileName = basename($_FILES['product_image']['name']);

                    if ($_FILES['product_image']['size'] <= UPLOAD_MAX_FILE_SIZE) {
                        $uploadedFileType = $_FILES['product_image']['type'];
                        $uploadedFileTempName = $_FILES['product_image']['tmp_name'];

                        $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;

                        if (in_array($uploadedFileType, $allowedMimeTypes)) {
                            if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                                $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                            } else {
                                $product_image = $uploadedFilePath;
                            }
                        } else {
                            $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                        }
                    } else {
                        $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                    }
                }

            }
            $productId = isset($_POST['productId']) ? $_POST['productId'] : '';
            $maker = isset($_POST['maker']) ? $_POST['maker'] : '';
            $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
            $applicable_model = isset($_POST['applicable_model']) ? $_POST['applicable_model'] : '';
            $category = isset($_POST['category']) ? $_POST['category'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            if (empty($product_name)) {
                $errors[] = 'Please provide a product name.';
            }
            $productData = array(
                'product_name' => $product_name,
                'maker' => $maker,
                'applicable_model' => $applicable_model,
                'category' => $category,
                'description' => $description,
                'price' => $price,
            );

            $result = $this->productsmodel->updateSpareParts($productId, $productData);

            if ($result) {
                $productSaved = 1;
            }
            $data['productUpdated'] = $productSaved;
            $data['errors'] = $errors;
            $data['productInfo'] = $this->productsmodel->getSparePartsInfoById($productId);
            $data['products'] = $this->productsmodel->getSpareParts();
        }
        if (isset($_POST['submit'])) {
            if (!is_dir(UPLOAD_DIR)) {
                mkdir(UPLOAD_DIR, 0777, true);
            }
            $filenamesToSave = [];
            $allowedMimeTypes = explode(',', UPLOAD_ALLOWED_MIME_TYPES);
            /*
             * Upload files.
             */
            if (!empty($_FILES)) {
                // if (isset($_FILES['file']['error'])) {
                //     foreach ($_FILES['file']['error'] as $uploadedFileKey => $uploadedFileError) {
                //         if ($uploadedFileError === UPLOAD_ERR_NO_FILE) {
                //             $errors[] = 'You did not provide any files.';
                //         } elseif ($uploadedFileError === UPLOAD_ERR_OK) {
                //             $uploadedFileName = basename($_FILES['file']['name'][$uploadedFileKey]);

                //             if ($_FILES['file']['size'][$uploadedFileKey] <= UPLOAD_MAX_FILE_SIZE) {
                //                 $uploadedFileType = $_FILES['file']['type'][$uploadedFileKey];
                //                 $uploadedFileTempName = $_FILES['file']['tmp_name'][$uploadedFileKey];

                //                 $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;

                //                 if (in_array($uploadedFileType, $allowedMimeTypes)) {
                //                     if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                //                         $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                //                     } else {
                //                         $filenamesToSave[] = $uploadedFilePath;
                //                         //$filenamesToSave = $uploadedFilePath;
                //                     }
                //                 } else {
                //                     $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                //                 }
                //             } else {
                //                 $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                //             }
                //         }
                //     }
                // }
                if (isset($_FILES['product_image']['error'])) {
                    $uploadedFileName = basename($_FILES['product_image']['name']);

                    if ($_FILES['product_image']['size'] <= UPLOAD_MAX_FILE_SIZE) {
                        $uploadedFileType = $_FILES['product_image']['type'];
                        $uploadedFileTempName = $_FILES['product_image']['tmp_name'];

                        $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;

                        if (in_array($uploadedFileType, $allowedMimeTypes)) {
                            if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                                $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                            } else {
                                $product_image = $uploadedFilePath;
                            }
                        } else {
                            $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                        }
                    } else {
                        $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                    }
                }

            }
            $maker = isset($_POST['maker']) ? $_POST['maker'] : '';
            $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
            $applicable_model = isset($_POST['applicable_model']) ? $_POST['applicable_model'] : '';
            $category = isset($_POST['category']) ? $_POST['category'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            if (empty($product_name)) {
                $errors[] = 'Please provide a product name.';
            }
            $productData = array(
                'product_name' => $product_name,
                'maker' => $maker,
                'applicable_model' => $applicable_model,
                'category' => $category,
                'description' => $description,
                'price' => $price,
                'product_image' => $product_image,
            );

            $this->load->model('productsmodel');
            $result = $this->productsmodel->addSpareParts($productData);

            if ($result) {
                $productSaved = 1;
            }
            $data['productSaved'] = $productSaved;
            $data['errors'] = $errors;
        }
        $this->load->view('dealer/twowspareparts', $data);
    }

    public function dealerhome()
    {
        $this->load->view('dealer/userhome');
    }

    public function vehicleservice()
    {
        // var_dump($_POST);
        $serviceSaved = 0;
        $errors = [];
        $data['serviceSaved'] = $serviceSaved;
        $data['errors'] = $errors;

        define('UPLOAD_DIR', 'assets/images/products');
        //define('UPLOAD_DIR', 'upload');
        define('UPLOAD_MAX_FILE_SIZE', 10485760); // 10MB.
        //@changed_2018-02-17_14.28
        define('UPLOAD_ALLOWED_MIME_TYPES', 'image/jpeg,image/png,image/gif');
        $this->load->model('productsmodel');

        $data['vehicleservices'] = $this->productsmodel->getVehicleServices();
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'edit') {
                $data['vehicleserviceInfo'] = $this->productsmodel->getVehicleServiceInfoById($_GET['id']);
                $data['vehicleservices'] = $this->productsmodel->getVehicleServices();
            } else if ($_GET['action'] == 'delete') {
                $data['vehicleDeleteStatus'] = $this->productsmodel->deleteVehicleService($_GET['id']);
                $data['vehicleservices'] = $this->productsmodel->getVehicleServices();
            }
        }
        if (isset($_POST['submit'])) {
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
            $service_images = implode(',', $filenamesToSave);

            $service_name = isset($_POST['service_name']) ? $_POST['service_name'] : '';
            $service_category = isset($_POST['service_category']) ? $_POST['service_category'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $service_logo = isset($_POST['service_logo']) ? $_POST['service_logo'] : '';
            $labour_charge = isset($_POST['labour_charge']) ? $_POST['labour_charge'] : '';

            if (empty($service_name)) {
                $errors[] = 'Please provide a service name.';
            }
            $serviceData = array(
                'service_name' => $service_name,
                'service_category' => $service_category,
                'description' => $description,
                'service_logo' => $service_logo,
                'labour_charge' => $labour_charge,
            );
            $result = $this->productsmodel->addNewService($serviceData);

            if ($result) {
                $serviceSaved = 1;
            }
            $data['serviceSaved'] = $serviceSaved;
            $data['errors'] = $errors;
            $data['vehicleservices'] = $this->productsmodel->getVehicleServices();
        }
        if (isset($_POST['edit'])) {
            if (!is_dir(UPLOAD_DIR)) {
                mkdir(UPLOAD_DIR, 0777, true);
            }
            $filenamesToSave = [];
            $service_logo = '';
            $brochure = '';
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
                if (isset($_FILES['service_logo']['error'])) {
                    $uploadedFileName = basename($_FILES['service_logo']['name']);
                    if ($_FILES['service_logo']['size'] <= UPLOAD_MAX_FILE_SIZE) {
                        $uploadedFileType = $_FILES['service_logo']['type'];
                        $uploadedFileTempName = $_FILES['service_logo']['tmp_name'];
                        $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;
                        if (in_array($uploadedFileType, $allowedMimeTypes)) {
                            if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                                $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                            } else {
                                $service_logo = $uploadedFilePath;
                            }
                        } else {
                            $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                        }
                    } else {
                        $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                    }
                }
                if (isset($_FILES['brochure']['error'])) {
                    $uploadedFileName = basename($_FILES['brochure']['name']);
                    if ($_FILES['brochure']['size'] <= UPLOAD_MAX_FILE_SIZE) {
                        $uploadedFileType = $_FILES['brochure']['type'];
                        $uploadedFileTempName = $_FILES['brochure']['tmp_name'];
                        $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;
                        if (in_array($uploadedFileType, $allowedMimeTypes)) {
                            if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                                $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                            } else {
                                $brochure = $uploadedFilePath;
                            }
                        } else {
                            $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                        }
                    } else {
                        $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                    }
                }
            }
            $service_images = implode(',', $filenamesToSave);
            $serviceId = isset($_POST['serviceId']) ? $_POST['serviceId'] : '';
            $service_name = isset($_POST['service_name']) ? $_POST['service_name'] : '';
            $service_category = isset($_POST['service_category']) ? $_POST['service_category'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $service_logo = isset($_POST['service_logo']) ? $_POST['service_logo'] : '';
            $labour_charge = isset($_POST['labour_charge']) ? $_POST['labour_charge'] : '';
            if (empty($service_name)) {
                $errors[] = 'Please provide a Service name.';
            }
            $serviceData = array(
                'service_name' => $service_name,
                'service_category' => $service_category,
                'description' => $description,
                'service_logo' => $service_logo,
                'labour_charge' => $labour_charge,
            );

            $result = $this->productsmodel->updateVehicleService($serviceId, $serviceData);

            if ($result) {
                $serviceSaved = 1;
            }
            $data['serviceSaved'] = $serviceSaved;
            $data['errors'] = $errors;
            $data['vehicleserviceInfo'] = $this->productsmodel->getVehicleServiceInfoById($serviceId);
            $data['services'] = $this->productsmodel->getVehicleServices();
        }
        $this->load->view('dealer/vehicleservice', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('ci_seesion_key');
        $this->session->unset_userdata('ci_session_key_generate');
        $this->session->sess_destroy();
        redirect('dealer/index');
    }

    public function ProductCatalogue()
    {


        $this->load->view('dealer/productcatalog');

    }


}


?>