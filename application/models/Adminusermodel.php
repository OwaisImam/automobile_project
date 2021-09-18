<?php
    class AdminUsermodel extends CI_Model {
        public function checkLogin()
        {
            $username = $this->input->post('admin_email');
            $password = $this->input->post('admin_password');
            if($username == "admin" && $password == "Dev@0891")
            {
                $this->session->set_userdata('admin_user', 'admin');
                $this->session->set_userdata('user_type','admin');
                redirect('admin/dashboard');
            }
            else
            {
                $this->session->set_flashdata('adminlogin_error', 'Invalid Username & Password');
                redirect('admin');
            }
        }
        public function getUsers()
        {
            $query = $this->db->query("SELECT * FROM `dr_users` WHERE `user_type` = 'normal' ORDER BY `createdon` DESC");
            return $query->result();
        }

        public function getActiveUsers()
        {
         $query = $this->db->query("SELECT * FROM `dr_users` WHERE `user_type` = 'normal' 
         AND dealerStatus = 1
         ORDER BY `createdon` DESC");
            return $query->result();   
        }

        public function getInActiveUsers()
        {
         $query = $this->db->query("SELECT * FROM `dr_users` WHERE `user_type` = 'normal' 
         AND dealerStatus = 0
         ORDER BY `createdon` DESC");
            return $query->result();   
        }

        public function getOrders()
        {
            //$query = $this->db->query("SELECT * FROM `dr_orders` LEFT JOIN `dr_users` ON `dr_orders`.`orderUserId` = `dr_users`.`user_id` ORDER BY `orderDate` DESC");
            $query = $this->db->query("SELECT * FROM `dr_orders` RIGHT JOIN `dr_orderitems` ON `dr_orderitems`.`orderId` = `dr_orders`.`orderId`  LEFT JOIN `dr_users` ON `dr_orders`.`orderUserId` = `dr_users`.`user_id` GROUP BY `dr_orders`.`orderId` ORDER BY `orderDate` DESC");
            return $query->result();

        }

        function getOrderInfoById($orderId) {
            /*$this->db->select()
            ->from('dr_orders')
            ->where('orderId', $orderId);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return $query->row();
            }*/
            $query = $this->db->query("SELECT du.* FROM `dr_ordershippingdetails` as du RIGHT JOIN `dr_orders` as do ON `do`.`orderId` = `du`.`orderId` WHERE `do`.orderId = $orderId ");
            return $query->result();
            //var_dump($query->result());exit;
            //return $query->row();
        }
    }
?>