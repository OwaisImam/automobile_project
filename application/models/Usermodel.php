<?php
class Usermodel extends CI_Model {
    function registerUser()
    {
        $name = $this->input->post('name');
        $mobile = $this->input->post('mobile');
        $business_type = $this->input->post('business_type');
        $password = $this->input->post('password');
        $email  = $this->input->post('email');

        $data = array(
            'user_name' => $name,
            'user_mobile' => $mobile,
            'business_type' => $business_type,
            'user_password' =>md5($password),
            'user_email' =>$email
        );
        $sql = $this->db->insert('users', $data);
        $id = $this->db->insert_id();
        $q = $this->db->get_where('users', array('user_id' => $id));
        return $q->row();
    }
    function recoverPassword(){
        $question = $this->input->post('question'); 	
        $contact = $this->input->post('contact'); 	
        $answer = $this->input->post('answer');
        // $this->db->select()
        // ->from('users')
        // ->where('user_mobile',$contact);
        $this->db->where('user_mobile', $contact);
        $this->db->update('users', array(
            'user_password' => $password
        ));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row;
        } else {
            return 0;
        }
    }
    function UpdateUser($data,$user_id) {
        $this->db->where('user_id', $user_id);
        
        $userData = array(
            'user_name' => $data['user_name'],
            'username' => $data['username'],
            'addessline1' => $data['addessline1'],
            'user_mobile' => $data['user_mobile'],
            'user_email' => $data['user_email'],
            'city' => $data['city'],
            'state' => $data['state'],
            'pincode' => $data['pincode'],
            'adress_proof' => $data['adress_proof']
        );
        $this->db->update('dr_users', $userData);
        return true;
    }
    
    function isReferalCodeavailable($referalCode) {
        $this->db->select()
        ->from('dr_users')
        ->where('referal_id',$referalCode);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row;
        } else {
            return 0;
        }
    }

    public function getMyDirectRefers($user_id)
    {
        $result = array();
        $this->db->select()
        ->from('dr_users')
        ->where('user_id',$user_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $referal_id = $row->referal_id;

            $this->db->select()
            ->from('dr_users')
            ->where('referalCode',$referal_id);
            $query1 = $this->db->get();
            if ($query1->num_rows() > 0) {
                $row1 = $query1->result();
                return $row1;
            } else {
                return $result;
            }
        } else {
            return $result;
        }
    }

    function updatePaymentReceipt($data, $user_id) {
        $this->db->where('user_id', $user_id);
        $this->db->update('dr_users', array(
            'paymentReceipt' => $data['paymentReceipt']
        ));
        return true;
    }

    function activateDealer( $user_id) {
        $this->db->where('user_id', $user_id);
        $this->db->update('dr_users', array(
            'dealerStatus' => 1
        ));
        return true;
    }

    function checkLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $query = $this->db->query("SELECT * FROM `users` WHERE `username`='$username' || `user_mobile` = '$username'");
        $row = $query->row();
        if(isset($row))
        {
            
            if(md5($password) == $row->user_password){
                $authArray = array(
                    'user_id' => $row->user_id,
                    'user_name' => $username,
                    'email' => $row->email
                );
                $this->session->set_userdata('ci_session_key_generate', TRUE);
                $this->session->set_userdata('ci_seesion_key', $authArray);
                
                $this->session->set_userdata('user_name', $row->user_name);
                $this->session->set_userdata('user_id',$row->user_id );
                if(!empty($this->input->post("rememberme"))) {
                    setcookie ("loginId", $username, time()+ (10 * 365 * 24 * 60 * 60));  
                    setcookie ("loginPass", $password,  time()+ (10 * 365 * 24 * 60 * 60));
                } else {
                    setcookie ("loginId",""); 
                    setcookie ("loginPass","");
                }  
                if($this->session->prev_page == 'cart')
                {
                    $this->session->unset_userdata('prev_page');
                    redirect('cart');
                }
                else
                    redirect('dealer/dealerhome');
            }
            else
            {
                $this->session->set_flashdata('login_error', 'Invalid Password');
                redirect('dealer/login');
            }
        }
        else{
            $this->session->set_flashdata('login_error', 'User Doesnt Exist');
            redirect('login');
        }
    }
    function getTeams()
    {
        $loggedinUser = $this->session->user_id;
        $query = $this->db->query("SELECT * FROM `dr_users` RIGHT JOIN `dr_teams` ON `dr_users`.`user_id` = `dr_teams`.`team_sellerid` WHERE `dr_teams`.`referee_id`=$loggedinUser AND `dr_teams`.`level`=1");
        return $query->result();
    }
    function checkSeller()
    {
        $this->db->select()
        ->from('dr_seller')
        ->where('userId', $this->session->userdata('user_id'));
        $query = $this->db->get();
        if($query->num_rows() == 0)
            return "not-seller";
    }
    function checkReferal()
    {
        $this->db->select()
        ->from('dr_seller')
        ->where('referalCode', $this->input->post('referalCode'));
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            $data= $query->row();
            $teamsCount = $this->checkRefereeCount($data->userId);
            if($teamsCount < 3)
            {
                $this->session->set_userdata('referredby',$data->userId);
                return "validated";
            }
            else
            {
                return "error";
            }
        }
        else
            return "error";
    }
    function getCompanyReferal()
    {
        $this->db->select()
        ->from('dr_users')
        ->where('user_type','admin');
        $query = $this->db->get();
        return $query->result();
    }
    function checkRefereeCount($id)
    {
        $this->db->select()
        ->from('dr_teams')
        ->where('referee_id',$id)
        ->where('level',1);
        $query = $this->db->get();
        return $query->num_rows();
    }
    function getTeamMemByLev($userId)
    {
        $query = $this->db->query("SELECT * FROM `dr_users` RIGHT JOIN `dr_teams` ON `dr_users`.`user_id` = `dr_teams`.`team_sellerid` WHERE `dr_teams`.`referee_id`=$userId AND `dr_teams`.`level`=1");
        return $query->result();
    }
    function getPersonalData()
    {
        $userId = $this->session->userdata('user_id');
        $query = $this->db->query("SELECT * FROM `dr_users` LEFT JOIN `dr_seller` ON `dr_users`.`user_id` = `dr_seller`.`userId` WHERE `dr_users`.`user_id`= $userId");
        return $query->row();
    }
    function getUserData($user_id)
    {
        //$userId = $this->session->userdata('user_id');
        $query = $this->db->query("SELECT * FROM `dr_users` WHERE `user_id`= $user_id");
        return $query->row();
    }
    function checkLevelStatus($level)
    {
        $this->db->select()
        ->from('dr_teams')
        ->where('referee_id',$this->session->userdata('user_id'))
        ->where('level',$level);
        $query = $this->db->get();
        return $query->num_rows();
    }
    function getAgentCommission($level)
    {
        $this->db->select()
        ->from('dr_appcharges')
        ->where('appchargeName',$level);
        $query = $this->db->get();
        return $query->row()->application_fee;
    }
    function getAchievedDate($level)
    {
        $this->db->select()
        ->from('dr_teams')
        ->where('referee_id',$this->session->userdata('user_id'))
        ->where('level',$level)
        ->order_by("team_id", "Desc")
        ->limit(0,1);
        $query = $this->db->get();
    }
    function checkMobileNumberExist()
    {
        $mobileNo = $this->input->post('phone_no');
        $query = $this->db->query("SELECT * FROM `dr_users` WHERE `user_mobile` = '$mobileNo'");
        return $query->num_rows();
    }
    function checkEmailExist()
    {
        $emailId = $this->input->post('email');
        $query = $this->db->query("SELECT * FROM `dr_users` WHERE `user_email` = '$emailId'");
        return $query->num_rows();
    }

    function checkUsernameExist()
    {
        $username = $this->input->post('username');
        $query = $this->db->query("SELECT * FROM `dr_users` WHERE `username` = '$username'");
        return $query->num_rows();
    }
    function contactDetails($postData=array()){
 
      //  $response = array();
     
          $sql = $this->db->insert('tb_customer_contactus', $postData);	
          $id = $this->db->insert_id();	
          return $id;
        //   $q = $this->db->get_where('tb_contact', array('id' => $id));	
        //   $response = $q->row();
     
        
       // return $response;
      }
   }
?>