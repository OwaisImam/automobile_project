<?php

class Productsmodel extends CI_Model
{
    function getProducts()
    {
        /*$enumstring = 'true';
        $this->db->select()
         ->from('dr_products')
         ->where('productAvailability', $enumstring);
         $query = $this->db->get();
         */
        $query = $this->db->get('tbl_2wheelers');
        $res = $query->result();
        return $res;
    }

    function getSpareParts()
    {
        $query = $this->db->get('tbl_2wspareparts');
        $res = $query->result();
        return $res;
    }

    function getPreowned()
    {
        $query = $this->db->get('tbl_preownedvehicles');
        $res = $query->result();
        return $res;
    }

    function get2accessories()
    {
        $query = $this->db->get('tbl_2waccessories');
        $res = $query->result();
        return $res;
    }

    function get2insurance()
    {
        $query = $this->db->get('tbl_2winsurance');
        $res = $query->result();
        return $res;
    }

    function getReceivables()
    {
        $query = $this->db->get('tbl_recievables');
        $res = $query->result();
        return $res;
    }

    function getProductInfo()
    {
        $productId = $this->uri->segment(3);
        $this->db->select()
            ->from('tb_product')
            ->where('productId', $productId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }

    function getProductInfoById($productId)
    {
        $this->db->select()
            ->from('tbl_2wheelers')
            ->where('id', $productId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }

    function getSparePartsInfoById($productId)
    {
        $this->db->select()
            ->from('tbl_2wspareparts')
            ->where('id', $productId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }

    function getPreownedInfoById($productId)
    {
        $this->db->select()
            ->from('tbl_preownedvehicles')
            ->where('id', $productId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }

    function get2accessoryInfoById($productId)
    {
        $this->db->select()
            ->from('tbl_2waccessories')
            ->where('id', $productId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }

    function get2insuranceInfoById($productId)
    {
        $this->db->select()
            ->from('tbl_2winsurance')
            ->where('id', $productId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }

    function getBusinessDetailById($id)
    {
        $this->db->select()
            ->from('tbl_business_details')
            ->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }

    function getShippingCost($productId)
    {
        $this->db->select()
            ->from('dr_productshipping')
            ->where('product_id', $productId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }

    function getMembershipCharge()
    {
        $this->db->select()
            ->from('dr_appcharges')
            ->where('appcharge_id', 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }

    function deleteProduct($productId)
    {
        return $this->db->delete('tbl_2wheelers', array('id' => $productId));
    }

    function deletePreowned($productId)
    {
        return $this->db->delete('tbl_preownedvehicles', array('id' => $productId));
    }

    function deleteSpareParts($productId)
    {
        return $this->db->delete('tbl_2wspareparts', array('id' => $productId));
    }

    function delete2accessory($productId)
    {
        return $this->db->delete('tbl_2waccessories', array('id' => $productId));
    }

    function delete2insurance($productId)
    {
        return $this->db->delete('tbl_2winsurance', array('id' => $productId));
    }

    function updateProductImages($productId, $productImages)
    {
        $this->db->where('id', $productId);
        $this->db->update('tbl_2wheelers', array(
            'product_images' => $productImages
        ));
    }

    function updateProductLogo($productId, $productLogo)
    {
        $this->db->where('id', $productId);
        $this->db->update('tbl_2wheelers', array(
            'product_logo' => $productLogo
        ));
    }

    function updateProductBrochure($productId, $brochureImage)
    {
        $this->db->where('id', $productId);
        $this->db->update('tbl_2wheelers', array(
            'brochure' => $brochureImage
        ));
    }

    function updateProduct($productId, $data)
    {
        $this->db->where('id', $productId);
        $this->db->update('tbl_2wheelers', array(
            'product_type' => $data['product_type'],
            'product_name' => $data['product_name'],
            'capacity' => $data['capacity'],
            'power' => $data['power'],
            'weight' => $data['weight'],
            'features' => $data['features'],
            'description' => $data['description'],
            'price' => $data['price']
        ));
        return true;
    }

    function updatePreowned($productId, $data)
    {
        $this->db->where('id', $productId);
        $this->db->update('tbl_preownedvehicles', array(
            'product_type' => $data['product_type'],
            'product_name' => $data['product_name'],
            'insurance_cover' => $data['insurance_cover'],
            'price_negotiation' => $data['price_negotiation'],
            'hp' => $data['hp'],
            'manufactured_date' => $data['manufactured_date'],
            'brochure' => $data['brochure'],
            'description' => $data['description'],
            'price' => $data['price'],
            'kmsrun' => $data['kmsrun'],
        ));
        return true;
    }

    function updateSpareParts($productId, $data)
    {
        $this->db->where('id', $productId);
        $this->db->update('tbl_2wspareparts', array(
            'product_name' => $data['product_name'],
            'category' => $data['category'],
            'maker' => $data['maker'],
            'applicable_model' => $data['applicable_model'],
            'description' => $data['description'],
            'price' => $data['price']
        ));
        return true;
    }

    function update2accessory($productId, $data)
    {
        $this->db->where('id', $productId);
        $this->db->update('tbl_2waccessories', array(
            'product_name' => $data['product_name'],
            'maker' => $data['maker'],
            'applicable_model' => $data['applicable_model'],
            'category' => $data['category'],
            'description' => $data['description'],
            'price' => $data['price']
        ));
        return true;
    }

    function update2insurance($productId, $data)
    {
        $this->db->where('id', $productId);
        $this->db->update('tbl_2winsurance', array(
            'provider_name' => $data['provider_name'],
            'coverage_type' => $data['coverage_type'],
            'applicable_model' => $data['applicable_model'],
            'IDV' => $data['IDV'],
            'premium' => $data['premium'],
        ));
        return true;
    }

    function updateBusinessDetails($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_business_details', $data);
        return true;
    }

    function isSKUAvailable($productSKU)
    {
        $this->db->select()
            ->from('dr_products')
            ->where('productSKU', $productSKU);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    function addNewProduct($productData)
    {
        $this->db->insert('tbl_2wheelers', $productData);
        $productId = $this->db->insert_id();
        return $productId;
    }

    function addNew2accessory($productData)
    {
        $this->db->insert('tbl_2waccessories', $productData);
        $productId = $this->db->insert_id();
        return $productId;
    }

    function addNew2insurance($productData)
    {
        $this->db->insert('tbl_2winsurance', $productData);
        $productId = $this->db->insert_id();
        return $productId;
    }

    function addNewService($serviceData)
    {
        $this->db->insert('tbl_vehicleservice', $serviceData);
        $serviceId = $this->db->insert_id();
        return $serviceId;
    }

    function addPreownedProduct($productData)
    {
        $this->db->insert('tbl_preownedvehicles', $productData);
        $productId = $this->db->insert_id();
        return $productId;
    }

    function addEmployeeAccess($productData)
    {
        $this->db->insert('tbl_employeeaccess', $productData);
        $productId = $this->db->insert_id();
        return $productId;
    }

    function addSpareParts($productData)
    {
        $this->db->insert('tbl_2wspareparts', $productData);
        $productId = $this->db->insert_id();
        return $productId;
    }

    function addServiceEnquiry($productData)
    {
        $this->db->insert('tbl_serviceenquiry', $productData);
        $productId = $this->db->insert_id();
        return $productId;
    }

    function createOrder($orderTotal)
    {
        $orderData = array(
            'orderUserId' => $this->session->userdata('user_id'),
            'orderAmount' => $orderTotal,
            'orderStatus' => 'received'
        );
        $this->db->insert('dr_orders', $orderData);
        $orderid = $this->db->insert_id();

        if ($this->input->post('fname') != '') {
            $orderShippingData = array(
                'orderId' => $orderid,
                'orderShipName' => $this->input->post('fname'),
                'orderShipLname' => $this->input->post('lname'),
                'orderShipAddress' => $this->input->post('billing_address'),
                'orderShipAddress2' => $this->input->post('billing_address2'),
                'orderCity' => $this->input->post('city'),
                'orderState' => $this->input->post('state'),
                'orderZip' => $this->input->post('zipcode'),
                'orderPhone' => $this->input->post('phone'),
                'orderEmail' => $this->input->post('email'),
            );
        } else {
            $orderShippingData = array(
                'orderId' => $orderid,
                'orderShipName' => $this->input->post('fname1'),
                'orderShipLname' => $this->input->post('lname1'),
                'orderShipAddress' => $this->input->post('billing_address1'),
                'orderShipAddress2' => $this->input->post('billing_address21'),
                'orderCity' => $this->input->post('city1'),
                'orderState' => $this->input->post('state1'),
                'orderZip' => $this->input->post('zipcode1'),
                'orderPhone' => $this->input->post('phone1'),
                'orderEmail' => $this->input->post('email1'),
            );
        }
        //var_dump($orderShippingData);exit;
        $this->db->insert('dr_ordershippingdetails', $orderShippingData);
        $this->createOrderItems($orderid);
    }

    function createOrderItems($orderid)
    {

        $items = array_values(unserialize($this->session->userdata('cart')));
        foreach ($items as $item) {
            $orderItem = array(
                'orderId' => $orderid,
                'productName' => $item['name'],
                'productQty' => $item['quantity'],
                'productPrice' => $item['price']
            );
            $this->db->insert('dr_orderitems', $orderItem);
            if ($item['id'] == 200) {
                $this->createSellerAcc();
            }
        }
    }

    function createSellerAcc()
    {
        $referalCode = $this->generateReferalCode(6);
        $data = array(
            'userId' => $this->session->userdata('user_id'),
            'referredBy' => $this->session->userdata('referredby'),
            'referalCode' => $referalCode
        );
        $this->db->insert('dr_seller', $data);
        $this->createTeams();
    }

    function createTeams()
    {
        $team1 = array(
            'team_sellerid' => $this->session->userdata('user_id'),
            'referee_id' => $this->session->userdata('referredby'),
            'level' => 1
        );
        $this->db->insert('dr_teams', $team1);
        $this->db->select()
            ->from('dr_teams')
            ->where('team_sellerid', $this->session->userdata('referredby'))
            ->where('level', 1)
            ->order_by("level", "asc");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            $team2 = array(
                'team_sellerid' => $this->session->userdata('user_id'),
                'referee_id' => $data->referee_id,
                'level' => 2
            );
            $this->db->insert('dr_teams', $team2);
            $this->db->select()
                ->from('dr_teams')
                ->where('team_sellerid', $data->referee_id)
                ->where('level', 1)
                ->order_by("level", "asc");
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                $data = $query->row();
                $team3 = array(
                    'team_sellerid' => $this->session->userdata('user_id'),
                    'referee_id' => $data->referee_id,
                    'level' => 3
                );
                $this->db->insert('dr_teams', $team3);
                $this->db->select()
                    ->from('dr_teams')
                    ->where('team_sellerid', $data->referee_id)
                    ->where('level', 1)
                    ->order_by("level", "asc");
                $query = $this->db->get();
                if ($query->num_rows() > 0) {
                    $data = $query->row();
                    $team4 = array(
                        'team_sellerid' => $this->session->userdata('user_id'),
                        'referee_id' => $data->referee_id,
                        'level' => 4
                    );
                    $this->db->insert('dr_teams', $team4);
                }
            }
        }

    }

    function generateReferalCode($length = 25)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $referalResult = $this->checkReferalExist($randomString);
        if ($referalResult)
            return $randomString;
        else
            $this->generateReferalCode(6);
    }

    function checkReferalExist($code)
    {
        $this->db->select()
            ->from('dr_seller')
            ->where('referalCode', $code);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    function businessDetails()
    {
        $name = $this->input->post('name');
        $contact = $this->input->post('contact');
        $email = $this->input->post('email');
        $associated_with = $this->input->post('associated_with');
        $bname = $this->input->post('bname');
        $desc = $this->input->post('desc');
        $options = $this->input->post('options');
        $address = $this->input->post('address');
        $pincode = $this->input->post('pincode');
        $services = $this->input->post('services');
        $services1 = implode('|', $services);

        $data = array(
            'name' => $name,
            'contact' => $contact,
            'email' => $email,
            'associated_company' => $associated_with,
            'bname' => $bname,
            'description' => $desc,
            'options' => $options,
            'address' => $address,
            'pincode' => $pincode,
            'services' => $services1,
        );
        $sql = $this->db->insert('tbl_business_details', $data);
        $id = $this->db->insert_id();
        $q = $this->db->get_where('tbl_business_details', array('id' => $id));
        return $q->row();
    }

    function storeDetails()
    {
        $homedelievery = $this->input->post('homedelievery');
        $homedelievery = ($homedelievery == 'on') ? 1 : 0;
        $pickup_drop = $this->input->post('pickup_drop');
        $pickup_drop = ($pickup_drop == 'on') ? 1 : 0;
        $sun_delievery = $this->input->post('sun_delievery');
        $sun_delievery = ($sun_delievery == 'on') ? 1 : 0;
        $mon_delievery = $this->input->post('mon_delievery');
        $mon_delievery = ($mon_delievery == 'on') ? 1 : 0;
        $tue_delievery = $this->input->post('tue_delievery');
        $tue_delievery = ($tue_delievery == 'on') ? 1 : 0;
        $wed_delievery = $this->input->post('wed_delievery');
        $wed_delievery = ($wed_delievery == 'on') ? 1 : 0;
        $thu_delievery = $this->input->post('thu_delievery');
        $thu_delievery = ($thu_delievery == 'on') ? 1 : 0;
        $fri_delievery = $this->input->post('fri_delievery');
        $fri_delievery = ($fri_delievery == 'on') ? 1 : 0;
        $sat_delievery = $this->input->post('sat_delievery');
        $sat_delievery = ($sat_delievery == 'on') ? 1 : 0;
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

        $data = array(
            'homedelievery' => $homedelievery,
            'pickup_drop' => $pickup_drop,
            'sun_delievery' => $sun_delievery,
            'mon_delievery' => $mon_delievery,
            'tue_delievery' => $tue_delievery,
            'wed_delievery' => $wed_delievery,
            'thu_delievery' => $thu_delievery,
            'fri_delievery' => $fri_delievery,
            'sat_delievery' => $sat_delievery,
            'sun_from' => $sun_from,
            'sun_to' => $sun_to,
            'mon_from' => $mon_from,
            'mon_to' => $mon_to,
            'tue_from' => $tue_from,
            'tue_to' => $tue_to,
            'wed_from' => $wed_from,
            'wed_to' => $wed_to,
            'thu_from' => $thu_from,
            'thu_to' => $thu_to,
            'fri_from' => $fri_from,
            'fri_to' => $fri_to,
            'sat_from' => $sat_from,
            'sat_to' => $sat_to
        );
        $sql = $this->db->insert('tbl_storedetails', $data);
        $id = $this->db->insert_id();
        $q = $this->db->get_where('tbl_storedetails', array('id' => $id));
        return $q->row();
    }

    function bankDetails()
    {

        $accountholder_name = $this->input->post('accountholder_name');
        $account_no = $this->input->post('account_no');
        $confirmaccount_no = $this->input->post('confirmaccount_no');
        $ifsc_code = $this->input->post('ifsc_code');
        $paytm_no = $this->input->post('paytm_no');
        $gpay_no = $this->input->post('gpay_no');
        $phonepe_no = $this->input->post('phonepe_no');
        $otherupi_no = $this->input->post('otherupi_no');

        $data = array(
            'accountholder_name' => $accountholder_name,
            'account_no' => $account_no,
            'confirmaccount_no' => $confirmaccount_no,
            'ifsc_code' => $ifsc_code,
            'paytm_no' => $paytm_no,
            'gpay_no' => $gpay_no,
            'phonepe_no' => $phonepe_no,
            'otherupi_no' => $otherupi_no,
        );
        $sql = $this->db->insert('bank_details', $data);
        $id = $this->db->insert_id();
        $q = $this->db->get_where('bank_details', array('id' => $id));
        return $q->row();
    }

    function receivables()
    {

        $name = $this->input->post('name');
        $contact = $this->input->post('contact');
        $model = $this->input->post('model');
        $location = $this->input->post('location');
        $payment_due = $this->input->post('payment_due');
        $purchase_date = $this->input->post('purchase_date');
        $remarks = $this->input->post('remarks');

        $data = array(
            'name' => $name,
            'contact' => $contact,
            'model' => $model,
            'location' => $location,
            'payment_due' => $payment_due,
            'purchase_date' => $purchase_date,
            'remarks' => $remarks,
        );
        $sql = $this->db->insert('tbl_recievables', $data);
        $id = $this->db->insert_id();
        $q = $this->db->get_where('tbl_recievables', array('id' => $id));
        return $q->row();
    }

    function saleenquiry()
    {

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

        $data = array(
            'distributor_code' => $distributor_code,
            'executive' => $executive,
            'name' => $name,
            'contact' => $contact,
            'location' => $location,
            'enquiry_date' => $enquiry_date,
            'previous_maker' => $previous_maker,
            'previous_model' => $previous_model,
            'manufactured_in' => $manufactured_in,
            'canexchange' => $canexchange,
            'user' => $user,
            'usage_details' => $usage_details,
            'issue' => $issue,
            'expectations' => $expectations,
            'new_maker' => $new_maker,
            'new_model' => $new_model,
            'variant' => $variant,
            'color' => $color,
            'options' => $options,
            'scheme' => $scheme,
            'financier' => $financier,
            'scheme_details' => $scheme_details,
            'category' => $category,
            'booking_date' => $booking_date,
            'expected_deliverydate' => $expected_deliverydate,
            'delievery_type' => $delievery_type,
            'delievery_status' => $delievery_status,
            'followup_date' => $followup_date,
            'remarks' => $remarks,
        );
        $sql = $this->db->insert('tbl_vehicleenquiry', $data);
        $id = $this->db->insert_id();
        $q = $this->db->get_where('tbl_vehicleenquiry', array('id' => $id));
        return $q->row();
    }

    function getVehicleServices()
    {
        $query = $this->db->get('tbl_vehicleservice');
        $res = $query->result();
        return $res;
    }

    function getVehicleServiceInfoById($serviceId)
    {
        $this->db->select()
            ->from('tbl_vehicleservice')
            ->where('id', $serviceId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }

    function deleteVehicleService($serviceId)
    {
        return $this->db->delete('tbl_vehicleservice', array('id' => $serviceId));
    }

    function updateVehicleService($serviceId, $data)
    {
        $this->db->where('id', $serviceId);
        $this->db->update('tbl_vehicleservice', array(
            'service_name' => $data['service_name'],
            'service_category' => $data['service_category'],
            'description' => $data['description'],
            'labour_charge' => $data['labour_charge'],
        ));
        return true;
    }

    function contactDetails($postData = array())
    {

        // $response = array();	

        $sql = $this->db->insert('tb_contact', $postData);
        $id = $this->db->insert_id();
        return $id;
        //   $q = $this->db->get_where('tb_contact', array('id' => $id));
        //   $response = $q->row();

        return $response;
    }
}

?>